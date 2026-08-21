// ============================================================
// PortfolioSaaS, Portfolio public JavaScript
// ============================================================

document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('js-ready');
    initAnimations();
    initTypewriter();
    initCounters();
    initProjectFilters();
    initHeaderScroll();
    initMobileMenu();
    initSidebarMenu();
    initBackToTop();
    initDarkModeToggle();
    initActiveNavTracking();
    initMoreDropdown();
});

// --- Boutons "Voir plus" ---
document.addEventListener('click', function(e) {
    var btn = e.target.closest('[data-showmore-btn]');
    if (btn) {
        e.preventDefault();
        toggleShowMore(btn.getAttribute('data-showmore-btn'), btn);
    }
});

// --- Scroll Animations ---
function initAnimations() {
    if (document.body.dataset.animations !== '1') return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.anim').forEach(el => observer.observe(el));
}

// --- Typewriter Effect ---
function initTypewriter() {
    const el = document.getElementById('typewriter-target');
    if (!el) return;

    let titles;
    try { titles = JSON.parse(el.dataset.titles); } catch { return; }
    if (!titles || !titles.length) return;

    let titleIdx = 0, charIdx = 0, isDeleting = false;

    // SEO : si le HTML contient déjà le 1er titre, démarrer en mode suppression
    // pour éviter tout flash/doublon visuel au chargement.
    if (el.textContent.trim() === titles[0]) {
        charIdx = titles[0].length;
        isDeleting = true;
    }

    function type() {
        const current = titles[titleIdx];
        if (isDeleting) {
            el.textContent = current.substring(0, charIdx - 1);
            charIdx--;
        } else {
            el.textContent = current.substring(0, charIdx + 1);
            charIdx++;
        }

        let delay = isDeleting ? 40 : 80;

        if (!isDeleting && charIdx === current.length) {
            delay = 2000;
            isDeleting = true;
        } else if (isDeleting && charIdx === 0) {
            isDeleting = false;
            titleIdx = (titleIdx + 1) % titles.length;
            delay = 500;
        }

        setTimeout(type, delay);
    }

    type();
}

// --- Counter Animation ---
function initCounters() {
    const counters = document.querySelectorAll('.counter');
    if (!counters.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            observer.unobserve(el);

            const target = el.dataset.target;
            const numMatch = target.match(/(\d+)/);
            if (!numMatch) return;

            const targetNum = parseInt(numMatch[1]);
            const prefix = target.substring(0, target.indexOf(numMatch[1]));
            const suffix = target.substring(target.indexOf(numMatch[1]) + numMatch[1].length);
            const duration = 1500;
            const start = performance.now();

            function update(now) {
                const elapsed = now - start;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                const current = Math.round(targetNum * eased);
                el.textContent = prefix + current + suffix;
                if (progress < 1) requestAnimationFrame(update);
            }

            requestAnimationFrame(update);
        });
    }, { threshold: 0.5 });

    counters.forEach(el => observer.observe(el));
}

// --- Project Filters ---
function initProjectFilters() {
    const buttons = document.querySelectorAll('.projects-filter-btn');
    const cards = document.querySelectorAll('.project-card');
    if (!buttons.length) return;

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;
            cards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

// --- Project Modal ---
function openProjectModal(cardEl) {
    let data;
    try { data = JSON.parse(cardEl.dataset.project); } catch { return; }

    const container = document.getElementById('project-modal-container');
    if (!container) return;

    const galleryHtml = (data.gallery || []).map(img =>
        `<img src="${escapeAttr(img)}" style="width:100%;border-radius:var(--border-radius);margin-top:0.75rem" loading="lazy">`
    ).join('');

    const techHtml = (data.technologies || []).map(t =>
        `<span style="padding:0.25rem 0.75rem;background:var(--color-primary);color:#fff;border-radius:4px;font-size:0.75rem;opacity:0.85">${escapeHtml(t)}</span>`
    ).join('');

    const linksHtml = [
        data.link_live ? `<a href="${escapeAttr(data.link_live)}" target="_blank" class="btn btn-primary">Voir le projet</a>` : '',
        data.link_github ? `<a href="${escapeAttr(data.link_github)}" target="_blank" class="btn btn-outline">GitHub</a>` : '',
        data.link_demo ? `<a href="${escapeAttr(data.link_demo)}" target="_blank" class="btn btn-outline">Demo</a>` : '',
    ].filter(Boolean).join('');

    container.innerHTML = `
        <div class="project-modal-overlay" onclick="if(event.target===this)closeProjectModal()">
            <div class="project-modal"
                 role="dialog"
                 aria-modal="true"
                 aria-label="${escapeAttr(data.title)}"
                 tabindex="-1">
                <button class="project-modal-close" onclick="closeProjectModal()">&times;</button>
                ${data.image ? `<img src="${escapeAttr(data.image)}" style="width:100%;max-height:400px;object-fit:cover">` : ''}
                <div style="padding:2rem">
                    ${data.badge_text ? `<span style="display:inline-block;padding:0.25rem 0.75rem;border-radius:9999px;font-size:0.6875rem;font-weight:700;color:#fff;background:${escapeAttr(data.badge_color||'#6b7280')};margin-bottom:0.75rem">${escapeHtml(data.badge_text)}</span>` : ''}
                    <h2 style="font-size:1.5rem;font-weight:700;font-family:var(--font-heading);margin-bottom:0.5rem">${escapeHtml(data.title)}</h2>
                    <p style="font-size:0.875rem;opacity:0.6;margin-bottom:1rem">${escapeHtml([data.category, data.client, data.year, data.duration].filter(Boolean).join(' · '))}</p>
                    ${data.description ? `<div style="font-size:0.9375rem;line-height:1.7;margin-bottom:1.5rem">${data.description}</div>` : ''}
                    ${techHtml ? `<div style="display:flex;flex-wrap:wrap;gap:0.375rem;margin-bottom:1.5rem">${techHtml}</div>` : ''}
                    ${linksHtml ? `<div style="display:flex;gap:0.75rem;flex-wrap:wrap;margin-bottom:1rem">${linksHtml}</div>` : ''}
                    ${galleryHtml}
                </div>
            </div>
        </div>
    `;

    document.body.style.overflow = 'hidden';

    // Focus automatique sur la modale pour les lecteurs d'écran
    requestAnimationFrame(() => {
        const modal = container.querySelector('[role="dialog"]');
        if (modal) modal.focus();
    });
}

function closeProjectModal() {
    const container = document.getElementById('project-modal-container');
    if (container) container.innerHTML = '';
    document.body.style.overflow = '';
}

// Note: Escape est géré dans le listener global du lecteur blog ci-dessous

// --- Header Scroll ---
function initHeaderScroll() {
    const header = document.getElementById('portfolio-header');
    if (!header) return;

    const bgStyle = header.dataset.bgStyle;
    const textColor = header.dataset.textColor;
    const textColorInit = header.dataset.textColorInit;
    const isTransparent = header.classList.contains('header-transparent-init');
    const isGlass = bgStyle === 'glass';

    function updateHeader() {
        const scrolled = window.scrollY > 80;

        if (scrolled) {
            header.classList.add('scrolled');
            if (isTransparent) {
                header.classList.remove('header-transparent-init');
            }
            // Restaurer la couleur de texte normale
            header.style.color = textColor;
        } else {
            header.classList.remove('scrolled');
            if (isTransparent) {
                header.classList.add('header-transparent-init');
            }
            // Couleur initiale (clair pour transparent)
            header.style.color = textColorInit;
        }
    }

    // Appliquer la couleur initiale
    header.style.color = textColorInit;

    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();
}

// --- Mobile Menu (burger) ---
function initMobileMenu() {
    const btn = document.getElementById('mobile-menu-btn');
    const drawer = document.getElementById('header-mobile-drawer');
    if (!btn || !drawer) return;

    const burgerOpen = btn.querySelector('.burger-open');
    const burgerClose = btn.querySelector('.burger-close');

    btn.addEventListener('click', () => {
        const isOpen = drawer.classList.toggle('open');
        if (burgerOpen) burgerOpen.style.display = isOpen ? 'none' : '';
        if (burgerClose) burgerClose.style.display = isOpen ? '' : 'none';
    });

    // Fermer le drawer quand on clique sur un lien
    drawer.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            drawer.classList.remove('open');
            if (burgerOpen) burgerOpen.style.display = '';
            if (burgerClose) burgerClose.style.display = 'none';
        });
    });
}

// --- Sidebar Menu (sidebar mode) ---
function initSidebarMenu() {
    const sidebar = document.getElementById('portfolio-sidebar');
    const toggle = document.getElementById('sidebar-mobile-toggle');
    const overlay = document.getElementById('sidebar-mobile-overlay');
    if (!sidebar || !toggle) return;

    toggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        if (overlay) overlay.classList.toggle('open');
    });

    if (overlay) {
        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('open');
        });
    }

    // Fermer quand on clique sur un lien nav (mobile)
    sidebar.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('open');
                if (overlay) overlay.classList.remove('open');
            }
        });
    });
}

// --- Back to Top ---
function initBackToTop() {
    const btn = document.getElementById('back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    }, { passive: true });

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// --- Dark Mode Toggle ---
function initDarkModeToggle() {
    const btn = document.getElementById('dark-mode-toggle');
    if (!btn) return;

    const sunIcon = btn.querySelector('.dm-sun');
    const moonIcon = btn.querySelector('.dm-moon');

    // Check saved preference or system
    let isDark = localStorage.getItem('portfolio-dark') === 'true';
    if (localStorage.getItem('portfolio-dark') === null) {
        isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    }

    function applyDark(dark) {
        const root = document.documentElement;
        if (dark) {
            root.style.setProperty('--color-bg', '#0f172a');
            root.style.setProperty('--color-text', '#e2e8f0');
            root.style.setProperty('--color-card-bg', '#1e293b');
            root.style.setProperty('--color-border', '#334155');
            root.style.setProperty('--color-header-bg', '#1e293b');
            root.style.setProperty('--color-footer-bg', '#0f172a');
            document.body.style.color = '#e2e8f0';
            if (sunIcon) sunIcon.style.display = 'none';
            if (moonIcon) moonIcon.style.display = '';
        } else {
            root.style.removeProperty('--color-bg');
            root.style.removeProperty('--color-text');
            root.style.removeProperty('--color-card-bg');
            root.style.removeProperty('--color-border');
            root.style.removeProperty('--color-header-bg');
            root.style.removeProperty('--color-footer-bg');
            document.body.style.color = '';
            if (sunIcon) sunIcon.style.display = '';
            if (moonIcon) moonIcon.style.display = 'none';
        }
    }

    applyDark(isDark);

    btn.addEventListener('click', () => {
        isDark = !isDark;
        localStorage.setItem('portfolio-dark', isDark);
        applyDark(isDark);
    });
}

// --- Active Nav Tracking ---
// --- More Dropdown ---
function initMoreDropdown() {
    const btn = document.getElementById('header-more-btn');
    const dropdown = document.getElementById('header-more-dropdown');
    if (!btn || !dropdown) return;

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdown.classList.toggle('open');
    });

    document.addEventListener('click', () => dropdown.classList.remove('open'));

    // Fermer quand on clique sur un lien
    dropdown.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => dropdown.classList.remove('open'));
    });
}

function initActiveNavTracking() {
    const sections = document.querySelectorAll('.section[id], .hero-section[id]');
    const navLinks = document.querySelectorAll('.header-nav-link, .sidebar-nav-link');
    if (!sections.length || !navLinks.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === '#' + id) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        });
    }, { threshold: 0.2, rootMargin: '-80px 0px -50% 0px' });

    sections.forEach(section => observer.observe(section));
}

// --- Show More / Less toggle ---
function toggleShowMore(group, btn) {
    const items = document.querySelectorAll('[data-showmore="' + group + '"]');
    const isHidden = items[0] && items[0].style.display === 'none';
    const span = btn.querySelector('span');
    const svg = btn.querySelector('svg');

    items.forEach(function(el) {
        if (isHidden) {
            el.style.display = '';
            // Trigger animation
            if (el.classList.contains('anim')) {
                el.classList.add('visible');
            }
        } else {
            el.style.display = 'none';
        }
    });

    if (isHidden) {
        span.textContent = 'Voir moins';
        svg.style.transform = 'rotate(180deg)';
    } else {
        span.textContent = 'Voir les ' + items.length + ' autres';
        svg.style.transform = '';
    }
}

// --- Contact Form ---
function submitContactForm(event, userId) {
    event.preventDefault();
    const form = document.getElementById('contact-form');
    const feedback = document.getElementById('contact-feedback');
    const btn = document.getElementById('contact-submit');
    const formData = new FormData(form);

    btn.disabled = true;
    btn.textContent = 'Envoi en cours...';
    feedback.textContent = '';

    fetch('/api/contact-form.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            user_id: userId,
            name: formData.get('name'),
            email: formData.get('email'),
            subject: formData.get('subject'),
            message: formData.get('message'),
            website: formData.get('website'), // honeypot
        }),
    })
    .then(r => r.json())
    .then(json => {
        if (json.success) {
            feedback.innerHTML = '<span style="color:#059669">Message envoye avec succes ! Merci.</span>';
            form.reset();
        } else {
            feedback.innerHTML = '<span style="color:#dc2626">' + escapeHtml(json.message) + '</span>';
        }
    })
    .catch(() => {
        feedback.innerHTML = '<span style="color:#dc2626">Erreur de connexion. Veuillez reessayer.</span>';
    })
    .finally(() => {
        btn.disabled = false;
        btn.textContent = 'Envoyer le message';
    });

    return false;
}

// --- Lecteur d'articles Blog ---
function openArticleModal(id) {
    const posts = window._blogPosts || [];
    const post = posts.find(p => p.id === id);
    if (!post) return;

    if (post.external_url) {
        window.open(post.external_url, '_blank', 'noopener');
        return;
    }

    const container = document.getElementById('article-reader-container');
    if (!container) return;

    // Suggestions : même catégorie en priorité, sinon les plus récents, max 4
    const others = posts.filter(p => p.id !== id);
    const sameCategory = others.filter(p => p.category && p.category === post.category);
    const remaining = others.filter(p => !p.category || p.category !== post.category);
    const suggestions = [...sameCategory, ...remaining].slice(0, 4);

    const suggCardsHtml = suggestions.map(s => `
        <div class="article-sugg-card" onclick="openArticleModal(${s.id})" role="button" tabindex="0" aria-label="Lire : ${escapeAttr(s.title)}">
            <div class="article-sugg-thumb">
                ${s.cover_image
                    ? `<img src="${escapeAttr(s.cover_image)}" alt="${escapeAttr(s.title)}" loading="lazy">`
                    : `<div class="article-sugg-thumb-placeholder"></div>`}
            </div>
            <div class="article-sugg-body">
                ${s.category ? `<span class="article-sugg-cat">${escapeHtml(s.category)}</span>` : ''}
                <p class="article-sugg-title">${escapeHtml(s.title)}</p>
                ${s.published_at ? `<span class="article-sugg-date">${escapeHtml(s.published_at)}</span>` : ''}
            </div>
        </div>
    `).join('');

    const suggestionsHtml = suggestions.length ? `
        <aside class="article-reader-aside">
            <div class="article-sugg-panel">
                <h3 class="article-sugg-heading">À lire aussi</h3>
                <div class="article-sugg-list">${suggCardsHtml}</div>
            </div>
        </aside>
    ` : '';

    const tagsHtml = (post.tags || []).length
        ? `<div class="article-reader-tags">${post.tags.map(t => `<span class="article-reader-tag">#${escapeHtml(t)}</span>`).join('')}</div>`
        : '';

    const metaParts = [];
    if (post.category) metaParts.push(`<span class="article-reader-category">${escapeHtml(post.category)}</span>`);
    if (post.reading_time) metaParts.push(`<span>${escapeHtml(String(post.reading_time))} min de lecture</span>`);
    if (post.published_at) metaParts.push(`<span>${escapeHtml(post.published_at)}</span>`);

    container.innerHTML = `
        <div class="article-reader-overlay" id="article-overlay" onclick="if(event.target===this)closeArticleModal()">
            <article class="article-reader" role="dialog" aria-modal="true" aria-label="${escapeAttr(post.title)}" tabindex="-1">
                <button class="article-reader-close" onclick="closeArticleModal()" aria-label="Fermer">&times;</button>
                ${post.cover_image ? `<img src="${escapeAttr(post.cover_image)}" alt="${escapeAttr(post.title)}" class="article-reader-cover">` : ''}
                <div class="article-reader-body">
                    <div class="article-reader-layout">
                        <div class="article-reader-main">
                            ${metaParts.length ? `<div class="article-reader-meta">${metaParts.join('')}</div>` : ''}
                            <h1 class="article-reader-title">${escapeHtml(post.title)}</h1>
                            ${post.summary ? `<p class="article-reader-summary">${escapeHtml(post.summary)}</p>` : ''}
                            <div class="article-prose">${post.content || '<p style="opacity:.5">Contenu non disponible.</p>'}</div>
                            ${tagsHtml}
                        </div>
                        ${suggestionsHtml}
                    </div>
                </div>
            </article>
        </div>
    `;

    document.body.style.overflow = 'hidden';
    requestAnimationFrame(() => {
        const overlay = container.querySelector('.article-reader-overlay');
        if (overlay) overlay.scrollTop = 0;
        const reader = container.querySelector('.article-reader');
        if (reader) reader.focus();
    });
}

function closeArticleModal() {
    const container = document.getElementById('article-reader-container');
    if (container) container.innerHTML = '';
    document.body.style.overflow = '';
}

// Fermer le lecteur avec Echap
document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
        closeArticleModal();
        closeProjectModal();
    }
});

// Interception des clics sur les cartes blog : ouvrir le modal au lieu de naviguer
// (Ctrl+clic / Cmd+clic / clic molette → navigation normale dans un nouvel onglet)
document.addEventListener('click', e => {
    const card = e.target.closest('a[data-post-id]');
    if (!card) return;
    if (e.ctrlKey || e.metaKey || e.shiftKey || e.altKey) return;
    const id = parseInt(card.dataset.postId, 10);
    if (!id) return;
    const posts = window._blogPosts || [];
    const post  = posts.find(p => p.id === id);
    if (!post || post.external_url) return; // laisser naviguer pour les liens externes
    e.preventDefault();
    openArticleModal(id);
});

// --- Helpers ---
function escapeHtml(str) {
    return (str || '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
}
function escapeAttr(str) {
    return (str || '').replace(/"/g, '&quot;').replace(/'/g, '&#39;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
}

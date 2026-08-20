        </main><!-- /main -->
    </div><!-- /main content area -->
</div><!-- /flex container -->

<!-- Toast container -->
<div id="toast-container" class="fixed top-4 right-4 z-[100] flex flex-col gap-2 pointer-events-none" style="max-width: 380px;"></div>

<!-- Confirm modal -->
<div x-show="confirmModal.show" x-cloak class="fixed inset-0 z-[90] flex items-center justify-center p-4">
    <div class="absolute inset-0 bg-gray-900/60" @click="confirmModal.show = false"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl max-w-sm w-full p-6"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        <div class="flex items-start gap-3 mb-4">
            <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"/>
                </svg>
            </div>
            <div>
                <h3 class="text-base font-semibold text-gray-900" x-text="confirmModal.title"></h3>
                <p class="mt-1 text-sm text-gray-500" x-text="confirmModal.message"></p>
            </div>
        </div>
        <div class="flex gap-3 justify-end">
            <button @click="confirmModal.show = false"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                Annuler
            </button>
            <button @click="confirmModal.onConfirm(); confirmModal.show = false"
                    class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 transition-colors">
                Confirmer
            </button>
        </div>
    </div>
</div>

<script>
// ----------------------------------------------------------
// Dashboard App (Alpine.js)
// ----------------------------------------------------------
function dashboardApp() {
    return {
        mobileOpen: false,
        sidebarCollapsed: localStorage.getItem('sidebar_collapsed') === 'true',
        confirmModal: { show: false, title: '', message: '', onConfirm: () => {} },

        init() {
            // Fermer le menu mobile sur resize
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) this.mobileOpen = false;
            });
        },

        toggleSidebar() {
            this.sidebarCollapsed = !this.sidebarCollapsed;
            localStorage.setItem('sidebar_collapsed', this.sidebarCollapsed);
        }
    };
}

// ----------------------------------------------------------
// CSRF Token
// ----------------------------------------------------------
let CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]')?.content || '';
if (!CSRF_TOKEN) { console.warn('CSRF token missing from meta tag'); }

// ----------------------------------------------------------
// API Call helper
// ----------------------------------------------------------
async function apiCall(endpoint, method = 'GET', data = null) {
    // Hostinger mutualise bloque PUT/DELETE — tout passe en POST avec X-HTTP-Method-Override
    const actualMethod = (method === 'GET') ? 'GET' : 'POST';
    const headers = {
        'X-Requested-With': 'XMLHttpRequest',
        'X-HTTP-Method-Override': method
    };

    // Ajouter CSRF et Content-Type seulement pour les mutations
    if (method !== 'GET') {
        headers['Content-Type'] = 'application/json';
        headers['X-CSRF-Token'] = CSRF_TOKEN;
    }

    const options = { method: actualMethod, headers };

    if (data && method !== 'GET') {
        options.body = JSON.stringify(data);
    }

    // Gerer les endpoints avec query params: 'messages?filter=all' -> '/api/messages.php?filter=all'
    let url;
    const qPos = endpoint.indexOf('?');
    if (qPos !== -1) {
        url = '/api/' + endpoint.substring(0, qPos) + '.php' + endpoint.substring(qPos);
    } else {
        url = '/api/' + endpoint + '.php';
    }

    const res = await fetch(url, options);

    // Verifier que la reponse est bien du JSON
    const text = await res.text();
    let json;
    try {
        json = JSON.parse(text);
    } catch (e) {
        console.error('API response is not JSON:', text.substring(0, 200));
        throw new Error('Erreur serveur. Rechargez la page (Ctrl+Shift+R).');
    }

    if (!json.success) {
        throw new Error(json.message || 'Erreur inconnue');
    }

    return json;
}

// ----------------------------------------------------------
// Toast notifications
// ----------------------------------------------------------
function showToast(message, type = 'success', duration = 4000) {
    const container = document.getElementById('toast-container');
    const toast = document.createElement('div');

    const colors = {
        success: 'bg-green-600',
        error:   'bg-red-600',
        info:    'bg-blue-600',
        warning: 'bg-amber-500',
    };

    const icons = {
        success: '<path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/>',
        error:   '<path fill-rule="evenodd" d="M4.28 4.22a.75.75 0 011.06 0L10 8.94l4.66-4.72a.75.75 0 111.08 1.04L11.06 10l4.72 4.72a.75.75 0 11-1.06 1.06L10 11.06l-4.72 4.72a.75.75 0 01-1.06-1.06L8.94 10 4.22 5.28a.75.75 0 010-1.06z" clip-rule="evenodd"/>',
        info:    '<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd"/>',
        warning: '<path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>',
    };

    toast.className = `pointer-events-auto flex items-center gap-3 w-full px-4 py-3 rounded-xl shadow-lg text-white text-sm font-medium toast-enter ${colors[type] || colors.info}`;
    toast.innerHTML = `
        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">${icons[type] || icons.info}</svg>
        <span class="flex-1">${escapeHtml(message)}</span>
        <button onclick="this.parentElement.remove()" class="p-0.5 rounded hover:bg-white/20 shrink-0">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/></svg>
        </button>
    `;

    container.appendChild(toast);

    setTimeout(() => {
        toast.classList.remove('toast-enter');
        toast.classList.add('toast-leave');
        toast.addEventListener('animationend', () => toast.remove());
    }, duration);
}

// ----------------------------------------------------------
// Confirm dialog
// ----------------------------------------------------------
function showConfirm(title, message) {
    return new Promise((resolve) => {
        const app = document.querySelector('[x-data]').__x.$data;
        app.confirmModal = {
            show: true,
            title,
            message,
            onConfirm: () => resolve(true),
        };
    });
}

// ----------------------------------------------------------
// Copy to clipboard
// ----------------------------------------------------------
async function copyToClipboard(text) {
    try {
        await navigator.clipboard.writeText(text);
        showToast('Copie dans le presse-papiers !', 'success', 2000);
    } catch {
        // Fallback
        const ta = document.createElement('textarea');
        ta.value = text;
        ta.style.position = 'fixed';
        ta.style.opacity = '0';
        document.body.appendChild(ta);
        ta.select();
        document.execCommand('copy');
        document.body.removeChild(ta);
        showToast('Copie dans le presse-papiers !', 'success', 2000);
    }
}

// ----------------------------------------------------------
// Escape HTML
// ----------------------------------------------------------
function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}

// ----------------------------------------------------------
// SortableJS init helper (load on demand)
// ----------------------------------------------------------
let sortableLoaded = false;
async function initSortable(selector, options = {}) {
    if (!sortableLoaded) {
        await new Promise((resolve, reject) => {
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js';
            script.onload = resolve;
            script.onerror = reject;
            document.head.appendChild(script);
        });
        sortableLoaded = true;
    }

    const el = document.querySelector(selector);
    if (!el) return null;

    return new Sortable(el, {
        animation: 200,
        ghostClass: 'opacity-30',
        handle: options.handle || undefined,
        onEnd: options.onEnd || (() => {}),
        ...options,
    });
}
</script>

</body>
</html>

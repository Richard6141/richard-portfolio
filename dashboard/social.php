<?php
// ============================================================
// Nom du fichier : dashboard/social.php
// Description    : Gestion des reseaux sociaux
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Reseaux sociaux';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<div x-data="socialPage()" x-init="init()">

    <div class="flex items-center justify-between mb-6">
        <p class="text-sm text-gray-500">Ajoutez vos profils et liens professionnels.</p>
        <button @click="saveAll()" :disabled="saving" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 disabled:opacity-50 transition-colors">
            <svg x-show="saving" class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
            <span x-text="saving ? '...' : 'Enregistrer tout'"></span>
        </button>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <!-- Active links (reorderable) -->
    <div x-show="!loading && activeLinks.length > 0" class="mb-8">
        <h3 class="text-sm font-semibold text-gray-900 mb-3">Vos reseaux actifs <span class="text-gray-400 font-normal" x-text="'(' + activeLinks.length + ')'"></span></h3>
        <div id="social-active-list" class="space-y-2">
            <template x-for="link in activeLinks" :key="link.id">
                <div :data-id="link.id" class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 px-4 py-3 flex items-center gap-3 group">
                    <div class="cursor-grab active:cursor-grabbing text-gray-300 hover:text-gray-500 drag-handle shrink-0">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M7 2a2 2 0 10.001 4.001A2 2 0 007 2zm0 6a2 2 0 10.001 4.001A2 2 0 007 8zm0 6a2 2 0 10.001 4.001A2 2 0 007 14zm6-8a2 2 0 10-.001-4.001A2 2 0 0013 6zm0 2a2 2 0 10.001 4.001A2 2 0 0013 8zm0 6a2 2 0 10.001 4.001A2 2 0 0013 14z"/></svg>
                    </div>
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0" :style="'background:' + (platforms[link.platform]?.color || '#6b7280') + '15'">
                        <span class="text-sm" :style="'color:' + (platforms[link.platform]?.color || '#6b7280')" x-html="platforms[link.platform]?.icon || '🔗'"></span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900" x-text="platforms[link.platform]?.name || link.platform"></p>
                        <p class="text-xs text-gray-500 truncate" x-text="link.url"></p>
                    </div>
                    <button @click="removeLink(link.id)" class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 opacity-0 group-hover:opacity-100 transition-opacity shrink-0">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </template>
        </div>
    </div>

    <!-- Platform grid -->
    <div x-show="!loading">
        <h3 class="text-sm font-semibold text-gray-900 mb-3">Toutes les plateformes</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <template x-for="(p, key) in platforms" :key="key">
                <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-4 transition-shadow"
                     :class="getLinkUrl(key) ? 'ring-blue-200' : ''">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center shrink-0" :style="'background:' + p.color + '15'">
                            <span class="text-base" :style="'color:' + p.color" x-html="p.icon"></span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900" x-text="p.name"></p>
                            <p class="text-[11px] text-gray-400" x-text="p.placeholder"></p>
                        </div>
                        <div class="w-2 h-2 rounded-full shrink-0" :class="getLinkUrl(key) ? 'bg-green-500' : 'bg-gray-200'"></div>
                    </div>
                    <input type="url" :value="getLinkUrl(key)" @input="setLinkUrl(key, $event.target.value)"
                           :placeholder="p.placeholder"
                           class="w-full rounded-lg border border-gray-300 px-3 py-1.5 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none">
                </div>
            </template>
        </div>

        <!-- Custom link -->
        <div class="mt-6 bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-5">
            <h4 class="text-sm font-semibold text-gray-900 mb-3">Lien personnalise</h4>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <input type="text" x-model="customLabel" maxlength="100" class="rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="Nom (ex: Mon Site)">
                <input type="url" x-model="customUrl" class="sm:col-span-2 rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 focus:outline-none" placeholder="https://...">
            </div>
            <button @click="addCustom()" :disabled="!customUrl" class="mt-3 inline-flex items-center gap-1 px-4 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 disabled:opacity-50 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                Ajouter
            </button>
        </div>
    </div>
</div>

<script>
function socialPage() {
    return {
        loading: true,
        saving: false,
        links: [],
        customLabel: '',
        customUrl: '',

        platforms: {
            linkedin:  { name: 'LinkedIn',  icon: 'in', color: '#0a66c2', placeholder: 'linkedin.com/in/...' },
            github:    { name: 'GitHub',    icon: '&lt;/&gt;', color: '#181717', placeholder: 'github.com/...' },
            twitter:   { name: 'Twitter/X', icon: '𝕏', color: '#000000', placeholder: 'x.com/...' },
            instagram: { name: 'Instagram', icon: '📷', color: '#e4405f', placeholder: 'instagram.com/...' },
            facebook:  { name: 'Facebook',  icon: 'f', color: '#1877f2', placeholder: 'facebook.com/...' },
            youtube:   { name: 'YouTube',   icon: '▶', color: '#ff0000', placeholder: 'youtube.com/@...' },
            tiktok:    { name: 'TikTok',    icon: '♪', color: '#000000', placeholder: 'tiktok.com/@...' },
            behance:   { name: 'Behance',   icon: 'Bē', color: '#1769ff', placeholder: 'behance.net/...' },
            dribbble:  { name: 'Dribbble',  icon: '🏀', color: '#ea4c89', placeholder: 'dribbble.com/...' },
            medium:    { name: 'Medium',    icon: 'M', color: '#000000', placeholder: 'medium.com/@...' },
            devto:     { name: 'Dev.to',    icon: 'DEV', color: '#0a0a0a', placeholder: 'dev.to/...' },
            hashnode:  { name: 'Hashnode',  icon: '#', color: '#2962ff', placeholder: 'hashnode.com/@...' },
            twitch:    { name: 'Twitch',    icon: '🎮', color: '#9146ff', placeholder: 'twitch.tv/...' },
            discord:   { name: 'Discord',   icon: '💬', color: '#5865f2', placeholder: 'discord.gg/...' },
            telegram:  { name: 'Telegram',  icon: '✈️', color: '#26a5e4', placeholder: 't.me/...' },
            whatsapp:  { name: 'WhatsApp',  icon: '📱', color: '#25d366', placeholder: 'wa.me/33...' },
            calendly:  { name: 'Calendly',  icon: '📅', color: '#006bff', placeholder: 'calendly.com/...' },
            malt:      { name: 'Malt',      icon: 'M', color: '#fc5757', placeholder: 'malt.fr/profile/...' },
            upwork:    { name: 'Upwork',    icon: 'Up', color: '#14a800', placeholder: 'upwork.com/freelancers/...' },
            fiverr:    { name: 'Fiverr',    icon: 'F', color: '#1dbf73', placeholder: 'fiverr.com/...' },
            pinterest: { name: 'Pinterest', icon: 'P', color: '#bd081c', placeholder: 'pinterest.com/...' },
            snapchat:  { name: 'Snapchat',  icon: '👻', color: '#fffc00', placeholder: 'snapchat.com/add/...' },
        },

        get activeLinks() {
            return this.links.filter(l => l.url && l.url.trim() !== '');
        },

        async init() {
            this.loading = true;
            try {
                const res = await apiCall('social');
                this.links = res.data;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }

            this.$nextTick(() => {
                initSortable('#social-active-list', {
                    handle: '.drag-handle',
                    onEnd: () => this.reorder(),
                });
            });
        },

        getLinkUrl(platform) {
            const link = this.links.find(l => l.platform === platform);
            return link ? link.url : '';
        },

        setLinkUrl(platform, url) {
            const link = this.links.find(l => l.platform === platform);
            if (link) {
                link.url = url;
            } else if (url.trim()) {
                this.links.push({ id: null, platform, url, label: null, sort_order: this.links.length });
            }
        },

        async saveAll() {
            this.saving = true;
            try {
                // Supprimer les liens vides
                const toDelete = this.links.filter(l => l.id && (!l.url || !l.url.trim()));
                for (const link of toDelete) {
                    await apiCall('social?id=' + link.id, 'DELETE', { id: link.id });
                }

                // Sauvegarder les liens avec URL
                const toSave = this.links.filter(l => l.url && l.url.trim());
                if (toSave.length > 0) {
                    await apiCall('social', 'PUT', { links: toSave });
                }

                // Recharger
                const res = await apiCall('social');
                this.links = res.data;
                showToast('Reseaux sociaux enregistres', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async removeLink(id) {
            try {
                await apiCall('social?id=' + id, 'DELETE', { id });
                this.links = this.links.filter(l => l.id !== id);
                showToast('Lien supprime', 'success');
            } catch (e) { showToast(e.message, 'error'); }
        },

        async addCustom() {
            if (!this.customUrl.trim()) return;
            this.saving = true;
            try {
                const res = await apiCall('social', 'POST', {
                    platform: 'custom_' + Date.now(),
                    url: this.customUrl,
                    label: this.customLabel || 'Autre',
                });
                this.links.push(res.data);
                this.customLabel = '';
                this.customUrl = '';
                showToast('Lien ajoute', 'success');
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async reorder() {
            const ids = [...document.querySelectorAll('#social-active-list [data-id]')].map(el => parseInt(el.dataset.id));
            try { await apiCall('social', 'PUT', { reorder: ids }); }
            catch (e) { showToast(e.message, 'error'); }
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>

<?php
// ============================================================
// Nom du fichier : dashboard/messages.php
// Description    : Boite de reception des messages de contact
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Messages';
require_once __DIR__ . '/../includes/dashboard-layout.php';
?>

<div x-data="messagesPage()" x-init="init()">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
        <!-- Filters -->
        <div class="flex gap-2">
            <template x-for="f in filters" :key="f.v">
                <button @click="filter = f.v; load()"
                        :class="filter === f.v ? 'bg-blue-600 text-white border-blue-600' : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50'"
                        class="px-3 py-1.5 rounded-lg text-sm font-medium border transition-colors">
                    <span x-text="f.l"></span>
                    <span x-show="counts[f.k] > 0" class="ml-1 px-1.5 py-0.5 rounded-full text-[10px] font-bold"
                          :class="filter === f.v ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-600'"
                          x-text="counts[f.k]"></span>
                </button>
            </template>
        </div>
    </div>

    <div x-show="loading" class="flex justify-center py-12"><svg class="w-8 h-8 animate-spin text-blue-600" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg></div>

    <template x-if="!loading && items.length === 0">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-12 text-center">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-17.5 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21.75 6v7.5m-17.5 0v4.5A2.25 2.25 0 0 0 6 20.25h12a2.25 2.25 0 0 0 2.25-2.25V13.5"/></svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-1">Aucun message</h3>
            <p class="text-sm text-gray-500">Les messages envoyes via votre formulaire de contact apparaitront ici.</p>
        </div>
    </template>

    <div x-show="!loading" class="flex gap-6">
        <!-- List -->
        <div class="flex-1 min-w-0 space-y-2">
            <template x-for="msg in items" :key="msg.id">
                <div @click="select(msg)" class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 px-4 py-3 cursor-pointer hover:shadow-md transition-shadow"
                     :class="selectedId === msg.id ? 'ring-blue-300 bg-blue-50/30' : ''">
                    <div class="flex items-start gap-3">
                        <!-- Unread dot -->
                        <div class="pt-1.5 shrink-0">
                            <div class="w-2 h-2 rounded-full" :class="msg.is_read ? 'bg-transparent' : 'bg-blue-600'"></div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between gap-2">
                                <p class="text-sm font-medium truncate" :class="msg.is_read ? 'text-gray-600' : 'text-gray-900 font-semibold'" x-text="msg.sender_name"></p>
                                <span class="text-[11px] text-gray-400 shrink-0" x-text="formatDate(msg.created_at)"></span>
                            </div>
                            <p class="text-sm text-gray-700 truncate" x-text="msg.subject || '(Pas de sujet)'"></p>
                            <p class="text-xs text-gray-400 truncate mt-0.5" x-text="msg.message"></p>
                            <div class="flex gap-1.5 mt-1">
                                <span x-show="msg.is_spam" class="px-1.5 py-0.5 rounded bg-red-100 text-red-600 text-[10px] font-semibold">Spam</span>
                                <span x-show="msg.is_replied" class="px-1.5 py-0.5 rounded bg-green-100 text-green-600 text-[10px] font-semibold">Repondu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Detail panel -->
        <div x-show="selected" x-cloak class="hidden lg:block w-96 shrink-0">
            <div class="sticky top-20 bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
                <div class="p-5 border-b border-gray-100">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-base font-semibold text-gray-900" x-text="selected?.sender_name"></h3>
                        <button @click="selected = null; selectedId = null" class="p-1 rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/></svg>
                        </button>
                    </div>
                    <div class="space-y-1 text-sm text-gray-500">
                        <p><span class="font-medium text-gray-700">De :</span> <span x-text="selected?.sender_email"></span></p>
                        <p x-show="selected?.sender_phone"><span class="font-medium text-gray-700">Tel :</span> <span x-text="selected?.sender_phone"></span></p>
                        <p><span class="font-medium text-gray-700">Sujet :</span> <span x-text="selected?.subject || '(Pas de sujet)'"></span></p>
                        <p><span class="font-medium text-gray-700">Date :</span> <span x-text="selected?.created_at"></span></p>
                    </div>
                </div>
                <div class="p-5">
                    <p class="text-sm text-gray-700 whitespace-pre-wrap" x-text="selected?.message"></p>
                </div>
                <div class="p-4 border-t border-gray-100 flex flex-wrap gap-2">
                    <a :href="'mailto:' + (selected?.sender_email || '') + '?subject=Re: ' + encodeURIComponent(selected?.subject || '')"
                       class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition-colors"
                       @click="markAs('replied')">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"/></svg>
                        Repondre
                    </a>
                    <button @click="markAs(selected?.is_read ? 'unread' : 'read')" class="px-3 py-1.5 rounded-lg text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 transition-colors" x-text="selected?.is_read ? 'Non lu' : 'Lu'"></button>
                    <button @click="markAs(selected?.is_spam ? 'unspam' : 'spam')" class="px-3 py-1.5 rounded-lg text-sm font-medium text-amber-600 bg-amber-50 hover:bg-amber-100 transition-colors" x-text="selected?.is_spam ? 'Pas spam' : 'Spam'"></button>
                    <button @click="deleteMsg(selected?.id)" class="px-3 py-1.5 rounded-lg text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 transition-colors">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function messagesPage() {
    return {
        loading: true,
        items: [],
        selected: null,
        selectedId: null,
        filter: 'all',
        counts: { total: 0, unread: 0, spam: 0, replied: 0 },

        filters: [
            { v: 'all',     l: 'Tous',      k: 'total' },
            { v: 'unread',  l: 'Non lus',   k: 'unread' },
            { v: 'spam',    l: 'Spam',      k: 'spam' },
            { v: 'replied', l: 'Repondus',  k: 'replied' },
        ],

        async init() { await this.load(); },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall('messages?filter=' + this.filter);
                this.items = res.data.items;
                this.counts = res.data.counts;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }
        },

        select(msg) {
            this.selected = msg;
            this.selectedId = msg.id;
            if (!msg.is_read) this.markAs('read');
        },

        async markAs(action) {
            if (!this.selected) return;
            try {
                await apiCall('messages', 'PUT', { id: this.selected.id, action });
                // Mettre a jour localement
                if (action === 'read') this.selected.is_read = 1;
                if (action === 'unread') this.selected.is_read = 0;
                if (action === 'spam') { this.selected.is_spam = 1; this.selected.is_read = 1; }
                if (action === 'unspam') this.selected.is_spam = 0;
                if (action === 'replied') { this.selected.is_replied = 1; this.selected.is_read = 1; }
                // Refresh counts
                const res = await apiCall('messages?filter=' + this.filter);
                this.counts = res.data.counts;
            } catch (e) { showToast(e.message, 'error'); }
        },

        async deleteMsg(id) {
            if (!id) return;
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true, title: 'Supprimer ce message ?', message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall('messages?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(m => m.id !== id);
                        if (this.selectedId === id) { this.selected = null; this.selectedId = null; }
                        this.load();
                        showToast('Message supprime', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        formatDate(dt) {
            if (!dt) return '';
            const d = new Date(dt);
            const now = new Date();
            const diff = Math.floor((now - d) / 86400000);
            if (diff === 0) return d.toLocaleTimeString('fr-FR', { hour: '2-digit', minute: '2-digit' });
            if (diff === 1) return 'Hier';
            if (diff < 7) return d.toLocaleDateString('fr-FR', { weekday: 'short' });
            return d.toLocaleDateString('fr-FR', { day: '2-digit', month: 'short' });
        },
    };
}
</script>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>

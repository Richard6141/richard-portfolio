// ============================================================
// Script JS reutilisable pour les pages CRUD avec drag & drop
// ============================================================
function crudPage(config) {
    return {
        items: [],
        loading: true,
        saving: false,
        formOpen: false,
        editing: false,
        editingId: null,
        form: config.emptyForm(),
        endpoint: config.endpoint,
        entityName: config.entityName || 'element',
        listId: config.endpoint + '-list',

        async init() {
            await this.load();
            this.$nextTick(() => {
                initSortable('#' + this.listId, {
                    handle: '.drag-handle',
                    onEnd: () => this.onReorder(),
                });
            });
        },

        async load() {
            this.loading = true;
            try {
                const res = await apiCall(this.endpoint);
                this.items = res.data;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.loading = false; }
        },

        openForm(item = null) {
            if (item) {
                this.editing = true;
                this.editingId = item.id;
                this.form = JSON.parse(JSON.stringify(item));
                // Convertir les booleens
                if ('is_featured' in this.form) this.form.is_featured = !!this.form.is_featured;
                if ('no_expiry' in this.form) this.form.no_expiry = !!this.form.no_expiry;
                if ('is_current' in this.form) this.form.is_current = !!this.form.is_current;
            } else {
                this.editing = false;
                this.editingId = null;
                this.form = config.emptyForm();
            }
            this.formOpen = true;
        },

        async save() {
            this.saving = true;
            try {
                if (this.editing) {
                    const res = await apiCall(this.endpoint + '?id=' + this.editingId, 'PUT', this.form);
                    const idx = this.items.findIndex(i => i.id === this.editingId);
                    if (idx >= 0) this.items[idx] = res.data;
                    showToast(this.cap(this.entityName) + ' mis(e) a jour', 'success');
                } else {
                    const res = await apiCall(this.endpoint, 'POST', this.form);
                    this.items.push(res.data);
                    showToast(this.cap(this.entityName) + ' ajoute(e)', 'success');
                }
                this.formOpen = false;
            } catch (e) { showToast(e.message, 'error'); }
            finally { this.saving = false; }
        },

        async remove(id) {
            const app = document.querySelector('[x-data]').__x.$data;
            app.confirmModal = {
                show: true,
                title: 'Supprimer ce ' + this.entityName + ' ?',
                message: 'Cette action est irreversible.',
                onConfirm: async () => {
                    try {
                        await apiCall(this.endpoint + '?id=' + id, 'DELETE', { id });
                        this.items = this.items.filter(i => i.id !== id);
                        showToast(this.cap(this.entityName) + ' supprime(e)', 'success');
                    } catch (e) { showToast(e.message, 'error'); }
                }
            };
        },

        async onReorder() {
            const ids = [...document.querySelectorAll('#' + this.listId + ' [data-id]')].map(el => parseInt(el.dataset.id));
            const map = {};
            this.items.forEach(i => map[i.id] = i);
            this.items = ids.map(id => map[id]).filter(Boolean);
            try { await apiCall(this.endpoint, 'PUT', { reorder: ids }); }
            catch (e) { showToast(e.message, 'error'); }
        },

        cap(s) { return s.charAt(0).toUpperCase() + s.slice(1); },
    };
}

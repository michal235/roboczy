import Vue from 'vue';
import servers from '../vue/servers.vue';

export default {
    _vue: null,
    init() {


        this._vue = new Vue({
            el: '#vue-root',
            components: {
                'servers':servers
            }

        });

    },
    destroy() {
        if (this._vue) {
            this._vue.destroy();
            this._vue = null;
        }
    }
}

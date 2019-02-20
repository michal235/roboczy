<script>
    import scroller from 'vue-scrollto';
    import Cookies from "../Cookies";

    export default {
        name: 'servers',
        directives: {'scroll-to': scroller},
        data() {
            return {
                selected: 1,
                cookiesAccepted: false
            }
        },
        methods: {
            select: function (id) {
                this.selected = id;
            },
            closeCookies: function () {
                Cookies.set("cookieaccept", 1, 365);
                this.cookiesAccepted = true;
            }
        }
    };
</script>

<style lang="scss">
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to{
        opacity: 0;
    }
</style>

export default {
    name: 'DynamicTab',

    props: ['label', 'initialLogo', 'url'],

    data() {
        return {
            isActive: false,
        };
    },

    computed: {
        hasLogo() {
            return this.initialLogo !== undefined;
        },

        logo() {
            if (this.hasLogo) {
                return this.initialLogo.path;
            }

            return `${window.FleetCart.baseUrl}/themes/storefront/public/images/image-placeholder.png`;
        },
    },

    template: '<div></div>',
};

Vue.component('subscribe-button', {
    props: {
        subscriptions: {
            type: Array,
            request: true,
            default: () => []
        }
    },
    methods: {
        toggleSubscription() {
            if (!__auth()) {
                alert('Please login to subscribe.')
            }
        }
    }
})

require('./bootstrap');
var app = new Vue ({
    el: '#root',
    data: {

    },
    computed: {

    },
    methods: {
        verMsh: function (event) {

            if (!confirm('Sicuro?')) {
                event.preventDefault();
                return false;
            } else {
                return true
            }
        }
    }
});

require('./bootstrap');

require('alpinejs');

import {createApp} from "vue";

const page = document.querySelector('meta[name="page"]') ?
    document.querySelector('meta[name="page"]').content : null;

if (page !== '') {
    import(`./src/${page}`)
        .then(page => {
            const app = createApp(page.default);
            app.mount('#app');
        })
        .catch(error => {
            console.log(error);
        });
}




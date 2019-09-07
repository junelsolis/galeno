require('./bootstrap');

window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-form', require('./components/LoginForm.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import { VueSpinners } from '@saeris/vue-spinners'

 Vue.use(VueSpinners)



const app = new Vue({
    el: '#app',
});

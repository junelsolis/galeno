
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them swith their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('patientcontent', require('./components/physician/patient-content.vue').default);
Vue.component('encounter-chief-complaint', require('./components/physician/patient/encounter/ChiefComplaint.vue').default);
Vue.component('encounter-note', require('./components/physician/patient/encounter/Note.vue').default);
Vue.component('patient-problem-list', require('./components/physician/patient/encounter/ProblemList.vue').default);
Vue.component('patient-card', require('./components/physician/PatientCard.vue').default);
Vue.component('patients-today', require('./components/physician/PatientsTodayList.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const patientChart = new Vue({
//     el: '#app',
//
// });

const app = new Vue({
  el: '#app',
});

// const patient = new Vue({
//   el: '#physician'
// });

// $(document).foundation()

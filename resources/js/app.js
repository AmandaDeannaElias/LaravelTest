require('./bootstrap');

window.Vue = require('vue');

Vue.component('front-page', require('./components/front.vue').default);

const app = new Vue({
    el: '#app',
});
require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'
import weather from './components/weather.vue';

const route = {
    path: '/weather/show', name: 'weather', component: weather
}

Vue.use(VueRouter)
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('weather-component', require('./components/weather.vue'));

const app = new Vue({
    el: '#app',
});

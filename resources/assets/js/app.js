
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// require('./bootstrap');
// require('./jquery-ui');
// require('./Chart');
// require('./bulk');

// Vue.component('history', require('./components/History.vue'));

require('./bootstrap');

window.Vue = require('vue');

import History from './components/History.vue';
import axios from 'axios';

const app = new Vue({
    el: '#app_root',
    components: {
        History
    }
});


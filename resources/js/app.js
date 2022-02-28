require('./bootstrap');
window.Vue = require('vue');
import App from './App';
import VueAxios  from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

const app = new Vue(Vue.util.extend(App)).$mount('#app');

//
// import { createApp } from 'vue';
// import App from './App.vue'
// createApp(App).mount("#app")


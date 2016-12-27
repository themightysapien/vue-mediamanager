import Vue from 'vue'
import Uploader from './Uploader.vue';
import store from './Store'


Vue.component('uploader', Uploader);

new Vue({
    el: '#app',
    store
    /*render: h => h(App)*/
});

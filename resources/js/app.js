require('./bootstrap');

import Vue from 'vue';

import Index from '../js/Views/Index.vue';

new Vue({
    el: "#app",
    components:{
        Index
    }
})
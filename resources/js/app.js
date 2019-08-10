import Vue from 'vue';
import VueRouter from 'vue-router';
//import routes from './routes'
import axios from "axios";
//import LazyLoadDirective from "./directives/LazyLoadDirectives";

Vue.config.productionTip = false;

//axios.defaults.baseURL = "http://coding.test/api/articles";

//Vue.directive("lazyload", LazyLoadDirective);

//Vue.use(VueRouter);

require('./bootstrap');
/*

window.Vue = require('vue');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
*/

const app = new Vue({
    el: '#app'//,
    //router: new VueRouter(routes)
});

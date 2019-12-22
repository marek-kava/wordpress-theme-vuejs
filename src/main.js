import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import router from './common/router'
import store from "./stores/index";
import 'bootstrap/dist/css/bootstrap-grid.css'

// Set Vue config
Vue.config.productionTip = false

// Set Vue router
Vue.router = router
Vue.use(VueRouter)

// Set Vue store
Vue.use(VueAxios, axios)
axios.defaults.baseURL = "http://wordpress.portfolio.mkava.pl/";
axios.defaults.withCredentials = true;

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app')

import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import router from './common/router'
import 'bootstrap/dist/css/bootstrap-grid.css'

// Set Vue config
Vue.config.productionTip = false

// Set Vue router
Vue.router = router
Vue.use(VueRouter)

new Vue({
    router,
    render: h => h(App)
}).$mount('#app')

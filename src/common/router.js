import VueRouter from 'vue-router'

// Pages
import Start from '../components/Pages/Start'

// Routes
const routes = [
    {
        path: '/',
        name: 'start',
        component: Start
    },
];

const routesConfig = new VueRouter({
    history: true,
    mode: 'history',
    routes: routes,
});

export default routesConfig
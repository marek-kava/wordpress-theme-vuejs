import VueRouter from 'vue-router'

// Pages
import Start from '../components/Pages/Start'
import Blog from '../components/Pages/Blog'

// Posts
import SinglePost from '../components/Pages/Post'

// Routes
const routes = [
    {
        path: '/',
        name: '/',
        component: Start,
        props: true
    },
    {
        path: '/blog',
        name: 'blog',
        component: Blog,
        props: true
    },
    {
        path: '/blog/:slug',
        name: 'single-post',
        component: SinglePost
    }
];

const routesConfig = new VueRouter({
    history: true,
    mode: 'history',
    routes: routes,
});

export default routesConfig
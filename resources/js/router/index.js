import Vue from 'vue'
import VueRouter from 'vue-router'
 

Vue.use(VueRouter)

// import Posts from '../pages/PostsIndex.vue'
// import Contact from '../pages/Contact.vue'
// import PostShow from '../pages/PostShow.vue'
import NotFound from '../pages/404.vue'

const routes = [
    {
        path: '/posts',
        name: 'posts.index',
        component: require('../pages/PostsIndex.vue').default
    },
    {
        path: '/posts/:slug',
        name: 'posts.show',
        component: require('../pages/PostShow.vue').default
    },
    {
        path: '/contact',
        name: 'contact',
        component: require('../pages/Contact.vue').default
    },
    {
        path: '/*',
        component: NotFound
    }
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

export default router
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Posts from '../pages/PostsIndex.vue'
import Contact from '../pages/Contact.vue'
import PostShow from '../pages/PostShow.vue'

const routes = [
    {
        path: '/posts',
        name: 'posts.index',
        component: Posts
    },
    {
        path: '/posts/:slug',
        name: 'posts.show',
        component: PostShow
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact
    }
]

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

export default router
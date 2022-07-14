import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Posts from "./pages/Posts.vue";
import NotFound from "./pages/NotFound.vue";


const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/about",
            name: "about",
            component: About
        },
        {
            path: "/posts",
            name: "posts",
            component: Posts
        },
        {
            path: "/*",
            component: NotFound
        }
    ]
});

export default router;
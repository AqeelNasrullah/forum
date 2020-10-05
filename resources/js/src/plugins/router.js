import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from '../../components/Home.vue'
import Login from '../../components/Login.vue'

const routes = [
    { path: '/', component: Home, meta: {title: 'ANWESOL Forum'} },
    { path: '/login', component: Login, meta: {title: 'Login - ANWESOL Forum'} }
]

const router = new VueRouter({ routes, hashbang: false, mode: 'history' })

router.afterEach((to, from) => {
    Vue.nextTick(() => {
        document.title = to.meta.title
    })
})

export default router
import { createRouter, createWebHistory } from 'vue-router'
import Guard from '@/services/middleware'

const routes = [{
        path: '/',
        name: 'home',
        component: () =>
            import ('../components/HelloWorld.vue'),
    },
    {
        path: '/login',
        name: 'login',
        component: () =>
            import ('../views/Login/LoginView.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach(Guard.auth)

export default router
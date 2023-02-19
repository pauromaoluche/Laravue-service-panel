import { createRouter, createWebHistory } from 'vue-router'
import Guard from '@/Services/middleware'

const routes = [{
        path: '/',
        name: 'home',
        component: () =>
            import ('../Views/Home/HomeView.vue'),
    },
    {
        path: '/login',
        name: 'login',
        component: () =>
            import ('../Views/Login/LoginView.vue')
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach(Guard.auth)

export default router
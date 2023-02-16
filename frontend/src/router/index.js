import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: '',
    component: () => import('../components/HelloWorld.vue')
  },
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/Login/LoginView.vue')
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router

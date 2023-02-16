import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import axios from 'axios'

const api = axios.create({
    baseURL: 'http://127.0.0.1:8000/api/',
    headers:
    {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    }
});

export default api

createApp(App).use(router).mount('#app')

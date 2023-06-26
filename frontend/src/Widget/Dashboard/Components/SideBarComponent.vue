<template>
    <aside id="sidebar" class="sidebar">

        <ul v-for="status in status" :key="status.status_atend" class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link">
                    <span><font-awesome-icon :id="status.status_atend" icon="stopwatch" :color="`rgb(${status.color})`" />{{ status.descri_status }}</span>
                </a>
            </li>
        </ul>

    </aside>
    <!-- End Sidebar-->
</template>
<script>
import api from '@/main'

export default {
    name: 'SideBarComponent',

    data() {
        return {
            status: []
        }
    },

    mounted() {
        this.getStatus()
    },

    methods: {
        async getStatus() {
            const resp = await api.get('statusAtend')
            if (resp.status == 200) {
                this.status = resp.data
                console.log(this.status)
            } else {
                console.error("erro na api")
            }
        },

    }
}

</script>
    
<style lang="scss" scoped>

.sidebar {
    position: fixed;
    top: 60px;
    left: 0;
    bottom: 0;
    width: 250px;
    z-index: 996;
    transition: all 0.3s;
    padding: 20px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #aab7cf transparent;
    box-shadow: 0px 0px 20px rgb(1 41 112 / 10%);
    background-color: #fff;

    a.nav-link {
        font-size: 15px;
    }

    .sidebar-nav {
        padding: 0;
        margin: 0;
        list-style: none;

        li {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .nav-item {
            margin-bottom: 5px;
        }

        .sidebar-nav .nav-link {
            display: flex;
            align-items: center;
            font-size: 10px;
            font-weight: 600;
            color: #4154f1;
            transition: 0.3;
            background: #f6f9ff;
            padding: 10px 15px;
            border-radius: 4px;
        }
    }
}

@media (min-width: 1200px) {
    .toggle-sidebar .sidebar {
        left: -300px;
    }
}
</style>
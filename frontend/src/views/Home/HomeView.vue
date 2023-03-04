<template>
    <DashboardComponent @filtersData="filter" @filterUser="usersFilter">
        <template v-slot:page-slot>
            <TableComponent :data="itemFiltred"></TableComponent>
        </template>
    </DashboardComponent>
</template>
<script>
import DashboardComponent from '@/Widget/Dashboard/DashboardComponent.vue'
import TableComponent from '@/Components/TableComponent.vue';
import api from '@/main'
export default {

    components: {
        DashboardComponent,
        TableComponent
    },

    data() {
        return {
            filterUsers: '',
            filtersData: 0,
            data: [],
        }
    },

    computed: {
        itemFiltred() {
            let filtros = [];
            filtros = this.data;
            if (this.filterUsers.trim().length > 0) {
                if (this.filtersData != 0) {
                    if (this.filterUsers == 0) {
                        filtros = this.data;
                    } else {
                        filtros = this.data.filter(data => {
                            return data.user.name.includes(this.filterUsers)
                        })
                    }
                } else {
                    alert("Selecione um filtro")
                }
            }
            return filtros
        },
    },

    methods: {
        usersFilter(filterUser) {
            this.filterUsers = filterUser
        },
        async filter(filtersData) {
            this.filtersData = filtersData
            if (this.filtersData == 0) {
                this.data = []
            } else if (this.filtersData == 1) {
                await this.getAtends()

            } else if (filtersData == 2) {
                this.data = []
            }
        },

        async getAtends() {
            const resp = await api.get('atend')
            if (resp.status == 200) {
                this.data = resp.data
            } else {
                console.error("erro na api")
            }
        }
    }
}
</script>

<style></style>

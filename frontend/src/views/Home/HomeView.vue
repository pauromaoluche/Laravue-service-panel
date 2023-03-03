<template>
    <DashboardComponent @filtersData="filter" @filterUser="usersFilter">
        <template v-slot:page-slot>
            <TableComponent :data="data"></TableComponent>
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

    methods: {
        async usersFilter(filterUser) {
            this.filterUsers = filterUser
            // alert(this.filterUsers);
            if (this.filterUsers.trim().length > 0) {
                if (this.filtersData != 0) {
                    if (this.filterUsers == 0) {
                        await this.getAtends();
                    } else {
                        await this.getAtends();
                        this.data = this.data.filter(data => {
                            return data.user.name.includes(filterUser)
                        })
                        // console.log(JSON.parse(JSON.stringify(this.data)))
                    }
                } else {
                    alert("Selecione um filtro")
                }
            }

        },

        filter(filtersData) {
            this.filtersData = filtersData
            if (this.filtersData == 1) {
                this.getAtends()

            } else if (filtersData == 2) {
                this.data = []
            }
        },

        async getAtends() {
            const resp = await api.get('atend')
            if (resp.status == 200) {
                this.data = resp.data
                //console.log(this.data)
            } else {
                console.error("erro na api")
            }
        }
    }
}
</script>

<style></style>

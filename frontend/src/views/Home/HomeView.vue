<template>
    <DashboardComponent @filtersData="filter">
        <template v-slot:page-slot>
            <TableComponent :users="users"></TableComponent>
        </template>

    </DashboardComponent>
</template>
<script>
import DashboardComponent from '@/Widget/Dashboard/DashboardComponent.vue'
import TableComponent from '@/Components/TableComponent.vue';
import axios from '@/main'
export default {

    components: {
        DashboardComponent,
        TableComponent
    },

    data() {
        return {
            users: [],
        }
    },

    methods: {

        filter(filtersData) {
            if (filtersData == 1) {
              this.getUsers()

            } else if (filtersData == 2) {
                console.log('igual a 1')
            }
        },

        async getUsers() {
            const resp = await axios.get('https://dummyjson.com/products')
            if (resp.status == 200) {
                this.users = resp.data.products
            } else {
                console.error("erro na api")
            }
        }
    }
}
</script>

<style></style>

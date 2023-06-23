<template>
    <DashboardComponent @filtersSetor="setorsFilter" @filtersData="datasFilter" @filterUser="usersFilter">
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
            users: 0,
            atends: 0,
            setors: 0,
            data: [],
        }
    },

    computed: {
        itemFiltred() {
            let filtros = [];
            let user = 0;
            user = this.users;
            filtros = this.data;
            //Verifica atendimentos para selecionar setores
            if (this.atends !== 0) {
                //Verifica setores para selecionar usuarios
                if (this.setors != 0) {
                    //Tras todos atendimentos com o base no id do setor
                    filtros = this.data.filter(data => {
                        return data.setor_id.id == this.setors
                    })
                    if (user != 0) {
                        //Tras todos usuarios vinculados a aquele setor
                        filtros = filtros.filter(data => {
                            return data.user_id.id == user
                        })
                    } else {
                        filtros = this.data.filter(data => {
                            return data.setor_id.id == this.setors
                        })
                    }
                } else {
                    filtros = this.data;
                }
            }
            return filtros
        },
    },

    methods: {
        usersFilter(filterUser) {
            this.users = filterUser
        },

        setorsFilter(filtersSetor) {
            this.users = 0
            this.setors = filtersSetor
        },

        async datasFilter(filtersData) {

            this.atends = filtersData
            if (this.atends == 0) {
                this.data = []
                this.setors = []
            } else if (this.atends == 1) {
                await this.getAtends()

            } else if (this.atends == 2) {
                this.data = []
                this.setors = []
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

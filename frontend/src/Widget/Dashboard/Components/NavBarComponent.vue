<template>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="@/Assets/elitesoft-logotradiconal.png" alt="">
                <span class="d-none d-lg-block">Atendimentos</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <div class="search-bar ms-auto">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><font-awesome-icon icon="magnifying-glass" /></button>
            </form>
        </div>
        <nav class="header-nav ms-auto">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                aria-controls="offcanvasTop">Filtros</button>

            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="container d-flex justify-content-end">
                        <select v-model="selected" @change="onChange1($event)" class="form-select"
                            aria-label="Default select example">
                            <option value=0>Selecione um</option>
                            <option value=1>A.N.O.D</option>
                            <option value=2>A.N.S</option>
                        </select>
                        <select v-model="selectedSetor" @change="onChange2($event)" class="form-select"
                            aria-label="Default select example">
                            <option value=0>Setores</option>
                            <option v-for="setor in setor" :key="setor.id" :value="setor.id">{{ setor.nome }}</option>
                        </select>
                        <select v-model="selectedUser" class="form-select" @change="onChange3($event)"
                            aria-label="Default select example">
                            <option value=0>Todos</option>
                            <option :value="user.id" v-for="user in itemFiltred" :key="user.id">{{ user.name }}</option>
                            <!-- <option v-for="(user, index) in data" :key="index" > {{ index }} {{ user.name }}</option> -->
                        </select>
                    </div>

                    <div class="group container mt-3">
                        <div v-for="data in status" :key="data.status_atend" class="btn-group" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" :id="data.status_atend" autocomplete="off">


                            <label v-if="data.status_atend == 'AG'" :class="data.status_atend"
                                class="btn btn-outline-primary" :for="data.status_atend">{{ data.descri_status }}</label>
                            <label v-else-if="data.status_atend == 'A'" :class="data.status_atend"
                                class="btn btn-outline-warning" :for="data.status_atend">{{ data.descri_status }}</label>
                            <label v-else-if="data.status_atend == 'C'" :class="data.status_atend"
                                class="btn btn-outline-success" :for="data.status_atend">{{ data.descri_status }}</label>
                            <label v-else-if="data.status_atend == 'FS'" :class="data.status_atend"
                                class="btn btn-outline-danger" :for="data.status_atend">{{ data.descri_status }}</label>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
</template>
<script>
import api from '@/main'

//import mitt from 'mitt'
//const emitter = mitt()
export default {
    name: 'NavBarComponent',
    emits: ['emitData', 'emitUser', 'emitSetor'],
    data() {
        return {
            user: [],
            setor: [],
            status: [],
            selected: 0,
            selectedUser: 0,
            selectedSetor: 0
        };
    },

    computed: {
        itemFiltred() {
            let filtros = [];
            filtros = this.user
            //Filtro de setores, caso seja 0, retorna todos atendimentos
            if (this.selected == 0 || this.selectedSetor == 0) {
                filtros = this.user
            } else {
                filtros = this.user.filter(data => {
                    //return data.atendimentos.setor_id == 3
                    //return data.atendimentos.id == 2
                    return data.atendimentos.some(atendimentos => atendimentos.setor_id === parseInt(this.selectedSetor));
                })

            }

            return filtros

        },
    },

    mounted() {
        this.getUsers();
        this.getSetors();
        this.getStatus();
    },

    methods: {
        onChange1(event) {
            this.$emit('emitData', event.target.value);
            this.selectedUser = 0
            this.selectedSetor = 0
        },

        async onChange2(event) {
            if (this.selected == 0 || this.selected == 2) {
                this.selectedSetor = 0
                this.selectedUser = 0
            } else {
                this.selectedUser = 0
                this.$emit('emitSetor', event.target.value);

            }
        },

        onChange3(event) {
            if (this.selected == 0 || this.selectedSetor == 0) {
                this.selectedUser = 0
            } else {

                this.$emit('emitUser', event.target.value);
            }
        },

        async getUsers() {
            const resp = await api.get('usersAtend')
            if (resp.status == 200) {
                this.user = resp.data
            } else {
                console.error("erro na api")
            }
        },

        async getSetors() {
            const resp = await api.get('setors')
            if (resp.status == 200) {
                this.setor = resp.data
            } else {
                console.error("erro na api")
            }
        },

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
.header {
    transition: all 0.5s;
    z-index: 997;
    height: 60px;
    box-shadow: 0px 2px 20px rgb(1 41 112 / 10%);
    background-color: #fff;
    padding-left: 20px;

    @media (min-width: 1200px) {
        .logo {
            width: 280px;
        }

    }

    .logo {
        line-height: 1;
    }

    .logo img {
        max-height: 26px;
        margin-right: 6px;
    }

    .logo span {
        font-size: 26px;
        font-weight: 700;
        color: #012970;
        font-family: "Nunito", sans-serif;
    }

    .toggle-sidebar-btn {
        font-size: 32px;
        padding-left: 10px;
        cursor: pointer;
        color: #012970;
    }

    .search-bar {
        min-width: 360px;
        padding: 0 20px;

        .search-form {
            width: 100%;

            input {
                border: 0;
                font-size: 14px;
                color: #012970;
                border: 1px solid rgba(1, 41, 112, 0.2);
                padding: 7px 38px 7px 8px;
                border-radius: 3px;
                transition: 0.3s;
                width: 100%;
            }

            button {
                border: 0;
                padding: 0;
                margin-left: -30px;
                background: none;

                i {
                    color: #012970;
                }
            }
        }
    }

    .header-nav {
        ul {
            margin: 0;
            padding: 0;
        }
    }

    .form-select {
        width: 150px;
        margin-left: 10px;
    }

    .group {
        display: flex;
        justify-content: right;

        .btn-group {
            margin: 0.3px;

            label {
                border-radius: 0px;
                color: rgb(0, 0, 0);
                border: 1px solid #ced4da
            }

            input.btn-check:checked + label{
                color: white;
                text-shadow: 2px 4px 5px #000000;
            }

            label.AG {
                border-top-left-radius: 0.375rem !important;
            }

            label.FS {
                border-top-right-radius: 0.375rem !important;
            }
        }
    }





}</style>
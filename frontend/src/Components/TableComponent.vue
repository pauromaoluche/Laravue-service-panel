<template>
    <div class="content shadow">
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Protocolo</th>
                    <th width="100" scope="col">Cliente</th>
                    <th scope="col">Prioridade</th>
                    <th width="100" scope="col">Criado</th>
                    <th width="100" scope="col">Previsto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Analista</th>
                    <th style="text-align: center;" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <button type="button" class="btn btn-primary" @click="abrirModal">Abrir modal</button>
                <ModalComponent @func="fecharModal" v-model:display="display" :display="display" :aberto="modalAberto"
                    titulo="Meu modal dinâmico">
                    <p>Aqui vai o conteúdo do modal</p>
                </ModalComponent>
                <tr v-for="atend in data" :key="atend.id" class="table-sm">
                    <th scope="row">{{ atend.protocolo }}</th>
                    <td class="name">{{ atend.provedor.nome }}</td>
                    <td class="flag" v-if="atend.prioridade == 1">
                        <span><font-awesome-icon icon="flag" color="green" /></span>
                    </td>
                    <td class="flag" v-else-if="atend.prioridade == 2">
                        <span><font-awesome-icon icon="flag" color="orange" /></span>
                    </td>
                    <td class="flag" v-else-if="atend.prioridade == 3">
                        <span><font-awesome-icon icon="flag" color="red" /></span>
                    </td>
                    <td>{{ atend.created_at }}</td>
                    <td>{{ atend.data_prev }}</td>
                    <td>{{ atend.desc.substring(0, 20) + ".." }}</td>
                    <td>{{ atend.user.name }}</td>

                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-outline-success">Ver</button>
                        <button type="button" class="btn btn-outline-primary">Editar</button>
                        <button type="button" class="btn btn-outline-danger">Excluir</button>
                    </div>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import ModalComponent from "./ModalComponent.vue"
export default {
    name: "TableComponent",
    components: {
        ModalComponent
    },
    props: {
        data: Array
    },
    data() {
        return {
            body: "teste",
            modalAberto: false,
            display: true,
            onConfirm: () => {
                console.log('Modal confirmed');
            }
        }
    },
    methods: {
        fecharModal() {
            setTimeout(() => this.modalAberto = false, 10);
            setTimeout(() => this.display = true, 200);
        },
        abrirModal() {
            this.display = false,
                setTimeout(() => this.modalAberto = true, 100);
        },
    },
    computed: {

    }
}

</script>

<style lang="scss">
.content {
    background-color: white;
    border-radius: 10px;
    padding: 10px;
}

td {
    padding: 10px !important;
    font-size: 12px;
}

td.name {
    text-align: center;
}

td.flag {
    text-align: center;

    span svg {
        font-size: 20px;
    }
}
</style>
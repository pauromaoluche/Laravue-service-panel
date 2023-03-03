<template>
    <div class="content shadow">
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Protocolo</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Prioridade</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Data Prevista</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Analista</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for="atend in data" :key="atend.id" class="table-sm">
                    <th scope="row">{{ atend.protocolo }}</th>
                    <td>{{ atend.provedor.nome }}</td>
                    <td>{{ atend.prioridade }}</td>
                    <td>{{ atend.created_at }}</td>
                    <td>{{ atend.data_prev }}</td>
                    <td>{{ atend.desc }}</td>
                    <td>{{ atend.user.name }}</td>
                </tr>

            </tbody>
        </table>
    </div>
</template>
<script>

export default {
    name: "TableComponent",
    props: {
        data: Array
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
    padding: 12px !important;
    font-size: 12px;
}
</style>
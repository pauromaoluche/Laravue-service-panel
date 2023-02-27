<template>
    <div class="content shadow">
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <!-- <th scope="col">Protocolo</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Prioridade</th>
                    <th scope="col">Data Prevista</th>
                    <th scope="col">Tempo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Analista</th> -->
                    <th scope="col">Protocolo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">discountPercentage</th>
                    <th scope="col">stock</th>
                    <th scope="col">brand</th>
                    <th scope="col">category</th>
                </tr>
            </thead>
            <tbody>

                <tr v-for="user in data" :key="user.id" class="table-sm">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.title }}</td>
                    <td>{{ user.price }}</td>
                    <td>{{ user.discountPercentage }} %</td>
                    <td>{{ user.stock }}</td>
                    <td>{{ user.brand }}</td>
                    <td>{{ user.category }}</td>
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
    padding: 15px !important;
}
</style>
<template>
    <DashboardComponent>
        <template v-slot:page-slot>
            <TableComponent></TableComponent>
        </template>
    </DashboardComponent>
</template>
<script>
import DashboardComponent from '@/Widget/Dashboard/DashboardComponent.vue'
import TableComponent from '@/Components/TableComponent.vue';
export default {
    components: {
        DashboardComponent,
        TableComponent
    }
}

</script>
    
<style></style>
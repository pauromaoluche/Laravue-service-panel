<template>
    <NavBarComponent @emitData="filter">
    </NavBarComponent>

    <SideBarComponent></SideBarComponent>

    <div id="main" class="main content-page">
        <slot name="page-slot">
        </slot>
    </div>

    <FooterComponent></FooterComponent>
</template>
<script>
import SideBarComponent from './Components/SideBarComponent.vue'
import NavBarComponent from './Components/NavBarComponent.vue'
import FooterComponent from './Components/FooterComponent.vue';

export default {
    name: 'DashboardComponent',
    emits: ['filtersData'],
    data() {
        return {
        };
    },

    components: {
        SideBarComponent,
        NavBarComponent,
        FooterComponent
    },


    methods: {
        filter(emitData){
            this.$emit('filtersData', emitData)
           
        },
    }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
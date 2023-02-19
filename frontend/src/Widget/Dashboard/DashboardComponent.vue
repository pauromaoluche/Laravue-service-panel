<template>
    
    <NavBarComponent></NavBarComponent>

    <SideBarComponent></SideBarComponent>
    <div id="main" class="main">
        
    </div>
    <FooterComponent></FooterComponent>
</template>
<script>
import SideBarComponent from './Components/SideBarComponent.vue'
import NavBarComponent from './Components/NavBarComponent.vue'
import FooterComponent from './Components/FooterComponent.vue';
export default {
    name: 'DashboardComponent',
    components: {
        SideBarComponent,
        NavBarComponent,
        FooterComponent
    }
}
</script>

<style lang="scss" src="./style.scss" scoped></style>
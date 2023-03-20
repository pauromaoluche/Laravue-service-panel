<template>
    <div class="modal fade" :class="{ show: aberto, 'd-none': display, 'd-block': !display }"   tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ titulo }}</h1>
                    <button type="button" class="btn-close" @click="fechar"></button>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {
    name: "ModalComponent",
    props: {
        display: {
            type: Boolean,
            default: true,
        },
        aberto: {
            type: Boolean,
            default: false,
        },
        titulo: {
            type: String,
            default: '',
        },
    },
    methods: {
        fechar() {
             this.$emit('func', false)
        },
    },
};
</script>
  
<style>
.modal {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* .modal-content {
    background-color: white;
    padding: 20px;
} */
</style>
  
<template>
    <div class="modal fade" :class="{ show: aberto, 'd-none': display, 'd-block': !display }" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div v-for="data in atend" :key="data.id" class="modal-content">
                <div class="modal-header">
                    <h1 class="title" id="exampleModalLabel">Protocolo : {{ data.protocolo }}</h1><br>
                    <button type="button" class="btn-close" @click="fechar"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group-flush">
                        <li class="list-group">
                            <label><b>Tipo de O.S:</b></label>
                            <input type="text" class="form-control" id="floatingInput" disabled :value="data.titulo">
                        </li>
                        <li class="row">
                            <div class="col-3">
                                <label><b>Gerador por:</b></label>
                                <input type="text" class="form-control" disabled id="floatingInput"
                                    :value="data.user.name">
                            </div>
                            <div class="col-3">
                                <label><b>Provedor:</b></label>
                                <input type="text" class="form-control" disabled id="floatingInput"
                                    :value="data.provedor.nome">
                            </div>
                            <div class="col-3">
                                <label>Criado em</label>
                                <input type="text" class="form-control" disabled id="floatingInput"
                                    :value="data.created_at">
                            </div>
                            <div class="col-3">
                                <label>Previsto para</label>
                                <input type="text" class="form-control" disabled id="floatingInput"
                                    :value="data.created_at">
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-6">
                                <label><b>Status:</b></label>
                                <!-- <input type="text" class="form-control" id="floatingInput" :value="data.titulo"> -->
                                <input type="text" class="form-control" disabled id="floatingInput"
                                    value="Aguardando agendamento">
                            </div>
                            <div class="col-6">
                                <label><b>Cargo/Tecnico:</b></label>
                                <!-- <input type="text" class="form-control" id="floatingInput" :value="data.titulo"> -->
                                <input type="text" class="form-control" disabled id="floatingInput"
                                    :value="data.user.name">
                            </div>
                        </li>

                        <li class="list-group-item mt-3">
                            <label><b>Descrição:</b></label>
                            <textarea :value="data.desc" style="resize: none" disabled></textarea>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" @click="fechar" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
        atend: Array
    },
    methods: {
        fechar() {
            this.$emit('func', false)
        },
    },
};
</script>
  
<style lang="scss">
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

    input[type=text] {
        font-size: 13px;

    }

    .modal-header {
        background-color: #555;
        height: 50px;
        color: white;

        h1 {
            font-size: 20px;
        }


    }

    .modal-body {
        label {
            margin-bottom: 5px;
            margin-top: 10px;
        }

        h2 {
            font-size: 17px;
            font-weight: 350;
        }

        h3 {
            font-size: 17px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            height: 120px;
            border-color: rgba(0, 0, 0, 0.125);
            border-radius: 0.375rem;
        }

        ul {
            margin: 0;
            padding: 0 10px;
        }
    }


}

/* .modal-content {
    background-color: white;
    padding: 20px;
} */
</style>
  
<form method="POST" @submit.prevent="updateKeep(fillKeep.id)">
        <div id="edit" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                        <h4>Editar tarea</h4>
                    </div>
                    <div class="modal-body">
                        <label for="keep">Editar</label>
                        <input type="text" class="form-control" v-model="fillKeep.keep">
                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </div>
                </div>
            </div>
        </div>
    </form>
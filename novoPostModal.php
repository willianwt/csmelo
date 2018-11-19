<!-- Modal -->
<div class="modal fade" id="novoPostModal" tabindex="-1" role="dialog" aria-labelledby="novoPostModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Inserir Novo Anúncio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
            <div class="modal-body">
                    <div class="container-fluid">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" lang="pt-br">
                            <label class="custom-file-label" for="customFile">Selecionar Foto Principal</label>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tamanho_total">Tamanho total:</label>
                                <input type="text" class="form-control" id="tamanho_total" placeholder="Tamanho total">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cor">Cor:</label>
                                <input type="text" class="form-control" id="cor" placeholder="Cor">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Material da Lâmina:</label>
                                <input type="text" class="form-control" id="material_lamina" placeholder="Tamanho da Lâmina">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Comprimento da Lâmina:</label>
                                <input type="text" class="form-control" id="tamanho_lamina" placeholder="Tamanho da Lâmina">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Largura da Lâmina:</label>
                                <input type="text" class="form-control" id="largura_lamina" placeholder="Tamanho da Lâmina">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Material do Cabo:</label>
                                <input type="text" class="form-control" id="material_lamina" placeholder="Tamanho da Lâmina">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Comprimento do Cabo:</label>
                                <input type="text" class="form-control" id="tamanho_lamina" placeholder="Tamanho da Lâmina">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Dorso:</label>
                                <input type="text" class="form-control" id="largura_lamina" placeholder="Tamanho da Lâmina">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="galeria1">Example file input</label>
                                <input type="file" class="form-control-file" id="galeria1">
                                <input type="hidden" name="galeria1" id="galeria1" />
                                <span id="galeria1"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="file" class="custom-file-input" id="galeria2" lang="pt-br">
                                <label class="custom-file-label mr-1" for="galeria2">Galeria</label>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="file" class="custom-file-input" id="galeria3" lang="pt-br">
                                <label class="custom-file-label mr-1" for="galeria3">Galeria</label>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>


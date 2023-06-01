<div class="modal fade" id="novo_cliente" tabindex="-1" role="dialog" aria-labelledby="novo_clienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novo_clienteLabel">Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('clientes.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Nome</label>
                            <input type="text" name="name" autocomplete="off" required placeholder="Nome" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">E-mail</label>
                            <input type="email" name="email" autocomplete="off" required placeholder="E-mail" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Senha</label>
                            <input type="text" name="senha" autocomplete="off" required placeholder="Senha" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Empresa</label>
                            <input type="text" name="empresa" autocomplete="off" required placeholder="Empresa" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Cod Estabel</label>
                            <input type="text" name="cod_estabel" autocomplete="off" required placeholder="Código do estabelecimento" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagem Logo Tipo</label>
                            <input type="file" name="logo" class="form-control-file" required >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagem Icone</label>
                            <input type="file" name="icone" class="form-control-file" required >
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagem Login</label>
                            <input type="file" name="login" class="form-control-file" required>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">
                            <input class="form-group" type="checkbox" value="true" id="defaultCheck1" name="status" checked>
                            <label class="form-group" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

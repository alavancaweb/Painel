<div class="modal fade" id="editar_clientes{{$registro->id}}" tabindex="-1" role="dialog" aria-labelledby="editar_clientesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editar_clientesLabel">Editar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('clientes.editar',$registro->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    {{-- <div class="col-md-12" >
                        <div class="form-group">
                            <label for="pergunta">Pergunta</label>
                            <textarea name="pergunta" required placeholder="Pergunta" class="form-control" rows="7" cols="40">{{ isset($registro->pergunta)? $registro->pergunta: ''}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="resposta">Resposta</label>
                            <textarea name="resposta" id="textoRespostaEdite" required placeholder="Resposta" class="form-control" rows="7" cols="40">{{ isset($registro->resposta)? $registro->resposta : ''}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">
                            @if ($registro->status == "Ativo")
                                <input class="form-group" type="checkbox" id="defaultCheck1" name="status" value="{{isset($registro->status)? $registro->status : ''}}" checked>
                                <label class="form-group" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status</label>
                            @else
                                <input class="form-group" type="checkbox" id="defaultCheck1" name="status" value="{{isset($registro->status)? $registro->status : ''}}">
                                <label class="form-group" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status</label>
                            @endif
                        </div>
                    </div> --}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Nome</label>
                            <input type="text" name="name" autocomplete="off" required placeholder="Nome" class="form-control" value="{{isset($registro->name)? $registro->name : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">E-mail</label>
                            <input type="email" name="email" autocomplete="off" required placeholder="E-mail" class="form-control" value="{{isset($registro->email)? $registro->email : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Senha</label>
                            <input type="text" name="senha" autocomplete="off" required placeholder="Senha" class="form-control" value="{{isset($registro->senha)? $registro->senha : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Empresa</label>
                            <input type="text" name="empresa" autocomplete="off" required placeholder="Empresa" class="form-control" value="{{isset($registro->empresa)? $registro->empresa : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="usuario">Cod Estabel</label>
                            <input type="text" name="cod_estabel" autocomplete="off" required placeholder="Código do estabelecimento" class="form-control" value="{{isset($registro->cod_estabel)? $registro->cod_estabel : ''}}"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagem Logo Tipo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo" value="{{isset($registro->logo)? $registro->logo : ''}}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile2">Imagem Icone</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile2" name="icone" value="{{isset($registro->icone)? $registro->icone : ''}}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile3">Imagem Login</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile3" name="login" value="{{isset($registro->login)? $registro->login : ''}}">
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">
                            @if ($registro->status == "Ativo")
                                <input class="form-group" type="checkbox" id="defaultCheck1" name="status" value="{{isset($registro->status)? $registro->status : ''}}" checked>
                                <label class="form-group" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status</label>
                            @else
                                <input class="form-group" type="checkbox" id="defaultCheck1" name="status" value="{{isset($registro->status)? $registro->status : ''}}">
                                <label class="form-group" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status</label>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" value="Salvar">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

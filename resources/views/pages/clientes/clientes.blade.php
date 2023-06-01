@extends('layout.master')

@section('content')

{{-- @if($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Operação não Autorizada!</strong> {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif --}}

@if($success = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sucesso!</strong> {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="card-body">
    <h4 class="card-title" _msthash="1771757" _msttexthash="77545">Clientes</h4>
    <br>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo_cliente">Novo Cliente</button>
    <br><br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th _msthash="3901170" _msttexthash="153218"> Cod Estabel </th>
                    <th _msthash="3901040" _msttexthash="139581"> Cliente </th>
                    <th _msthash="3901040" _msttexthash="139581"> Email </th>
                    <th _msthash="3901170" _msttexthash="153218"> Senha </th>
                    <th _msthash="3901170" _msttexthash="153218"> Empresa </th>
                    <th _msthash="3901170" _msttexthash="153218"> Logo Tipo </th>
                    <th _msthash="3901170" _msttexthash="153218"> Icone </th>
                    <th _msthash="3901170" _msttexthash="153218"> Img Login </th>
                    <th _msthash="3901170" _msttexthash="153218"> Status </th>
                    <th _msthash="3900910" _msttexthash="208377"> Editar | Excluir </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $registro)
                    <tr>
                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">{{ substr($registro->cod_estabel, 0, 30) }}
                            <input value="{{$registro->cod_estabel}}" hidden type="text" id="{{$registro->id}}">
                        </td>

                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581">{{ substr($registro->name, 0, 20) }}
                            <input value="{{$registro->name}}" hidden type="text" id="{{$registro->id}}">
                        </td>

                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">{{ substr($registro->email, 0, 30) }}
                            <input value="{{$registro->email}}" hidden type="text" id="{{$registro->id}}">
                        </td>

                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">{{ substr($registro->senha, 0, 30) }}
                            <input value="{{$registro->senha}}" hidden type="text" id="{{$registro->id}}">
                        </td>

                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581">{{ substr($registro->empresa, 0, 20) }}
                            <input value="{{$registro->empresa}}" hidden type="text" id="{{$registro->id}}">
                        </td>

                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">
                            <img src="{{$registro->logo}}" class="avatar me-3" alt="image">
                        </td>

                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">
                            <img src="{{$registro->icone}}" class="avatar me-3" alt="image">
                        </td>

                        <td class="font-weight-medium departamento" _msthash="3901170" _msttexthash="153218">
                            <img src="{{$registro->login}}" class="avatar me-3" alt="image">
                        </td>

                        <td class="font-weight-medium" _msthash="3901040" _msttexthash="139581">{{ substr($registro->status, 0, 20) }}
                            <input value="{{$registro->status}}" hidden type="text" id="{{$registro->id}}">
                        </td>

                        <td class="align-middle text-end">
                            <div class="editar-eliminar">
                                <button type="button" class="btn btn-inverse-dark btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#editar_clientes{{$registro->id}}">Editar</button>
                                <button type="button" class="btn btn-inverse-danger btn-sm ml-2" _msthash="3900910" _msttexthash="208377" data-toggle="modal" data-target="#excluir_clientes{{$registro->id}}">Excluir</button>
                            </div>
                                @include('pages.clientes._modalEditar')
                                @include('pages.clientes._modalEliminar')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('pages.clientes._modalAdd')

@endsection


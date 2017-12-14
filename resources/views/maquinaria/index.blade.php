@extends('layouts.admin')
@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de usuarios
            <a href="{{route('maquinaria.create')}}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        @include('users.partes.info')
        <div style='overflow-x:scroll;overflow-y:hidden;width:1600px;height:800px'>
            <div style='width:400px;height:250px'>
                <table class="table table-hover table-striped" id="myTable">
                    <thead>
                    <tr>
                        <th width="20px">ID</th>
                        <th>Nombre Maquina</th>
                        <th>Estado </th>
                        <th>Cantidad</th>
                        <th>Numero de inventario</th>
                        <th>Código de inventario</th>
                        <th>Fecha Compra</th>
                        <th>Numero de Serie</th>
                        <th>Detalle</th>

                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($maq as $maquinaria)

                        <tr>
                            <td>{{$maquinaria->id}}</td>
                            <td>{{$maquinaria->maq_nom}}</td>
                            <td>{{$maquinaria->maq_est}}</td>
                            <td>{{$maquinaria->maq_cant}}</td>
                            <td>{{$maquinaria->maq_num_inv}}</td>
                            <td>{{$maquinaria->maq_cod_inv}}</td>
                            <td>{{$maquinaria->maq_fech_comp}}</td>
                            <td>{{$maquinaria->maq_num_ser}}</td>
                            <td>{{$maquinaria->maq_det}}</td>
                            <td>
                                <a href="{{route('$maquinaria.show', $maquinaria->id)}}">ver</a>
                            </td>
                            <td>
                                <a href="{{route('$maquinaria.edit', $maquinaria->id)}}">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('$maquinaria.destroy', $maquinaria->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-link">Borrar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <div class="col-sm-4">
        @include('users.partes.aside')

    </div>
@endsection
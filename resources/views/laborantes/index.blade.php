@extends('layouts.admin')
@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de usuarios
            <a href="{{route('users.create')}}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        @include('users.partes.info')
        <div style='overflow-x:scroll;overflow-y:hidden;width:1600px;height:800px'>
            <div style='width:400px;height:250px'>
                <table class="table table-hover table-striped" id="myTable">
                    <thead>
                    <tr>
                        <th width="20px">ID</th>
                        <th>Tipo</th>
                        <th>rut</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Género</th>
                        <th>Fecha Nacimiento</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>email</th>
                        <th>email institucional</th>
                        <th>año ingreso</th>
                        <th>Contacto Emergencia</th>
                        <th>Telefono Emergencia</th>
                        <th>Fecha Inscripcion</th>
                        <th>Certificado Medico</th>
                        <th>Estado Certificado Medico</th>
                        <th>Estado usuario</th>
                        <th>area usuario</th>
                        <th>nombre carrera</th>


                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        @if($user->is_admin==5)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->is_admin}}</td>
                                <td>{{$user->rut}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->usu_ape_pat}}</td>
                                <td>{{$user->usu_ape_mat}}</td>
                                <td>{{$user->usu_gen}}</td>
                                <td>{{$user->usu_fec_nac}}</td>
                                <td>{{$user->usu_direc}}</td>
                                <td>{{$user->usu_tel}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->usu_email_inst}}</td>
                                <td>{{$user->usu_ano_ing}}</td>
                                <td>{{$user->usu_nom_cont_eme}}</td>
                                <td>{{$user->usu_tel_cont_eme}}</td>
                                <td>{{$user->usu_fech_ins}}</td>
                                <td>{{$user->usu_cert_med}}</td>
                                <td>{{$user->usu_est_cert_med}}</td>
                                <td>{{$user->usu_est}}</td>
                                <td>{{$user->usu_area}}</td>
                                <td>{{$user->usu_nom_carr}}</td>
                                <td>

                                    <a href="{{route('users.show', $user->id)}}">ver</a>
                                </td>
                                <td>
                                    <a href="{{route('users.edit', $user->id)}}">Editar</a>
                                </td>
                                <td>
                                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-link">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
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
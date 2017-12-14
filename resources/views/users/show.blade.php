@extends('layouts.admin')
@section('content')
    <div class="col-sm-8">
        <h2>
            {{$user->name}}
            <a href="{{route('users.edit', $user->id)}}" class="btn btn-default pull-right">Editar</a>
        </h2>

        <p>{{$user->is_admin}}</p>
        <p>{{$user->rut}}</p>
        <p>{{$user->usu_ape_pat}}</p>
        <p>{{$user->usu_ape_mat}}</p>
        <p>{{$user->usu_gen}}</p>
        <p>{{$user->usu_fec_nac}}</p>
        <p>{{$user->usu_direc}}</p>
        <p>{{$user->usu_tel}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->usu_email_inst}}</p>
        <p>{{$user->usu_ano_ing}}</p>
        <p>{{$user->usu_nom_cont_eme}}</p>
        <p>{{$user->usu_tel_cont_eme}}</p>
        <p>{{$user->usu_fech_ins}}</p>
        <p>{{$user->usu_cert_med}}</p>
        <p>{{$user->usu_est_cert_med}}</p>
        <p>{{$user->usu_est}}</p>
        <p>{{$user->usu_area}}</p>
        <p>{{$user->usu_nom_carr}}</p>

            {!! $user->body !!}
    </div>
    <div class="col-sm-4">
        @include('users.partes.aside')

    </div>
@endsection
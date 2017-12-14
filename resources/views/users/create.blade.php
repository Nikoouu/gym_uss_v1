@extends('layouts.admin')
@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo Usuario
            <a href="{{route('users.index')}}" class="btn btn-default pull-right">Listado</a>
        </h2>


        @include('users.partes.error')

        {!! Form::open(['route' => ['users.store']]) !!}

        @include('users.partes.form')


        {!! Form::close() !!}


    </div>
    <div class="col-sm-4">
        @include('users.partes.aside')

    </div>
@endsection
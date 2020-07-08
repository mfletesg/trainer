@extends('layouts.app') <!--Hereda el diseño de un layout -->

@section('title', 'Trainers Create')

@section('content')
    @include('common.errors')

    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}

        @include('trainers.form')

        {!! Form::submit('Guardar', ['class' => 'btn-primary'])!!}
    {!! Form::close()!!}



    {{-- <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar" value="" class="">
        </div>
        <button type="submit" name="" class="btn-primary">Guardar</button>
    </form> --}}
@endsection

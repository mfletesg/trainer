@extends('layouts.app') <!--Hereda el diseño de un layout -->

@section('title', 'Trainer Edit')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
        @include('trainers.form')
        {!! Form::submit('Actualizar', ['class' => 'btn-primary'])!!}
    {!! Form::close()!!}


    {{-- <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
        @method('PUT') <!-- Indicamos que vamos hacer una actualizacion por el metodo PUT -->
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" value="{{$trainer->description}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <img style="height: 100px; width: 100px; margin:20px; background-color: #EFEFEF" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="Card image cap">
            <input type="file" name="avatar" value="" class="">
        </div>
        <button type="submit" name="" class="btn-primary">Actualizar</button>
    </form> --}}
@endsection

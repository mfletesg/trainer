@extends('layouts.app') <!--Hereda el diseño de un layout -->

@section('title', 'Trainers Create')

@section('content')

    {!! Form:open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
        </div>
    {!! Form:close()!!}

    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
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
    </form>
@endsection


{{-- <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="" value="" class="form-control">
            </div>
            <button type="submit" name="" class="btn-primary">Guardar</button>
        </div>
    </body>
</html> --}}

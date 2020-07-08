@extends('layouts.app') <!--Hereda el diseño de un layout -->

@section('title', 'Trainer')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <img style="height: 200px; width: 200px; margin:20px; background-color: #EFEFEF"
        class="card-img-top rounded-circle mx-auto d-block"
        src="/images/{{$trainer->avatar}}" alt="Card image cap" />
        <div class="text-center">
            <h5 class="card-title">{{$trainer->name}}</h5>
            {{-- <h1>{{$trainer->slug}}</h1> --}}
            <p class="">{{$trainer->description}}</p>
            <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>

            {!! Form::open(['route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
            {!! Form::close() !!}
        </div>


        {{-- <form action="/agenda/{{$datos -> slug}}/destroy" method="DELETE">
               <button type="submit" class="btn btn-danger btn-sm  text center">Borrar</button></a>
        </form> --}}
@endsection

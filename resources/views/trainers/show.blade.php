@extends('layouts.app') <!--Hereda el diseño de un layout -->

@section('title', 'Trainer')

@section('content')
    <img style="height: 200px; width: 200px; margin:20px; background-color: #EFEFEF"
        class="card-img-top rounded-circle mx-auto d-block"
        src="/images/{{$trainer->avatar}}" alt="Card image cap" />
        <div class="text-center">
            <h5 class="card-title">{{$trainer->name}}</h5>
            {{-- <h1>{{$trainer->slug}}</h1> --}}
            <p class="">{{$trainer->description}}</p>
            <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Exitar</a>
        </div>
@endsection

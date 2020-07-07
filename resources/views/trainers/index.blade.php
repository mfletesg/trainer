@extends('layouts.app') <!--Hereda el diseño de un layout -->

@section('title', 'Trainers')

@section('content')
    <div class="row">
        @foreach ($trainers as $trainer)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 70px;" >
                    <img style="height: 100px; width: 100px; margin:20px; background-color: #EFEFEF" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                        <p class="card-text">{{$trainer->description}}</p>
                        <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver Más...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

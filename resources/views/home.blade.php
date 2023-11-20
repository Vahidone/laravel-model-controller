@extends('layouts.main')



@section('content')

<h1 class="text-success fw-bold my-5 text-center">Elenco Film</h1>

<div class="container d-flex flex-wrap justify-content-center my-5 py5 ">
    @foreach ($movies as $movie)
        <div class="card m-2" style="width: 18rem;">
            <img src="{{ $movie->image}}" class="card-img-top" alt="{{ $movie->title}}">
            <div class="card-body">
            <p class="card-title">titolo: <span class="fw-bold text-primary fs-4">{{$movie->title}}</span></p>
            <p>Titolo originale: <span class="fw-bold">{{$movie->original_title}}</span></p>

            <a href="{{ route('detail', ['id' => $movie->id])}}" class="btn btn-success">dettagli</a>
            </div>
        </div>


    @endforeach


</div>

@endsection

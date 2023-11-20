@extends('layouts.main')





@section('content')


<h1 class="text-center my-5 py-5 text-primary">Movie Details</h1>
<div class="container d-flex justify-content-center  flex-wrap my-5 py5 ">

    <div class="card m-2" style="width: 30rem;">
        <img src="{{ $movie->image}}" class="card-img-top" alt="{{ $movie->title}}">
        <div class="card-body">
            <p class="card-title">titolo: <span class="fw-bold text-primary fs-4">{{$movie->title}}</span></p>
            <p>Titolo originale: <span class="fw-bold">{{$movie->original_title}}</span></p>
          <p>Data di produzione: <span class="fw-bold">{{ $movie->date}}</span></p>
          <p> Nazionalità: <span class="fw-bold">{{$movie->nationality}}</span></p>
          <p>Voto: <span class="fw-bold">{{$movie->vote}}</span></p>
          <a href="{{ route('home')}}" class="btn btn-danger">Torna</a>
        </div>
    </div>





</div>

@endsection

@extends('layouts.main')



<h1 class="text-center my-5 py-5 text-primary">Movie Details</h1>

@section('content')



<div class="container d-flex justify-content-center  flex-wrap my-5 py5 ">

    <div class="card m-2" style="width: 18rem;">
        <img src="{{ $movie->image}}" class="card-img-top" alt="{{ $movie->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p>{{$movie->original_title}}</p>
          <p>{{$movie->nationality}}</p>
          <p>{{$movie->vote}}</p>
          <a href="{{ route('home')}}" class="btn btn-primary">Torna</a>
        </div>
    </div>





</div>

@endsection

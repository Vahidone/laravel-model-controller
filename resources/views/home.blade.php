@extends('layouts.main')



@section('content')



<div class="container d-flex flex-wrap my-5 py5">
    @foreach ($movies as $movie)
        <div class="card m-2" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p>{{$movie->original_title}}</p>
            <p>{{$movie->nationality}}</p>
            <p>{{$movie->vote}}</p>
            <a href="{{ route('detail', ['id' => $movie->id])}}" class="btn btn-primary">details</a>
            </div>
        </div>


    @endforeach


</div>

@endsection

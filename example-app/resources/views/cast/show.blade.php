@extends('partials.content')

@section('title', 'Tampilkan Pemeran')

@section('content')

    <div class="d-flex justify-content-between align-items-center">
        <h2>Show Cast {{$casts->id}}</h2>
        <a href="/cast" class="btn btn-primary">Back</a>
    </div>    
    
    <h4>{{$casts->name}}</h4>
    <p>{{$casts->bio}}</p>

@endsection
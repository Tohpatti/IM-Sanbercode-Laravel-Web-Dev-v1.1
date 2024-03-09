@extends('partials.content')

@section('title', 'Sunting Pemeran')

@section('content')

    <div>
        <h2 class="mb-auto">Edit Cast {{$casts->id}}</h2>
        <form action="/cast/{{$casts->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="name" value="{{$casts->name}}" id="name" placeholder="Masukkan Nama">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Bio</label>
                <textarea type="text" class="form-control" name="bio"  value="{{$casts->bio}}" id="bio" cols="30" rows="10" placeholder="Masukkan Bio"></textarea>
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection
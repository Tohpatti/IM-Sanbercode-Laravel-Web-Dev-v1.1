@extends('partials.content')

@section('title', 'Halaman Pemeran')

@section('content')
    <a href="/cast/create" class="btn btn-primary mb-3">Tambah</a>
    <table class="table my-2">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($casts as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->bio}}</td>
                    <td>
                        <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/cast/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>
@endsection
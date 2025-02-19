@extends('index')
@section('title', 'Master Court')
@section('content-title', 'Master Court')
@section('content')

<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="">Add</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Court Type</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <tr>
            @forelse ($courts as $court)
                <td>{{$loop->iteration}}</td>
                <td>{{$court->type->name}}</td>
                <td>{{$court->name}}</td>
                <td>{{$court->price}}</td>
                
                <td>
                    <a class="btn btn-warning" href="">edit</a>
                    <a class="btn btn-danger" href="">delete</a>
                </td>
            </tr>
            @empty
                <div class="alert alert-danger">
                    Data not found

                </div>
            @endforelse
                
        </table>
    </div>

    <div class="col-md-4">
        
    </div>
</div>
@endsection
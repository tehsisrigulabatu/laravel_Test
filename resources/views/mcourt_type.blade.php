@extends('index')
@section('title', 'Master Court Type')
@section('content-title', 'Master Court Type')
@section('content')

<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="">Add</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <tr>
            @forelse ($types as $type)
                <td>{{$loop->iteration}}</td>
                <td>{{$type->name}}</td>
                
                <td>
                    <a class="btn btn-warning" href="">edit</a>
                    <a class="btn btn-danger" href="">delete</a>
                </td>
            </tr>
            @empty

            @endforelse
                
        </table>
    </div>


    <div class="col-md-4">
        
    </div>
</div>
@endsection
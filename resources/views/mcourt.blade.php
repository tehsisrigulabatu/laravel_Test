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
                <th>Court Type Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-warning" href="">edit</a>
                    <a class="btn btn-danger" href="">delete</a>
                </td>
            </tr>
        </table>
    </div>

    <div class="col-md-4">
        
    </div>
</div>
@endsection
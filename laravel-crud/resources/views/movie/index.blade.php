@extends('layouts._web')
@section('title', 'Index')

@section('contain')
    <div class="row">
        <div class="col-md-6">
            <p class="btn btn-primary text-right" >All Movie Information</p>
        </div>
        <div class="col-md-6" style="text-align: right">
            <a href="{{ route('movie-info.create') }}" class="btn btn-success" >Add Movie Information</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Director</th>
            <th>Year</th>
            <th>Rating</th>
            <th>Collection($)</th>
            <th>Action</th>
        </tr>
        @foreach ($InfoMovie as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->directBy }}</td>
                <td>{{ $item->year }}</td>
                <td>{{ $item->rating }}</td>
                <td>{{ $item->collection }}</td>
                <td>
                    <a href="{{ route('movie-info.edit', ['movie_info'=>$item->id]) }}" class="btn btn-info">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
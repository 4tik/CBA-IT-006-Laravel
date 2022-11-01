@extends('layouts._web')
@section('title', 'Create')

@section('contain')
    <p class="btn btn-primary text-right">Create Movie Information</p>
    <form action="{{ route('movie-info.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label>Movie Name</label>
                <input class="form-control" type="text" name="name"/>
            </div>
            <div class="col-md-4">
                <label>Movie Year</label>
                <input class="form-control" type="number" name="year"/>
            </div>
            <div class="col-md-4">
                <label>Movie Rating</label>
                <input class="form-control" type="text" name="rating"/>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-4">
                <label>Director</label>
                <input class="form-control" type="text" name="directBy"/>
            </div>
            <div class="col-md-4">
                <label>Collection</label>
                <input class="form-control" type="number" name="collection"/>
            </div>
        </div>
        <br/>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{ route('movie-info.index') }}" class="btn btn-info">Cancel</a>
    </form>
@endsection
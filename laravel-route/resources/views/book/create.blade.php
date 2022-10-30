@extends('layouts._web')
@section('title', 'Create Book')

@section('content')
    <h1 class="btn btn-primary">Create Book Info</h1>
    <hr/>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <ul style="color:red">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="row">
            <div class="col-md-6">
                <label>Book Name</label>
                <input type="text" name="name" class="form-control" />
                @error('name')
                    <span style="color:red">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label>Author Name</label>
                <input type="text" name="author" class="form-control" />
                @error('author')
                    <span style="color:red">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
                @error('description')
                    <span style="color:red">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
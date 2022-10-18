@extends('layouts._web')
@section('title', 'show post')

@section('content')
    <h1 class="btn btn-primary">Title : {{ $post['title'] }}</h1>
    <br/>
    <p class="btn btn-info">{{ $post['content'] }}</p>
@endsection
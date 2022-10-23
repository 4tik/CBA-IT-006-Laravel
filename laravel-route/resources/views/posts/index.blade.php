@extends('layouts._web')
@section('title', 'show post')

@section('content')
    <h1 class="btn btn-primary">Posts Informations Index</h1>
    <hr/>
    @foreach ($post as $item)
       @include('posts.pratials.index_view')
    @endforeach
    <p class="btn btn-success">Partial Templates in Loops</p>
    <hr/>
    @each('posts.pratials.index_view', $post, 'item')

@endsection
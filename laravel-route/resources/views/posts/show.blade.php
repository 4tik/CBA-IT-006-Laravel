@extends('layouts._web')
@section('title', 'show post')

@section('content')
    <h1 class="btn btn-primary">Title : {{ $post['title'] }}</h1>
    <br/>
    <p class="btn btn-info">{{ $post['content'] }}</p>
    
    @if ($post['is_new'])
        <h1 style="color:green">{{ $post['title'] }}</h1>
    @else
    <h1 style="color:red">{{ $post['title'] }}</h1>
    @endif
@endsection
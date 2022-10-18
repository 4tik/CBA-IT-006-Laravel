@extends('layouts._web')
@section('title', 'show post')

@section('content')
    <h1 class="btn btn-primary">Posts Informations Index</h1>
    <hr/>
    @foreach ($post as $item)
        <h2 class="btn btn-info">{{ $item['title'] }}</h2>
    @endforeach
@endsection
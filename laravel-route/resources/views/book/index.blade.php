@extends('layouts._web')
@section('title', 'show post')

@section('content')
    <h1 class="btn btn-primary">Book Informations Index</h1>
    <hr/>
    <table>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Desc</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
        @foreach ($book as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['author'] }}</td>
            <td>{{ $item['description'] }}</td>
            <td>{{ $item['created_at'] }}</td>
            <td>{{ $item['updated_at'] }}</td>
          </tr>
        @endforeach
    </table>
    

@endsection
@extends('layouts.main-layouts')
@section('content')
    <h1>
        Edit Element:
    </h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('update', $comic -> id)}}" method="POST">

        @method("POST")
        @csrf

        <label for="title" >Title</label>
        <input type="text" name="title" placeholder="Title" value="{{$comic -> title}}"><br>

        <label for="author" >Author</label>
        <input type="text" name="author" placeholder="Author" value="{{$comic -> author}}"><br>

        <label for="release_date">Release Date</label>
        <input type="date" name="release_date" placeholder="Release Date" value="{{$comic -> release_date}}"><br>

        <label for="pages" >Pages</label>
        <input type="number" name="pages" placeholder="Pages" value="{{$comic -> pages}}"><br>

        <input type="submit" value="Edit">
    </form>
@endsection
@extends('layouts.main-layouts')
@section('content')
    <h1>
        Create new Element:
    </h1>
    <form action="{{route('cassa')}}" method="POST">

        @method("POST")
        @csrf

        <label for="title" >Title</label>
        <input type="text" name="title" placeholder="Title"><br>

        <label for="author" >Author</label>
        <input type="text" name="author" placeholder="Author"><br>

        <label for="release_date">Release Date</label>
        <input type="date" name="release_date" placeholder="Release Date"><br>

        <label for="pages" >Pages</label>
        <input type="number" name="pages" placeholder="Pages"><br>

        <input type="submit" value="Create">
    </form>
@endsection
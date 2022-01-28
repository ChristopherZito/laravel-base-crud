
@extends('layouts.main-layouts')
@section('content')
    <div class="box">
        <a href="{{route('home')}}">GO HOME</a>
        <h3>
            {{$comic -> infoComic()}}
        </h3>
    </div>
@endsection
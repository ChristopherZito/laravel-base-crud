@extends('layouts.main-layouts')
@section('content')
    <div class="box">
        <h3>
            Comics Series:
        </h3>
        
        <h3>
            <a href="{{route('create')}}">Create new Comics</a>
        </h3>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <hr>
                    <h3>
                        <a href="{{route('comic', $comic ->id)}}">
                            {{$comic -> title}}
                        </a>
                    </h3>
                    <a href="{{route('edit', $comic -> id)}}">Edit</a>
                    <a href="{{route('delete', $comic -> id)}}">delete</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
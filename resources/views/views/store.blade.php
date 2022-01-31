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
                    <a href="{{route('comic', $comic ->id)}}">
                        {{$comic -> title}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
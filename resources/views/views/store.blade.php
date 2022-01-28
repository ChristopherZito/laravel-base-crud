@extends('layouts.main-layouts')
@section('content')
    <div class="box">
        <h3>
            Comics Series:
        </h3>
        <a href="">go comic</a>
        <ul>
             {{-- @foreach ($comics as $comic)
                <li>
                    {{$comic -> title}}
                </li>
            @endforeach --}}
        </ul>
    </div>
@endsection
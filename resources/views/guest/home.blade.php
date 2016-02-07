@extends('layout._layout')

@section('title')
    Home
@stop

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
            <ul>
                @foreach ($people as $person)
                    <li>{{$person}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
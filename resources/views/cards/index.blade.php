@extends('layout._layout')

@section('title')
    Cards
@stop

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">All Cards</div>
            @foreach ( $cards as $card )
                <li>{{ $card->title }}</li>
            @endforeach
        </div>
    </div>
@stop
@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

    <div class="bg-primary">

    </div>

    <div class="my-container position-relative">
        <div class="comic-img position-absolute">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
        </div>
        <h2 class="text-uppercase comic-title mt-5">{{ $comic['title'] }}</h2>
        <div class="comic-price text-uppercase">
            U.S. Price:
            <span>{{$comic['price']}}</span>
        </div>
        <p class="comic-description mt-4">{{ $comic['description'] }}</p>
        <div class="d-flex justify-content-between align-items-center mb-5">
            <span class="comic-type text-uppercase">{{$comic['type']}}</span>
            <span class="comic-date text-uppercase">On sale date: {{ $comic['sale_date']}}</span>
        </div>
    </div>


@endsection

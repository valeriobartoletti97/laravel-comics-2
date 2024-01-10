@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

    <div class="bg-primary-h">

    </div>

    <div class="my-container position-relative">
        <div class="comic-img position-absolute">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        </div>
        <h2 class="text-uppercase comic-title mt-5">{{ $comic->title }}</h2>
        <div class="comic-price text-uppercase">
            U.S. Price:
            <span>{{$comic->price}}</span>
        </div>
        <p class="comic-description mt-4">{{ $comic->description }}</p>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <span class="comic-type text-uppercase">{{$comic->type}}</span>
            <span class="comic-date text-uppercase">On sale date: {{ $comic->sale_date}}</span>
        </div>
        <div class="d-flex gap-2 justify-content-end align-items-center mb-5">
            <a href="{{route('comics.edit', $comic->id)}}">
               <button class="btn btn-secondary">Modify</button> 
            </a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-flex justify-content-center align-items-center">
                @csrf
                @method('DELETE')
                <button type="submit" data-item-title="{{$comic->title}}" class="remove-btn btn btn-danger">Remove Comic</button>
            </form>
        </div>
    </div>
@include('partials.advice_delete');
@endsection

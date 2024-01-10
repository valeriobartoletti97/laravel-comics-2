@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

<div class="bg-black">
    <div class="container">
      <div class="row flex-wrap justify-content-start py-5">
        @if (session()->has('message'))
            <div class="alert alert-danger text-uppercase text-center">{{ session()->get('message') }}</div>
        @endif
        <form action="{{route('comics.index')}}" method="GET" class="d-flex justify-content-end gap-2 mb-2">
            <select name="search" id="search" class="form-select" aria-label="Default select example" autofocus>
                <option value="">All</option>
                <option value="comic book">Comic Book</option>
                <option value="graphic novel">Graphic Novel</option>
            </select>
            <button type="submit" class="submit-search btn btn-primary text-uppercase">Search</button>
        </form>
        @foreach ($comics as $comic)
            <div class="col-2 d-flex flex-wrap justify-content-start px-2 mt-4">
                <div class="my-card">
                    <div class="img-box">
                        <a href="{{route('comics.show', $comic->id)}}">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </a>
                    </div>
                    <h5 class="text-uppercase pt-3">
                        {{$comic->title}}
                    </h5>
                </div>
            </div>
        @endforeach
      </div>
    </div>
    <div class="container mt-2 pb-5 d-flex justify-content-center align-content-center">
        <a href="{{route('comics.create')}}">
            <button id="add-comic" class="btn btn-primary text-uppercase">
                Aggiungi il tuo fumetto
            </button>
        </a>
    </div>
</div>

@endsection

@section('merch')

<div class="bg-primary merch">
    <div class="container">
        <ul class="nav d-flex justify-content-between align-items-center flex-nowrap py-5 ">
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-digital-comics.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Digital Comics
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-merchandise.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Dc Merchandise
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-subscriptions.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Subscription
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-comics-shop-locator.png" alt="merch-logo">
                    <a class="px-2" href="#">
                        Comic Shop Locator
                    </a>
                </div>
            </li>
            <li class="nav-item px-3 text-uppercase">
                <div>
                    <img src="/images/buy-dc-power-visa.svg" alt="merch-logo">
                    <a class="px-2" href="#">
                        Dc Power Visa
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

@endsection

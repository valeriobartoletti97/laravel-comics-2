@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

<div class="my-bg">
    <div class="container py-5">
        <form method="POST" action="{{route('comics.update', $comic->id)}}" class="form-control">
            @csrf
            @method('PUT')
            <input type="text" id="title" value="{{old('title', $comic->title)}}" name="title" class="form-control mt-2" placeholder="Inserisci un titolo" required>
            <textarea name="description" id="description" class="form-control mt-2" cols="50" rows="10" placeholder="Inserisci una descrizione" required>{{old('description', $comic->description)}}</textarea>
            <input type="text" id="thumb" name="thumb" class="form-control mt-2" placeholder="Inserisci la url di un immagine">
            <input type="text" id="price" value="{{old('price', $comic->price)}}" name="price" class="form-control mt-2" placeholder="Inserisci il prezzo" required>
            <input type="date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" name="sale_date" class="form-control mt-2" required>
            <input type="text" id="series" value="{{old('series', $comic->series)}}" name="series" class="form-control mt-2" placeholder="Inserisci la serie di appartenenza" required>
            <input type="text" id="type" value="{{old('type', $comic->type)}}" name="type" class="form-control mt-2" placeholder="Inserisci il tipo di fumetto" required>
            <div class="d-flex justify-content-end mt-3">
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
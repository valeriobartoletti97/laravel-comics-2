@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

<div class="my-bg">
    <div class="container py-5">
        <form method="POST" action="{{route('comics.store')}}" class="form-control">
            @csrf
            <input type="text" id="title" name="title" class="form-control mt-2" placeholder="Inserisci un titolo">
            <textarea name="description" id="description" class="form-control mt-2" cols="50" rows="10" placeholder="Inserisci una descrizione"></textarea>
            <input type="text" id="thumb" name="thumb" class="form-control mt-2" placeholder="Inserisci la url di un immagine">
            <input type="text" id="price" name="price" class="form-control mt-2" placeholder="Inserisci il prezzo">
            <input type="date" id="sale_date" name="sale_date" class="form-control mt-2">
            <input type="text" id="series" name="series" class="form-control mt-2" placeholder="Inserisci la serie di appartenenza">
            <input type="text" id="type" name="type" class="form-control mt-2" placeholder="Inserisci il tipo di fumetto">
            <div class="d-flex justify-content-end mt-3">
                <input type="submit" value="Send" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Db Comics')

@section('content')

<form method="POST" action="{{route('comics.store')}}" class="form-control">
    @csrf
    <input type="text" id="title" name="title" class="form-control" placeholder="Inserisci un titolo">
    <textarea name="description" id="description" class="form-control" cols="50" rows="10"></textarea>
    <input type="text" id="thumb" name="thumb" class="form-control" placeholder="Inserisci la url di un immagine">
    <input type="text" id="price" name="price" class="form-control" placeholder="Inserisci il prezzo">
    <input type="date" id="sale_date" name="sale_date" class="form-control">
    <input type="text" id="series" name="series" class="form-control" placeholder="Inserisci la serie di appartenenza">
    <input type="text" id="type" name="type" class="form-control" placeholder="Inserisci il tipo di fumetto">
    <input type="submit" value="Send">
</form>
@endsection

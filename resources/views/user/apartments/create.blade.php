@extends('layouts.app')

@section('content')
<h1 class="text-center">
    Aggiungi un nuovo Appartamento
</h1>
<div class="container mt-5 w-50">
    <form class="row g-3" action="{{route("apartment.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row apartment">
            <div class="col-12">
                <label for="title">Titolo</label>
                <input class="w-100" type="text" name="title" id="title">
            </div>
            <div class="col-12">
                <label for="image">Carica una foto:</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="col-12">
                <label for="description">Descrizione</label>
                <textarea class="w-100" name="description" id="description"></textarea>
            </div>
            <div class="col-3">
                <label for="n_rooms">Numero di stanze:</label>
                <input type="number" name="n_rooms" id="n_rooms">
            </div>
            <div class="col-3">
                <label for="n_bedrooms">Numero di stanze da letto:</label>
                <input type="number" name="n_bedrooms" id="n_bedrooms">
            </div>
            <div class="col-3">
                <label for="n_bathrooms">Numero di bagni:</label>
                <input type="number" name="n_bathrooms" id="n_bathrooms">
            </div>
            <div class="col-3">
                <label for="guests">Numero massimo di ospiti:</label>
                <input type="number" name="guests" id="guests">
            </div>
            <div class="col-3">
                <label for="n_beds">Numero di letti:</label>
                <input type="number" name="n_beds" id="n_beds">
            </div>
            <div class="col-3">
                <label for="visible">Spuntare la seguente checkbox per rendere l'appartamento visibile </label>
                <input type="checkbox" name="visible" id="visible" checked=true>
            </div>
            <div class="col-3">
                <label for="available">Spuntare la seguente checkbox per rendere l'appartamento disponibile </label>
                <input type="checkbox" name="available" id="available" checked=true>
            </div>
            <div class="col-3">
                <label for="price">Inserisci il prezzo a notte per ospite: </label>
                <input type="number" name="price" id="price">
            </div>
            <div class="col-3">
                <label for="square_meters">Numero di metri quadrati: </label>
                <input type="number" name="square_meters" id="square_meters">
            </div>
            <div class="col-3">
                <label for="address">inserisci la via:</label>
                <input class="w-100" type="text" name="address" id="address" required>
            </div>
            <div class="col-1">
                <label for="address_number">Numero:</label><br>
                <input class="w-75" type="text" name="address_number" id="address_number" required>
            </div>
            <div class="col-3">
                <label for="address_city">inserisci la città:</label>
                <input class="w-100" type="text" name="address_city" id="address_city" required>
            </div>


            <div class="col-12 text-center mt-5">
                <button class="btn btn-outline-primary" type="submit">send</button>
            </div>
        </div>
    </form>
</div>
@endsection

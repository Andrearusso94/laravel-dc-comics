@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Update: {{$product->title}}</h2>
    <form action="{{route('products.edit', $product->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" value="{{$product->title}}" name="title" id="title" class="form-control" placeholder="inserisci titolo" aria-describedby="helpId">
            <small id="helptitle" class="text-muted">add title</small>
        </div>
        <div class="image_preview">
            <img width="80" src="{{$product->thumb}}" alt="">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="thumb" value="{{$product->thumb}}" name="thumb" id="thumb" class="form-control" placeholder="inserisci titolo" aria-describedby="helpId">
            <small id="helpthumb" class="text-muted">add image</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$product->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" value="{{$product->price}}" name="price" id="price" class="form-control" placeholder="inserisci titolo" aria-describedby="helpId">
            <small id="helptprice" class="text-muted">add price</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" value="{{$product->series}}" name="series" id="series" class="form-control" placeholder="inserisci titolo" aria-describedby="helpId">
            <small id="series" class="text-muted">add series</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" value="{{$product->sale_date}}" name="sale_date" id="sale_date" class="form-control" placeholder="inserisci titolo" aria-describedby="helpId">
            <small id="helpsale_date" class="text-muted">add sale_date</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" value="{{$product->type}}" name="type" id="type" class="form-control" placeholder="inserisci titolo" aria-describedby="helpId">
            <small id="helptype" class="text-muted">add type</small>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</div>

@endsection
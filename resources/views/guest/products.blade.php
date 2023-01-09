@extends('layouts.app')

@section('content')
<h1>Products</h1>

@foreach($products as $product)
<ul>
    <li>{{$product->title}}</li>
</ul>
@endforeach
@endsection
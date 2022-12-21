@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Fumetti</h1>

    <div class="table-responsive-md">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>Id</th>
                    <th>titolo</th>
                    <th>immagine</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse($products as $product)
                <tr class="table-primary">
                    <td scope="row">{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td><img src="{{$product->thumb}}" alt="{{$product->title}}"></td>

                </tr>
                @empty
                <tr>
                    <td>Not found</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

</div>
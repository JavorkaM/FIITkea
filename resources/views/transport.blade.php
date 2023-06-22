@extends('app')

@section('title', 'Doprava')

@section('content')

@include('layout.cart-header', ["checked" => 2])
<div class="container">
    <a href="/cart" class="btn btn-dark">Späť</a>
    <div class="row">
        <div class="col">
            <h1>Spôsob dopravy</h1>
            <form action="saveTransportInfo" method="POST">
                @csrf
                <select name="transport" class="form-select">
                    <option value="courier">Doprava kuriérom - 5 €</option>
                    <option value="inperson">Osobný odber - 0 €</option>
                </select>
                <br>
                <button type="submit" class="btn btn-dark">Pokračovať</button>
            </form>
            <br>
        </div>
    </div>
</div>
@endsection

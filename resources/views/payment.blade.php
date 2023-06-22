@extends('app')

@section('title', 'Platba')

@section('content')
<!--    TOP -->
@include('layout.cart-header', ["checked" => 4])
<div class="container">
    <a class="btn btn-dark" href="{{route('shipping')}}">Späť</a>
    <div class="row">
        <h1>Platba</h1>
    </div>
    <form class="row" style="text-align: center" action="/payment" method="get">
        @csrf
        <div class="col-auto">
            <select class="form-select" name="paymentOption" id="">
                <option value="card" @if(session()->get("payment") == "card") selected @endif>Platba kartou</option>
                <option value="inperson" @if(session()->get("payment") == "inperson") selected @endif>Na dobierku</option>
            </select>
        </div>
        <br>
        <div class="col-auto">
            <button type="submit" class="btn btn-dark">Potvrdiť</button>
        </div>
    </form>
    <div>
        @if (session()->get("payment") == "card")
        <form action="conclusion" method="POST" class="row g-3">
            @csrf
            <div class="col-md-10">
                <label for="card-number" class="form-label">Číslo karty:</label>
                <input type="text" id="card-number" class="form-control" pattern="^[0-9]{16}$" title="Číslo karty bez medzier" name="card-number" required>
            </div>
            <div class="col-md-1">
                <label for="card-month" class="form-label">Mesiac:</label>
                <input type="text" id="card-month" class="form-control" pattern="^0[1-9]|1[0-2]$" title="Mesiac v tvare 01, 02, 03,..." name="card-month" required>
            </div>
            <div class="col-md-1">
                <label for="card-year" class="form-label">Rok:</label>
                <input type="text" id="card-year" class="form-control" pattern="^[2-9][1-9]$" title="Rok v tvare 21, 22, 23, ..." name="card-year" required>
            </div>
            <div class="col-md-10">
                <label for="card-name" class="form-label">Meno:</label>
                <input type="text" id="card-name" name="card-name" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label for="card-cv" class="form-label">CV:</label>
                <input type="text" id="card-cv" name="card-cv" pattern="^[0-9]{3}$" title="3 čísla na zadnej strane karty" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark">Pokračovať</button>
        </form>
        @elseif(session()->get("payment") == "inperson")
            <br>
            <a href="conclusion" class="btn btn-dark">Pokračovať</a> 
        @endif
    </div>
    <br>
</div>
@endsection
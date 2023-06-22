@extends('app')

@section('title', 'Produkt')

@section('content')
<!--    PRODUCT -->
@if($product == null)
    <h1>404</h1>
@else
<div class="container">
    <div class="row">
        <div class="col-sm-6 my-auto" >
            <img src="{{$product->image}}" alt="" class="center">
        </div>
        <div class="col-sm-6">
            <br>
            <h1>{{$product->name}}</h1>
            <h3>{{$product->price}}€</h3>
            <p>Dostupnosť:
                @if($product->amount > 10)
                    <span style="color:green">Na sklade</span>
                @elseif($product->amount > 0)
                    <span style="color:orange">Posledné kusy</span>
                @else
                    <span style="color:red">Vypredané</span>
                @endif
            </p>
            <p>{{strlen($product->description) < 180 ? $product->description : substr($product->description, 0, 175)."..."}}</p>
            <br>
            <div class="d-grid gap-2 d-md-flex">
                <form action="{{route('addToCart', ['id' => $product->id])}}">
                    <input type="number" name="amount" size="3" min="1" value="1">
                    <input type="submit" class="btn btn-dark btn-lg" value="Do košíka">
                </form>
            </div>
            <br>

        </div>
    </div>
    <div class="row">
        <h1>Opis produktu</h1>
        <p>{{$product->description}}</p>
    </div>
</div>
@endif
@endsection

@extends('app')

@section('title', 'Potvrdenie')

@section('content')
<!--    TOP -->
    @include('layout.cart-header', ["checked" => 0])
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!--    Order Confirmation    -->
            <div>
                <div class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    <div class="text-center">
                        <h1>Objednávka bola úspešná</h1>
                    </div>
                </div>
                <div class="text-center">
                    <p>
                        Vaša objednávka bola zaznamenaná, a o potvrdení objednávky Vás budeme informovať. V prípade problémov nás prosím kontaktujte na eshop.costumerservice@gmail.com alebo na +421 900 000 000.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col" style="text-align:center">
                    <a class="btn btn-dark btn-lg" href="index">Pokračovať</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
@endsection
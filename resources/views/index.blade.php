@extends('app')

@section('title', 'FIITkea')

@section('content')    
<!--    IMAGE CAROUSEL  -->
<div class="container-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/news/4.png" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="images/news/2.png" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
    </div>
</div>
<!--    PRODUCTS    -->
<div class="container">
    <h1 style="text-align:center">Naše produkty</h1>
    <div class="row">
        @if(count($products) > 0)
            @for ($i = 0; $i < count($products); $i++)
                <article class="col-lg-3 col-md-4 col-sm-6 product">
                    <div class="row">
                        <img src="{{$products[$i]->image}}" alt="Product">
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="productName" href="product?id={{$products[$i]->id}}"><p class="productName">{{$products[$i]->name}}</p></a>
                            <p>{{$products[$i]->price}}€</p>
                        </div>
                        <div class="col" style="text-align:right">
                            <a class="btn" href="{{route('addToCart', ['id' => $products[$i]->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>       
            @endfor 
        @else
            <h1>No products to show</h1>        
        @endif
    </div>
</div>

@endsection

@extends('app')

@section('title', 'E-shop')

@section('content')
<!--    TOP    -->

<div class="container-fluid" style="border-bottom: 1px black solid">
    <div class="row">
        <!--    FILTERS -->
        <div class="col-sm-4" style="border-right: 1px black solid">
            @if (isset($category))
            <form action="/eshop/{{$category->id}}" method="GET" class="row">
                @else
                <form action="/eshop" method="GET" class="row">
                    @endif
                    <h3 style="text-align:center">Filtrovanie</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="search">Hľadať:</label>
                            <input class="form-control me-2" type="search" id="search" name="search"
                                placeholder="Search" aria-label="Search" value="{{$request->search}}">
                        </div>
                        <div class="col-sm-6">
                            <label for="sort">Zoradiť podľa ceny:</label>
                            <div class="input-group">
                                <select class="form-select" name="sort" id="sort">
                                    @if ($request->sort == 'high_to_low')
                                    <option value="0">Zvoľte</option>
                                    <option value="low_to_high">Najlacnejšie</option>
                                    <option selected value="high_to_low">Najdrahšie</option>
                                    @elseif ($request->sort == 'low_to_high')
                                    <option value="0">Zvoľte</option>
                                    <option selected value="low_to_high">Najlacnejšie</option>
                                    <option value="high_to_low">Najdrahšie</option>
                                    @else
                                    <option selected value="0">Zvoľte</option>
                                    <option value="low_to_high">Najlacnejšie</option>
                                    <option value="high_to_low">Najdrahšie</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="min_price">Cena od:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="min_price" name="min_price" min="0"
                                    size="3" value="{{$request->min_price}}">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="max_price">Cena do:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="max_price" name="max_price" min="0"
                                    size="3" value="{{$request->max_price}}">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="color">Farba:</label>
                            <select class="form-select" name="color" id="color">
                                <option value="0">Zvoľte farbu</option>
                                @foreach ($colors as $color)
                                @if ($request->color == $color->id)
                                <option selected value="{{$color->id}}">{{$color->name}}</option>
                                @else
                                <option value="{{$color->id}}">{{$color->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="color">Materiál:</label>
                            <select class="form-select" name="material" id="material" value="{{$request->material}}">
                                <option value="0">Zvoľte materiál</option>
                                @foreach ($materials as $material)
                                @if ($request->material == $material->id)
                                <option selected value="{{$material->id}}">{{$material->name}}</option>
                                @else
                                <option value="{{$material->id}}">{{$material->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <br>
                            <button type="submit" class="btn btn-primary">Potvrdiť</button>
                        </div>
                    </div>
                </form>
        </div>
        <!--    CATEGORIES  -->
        <div class="col" style="text-align:center">
            <h3 style="text-align:center">Kategórie</h3>
            <div class="row">
                @for ($i = 0; $i < count($categories); $i++) <div class="col-lg-3 col-md-4 col-sm-6 product">
                    <a href="../eshop/{{$categories[$i]->id}}">
                        <img src="../{{$categories[$i]->image}}" alt="" height="100px">
                        <p>{{$categories[$i]->name}}</p>
                    </a>
            </div>
            @endfor
        </div>
    </div>
</div>
</div>
<div class="container" style="margin-top: 20px; margin-bottom: 20px">
    <div class="row">
        @if (isset($category))
        <h1 style="text-align:center">{{$category->name}}</h1>
        @endif
        @if(count($products) > 0)
        @for ($i = 0; $i < count($products); $i++) <article class="col-lg-3 col-md-4 col-sm-6 product">
            <div class="row">
                <img src="../{{$products[$i]->image}}" alt="Product">
            </div>
            <div class="row">
                <div class="col-6">
                    <a href="{{route('product', ['id' => $products[$i]->id])}}"><p class="productName">{{$products[$i]->name}}</p></a>
                    <p>{{$products[$i]->price}}€</p>
                </div>
                <div class="col-6" style="text-align:right">
                    <a class="btn" href="{{route('addToCart', ['id' => $products[$i]->id])}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path
                                d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                            <path
                                d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            </article>
            @endfor
            <div class="col-12 d-flex justify-content-center pt-4 li: { list-style: none; }">
                {{$products->appends(request()->input())->links("pagination::bootstrap-4")}}
            </div>
            @else
            <h3 style="text-align:center; padding:70px 0">Zadaným podmienkam nevyhovujú žiadne produkty</h3>
            @endif
    </div>
</div>


@endsection

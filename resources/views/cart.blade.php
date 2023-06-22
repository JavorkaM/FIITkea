@extends('app')

@section('title', 'Košík')

@section('content')
    <!--    TOP -->
    @include('layout.cart-header', ['checked' => 1])
    <div class="container-fluid">
    <!--    CART    -->
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @if(count($products) > 0)
                    <table class="table table-borderless">
                        <thead class="no-side-padding">
                        <th colspan="3" class="no-side-padding">Nákupný košík</th>
                        <th class="no-side-padding">Množstvo</th>
                        <th class="no-side-padding">Cena</th>
                        </thead>
                        <tbody>
                        @for ($i = 0; $i < count($products); $i++)
                            <tr>
                                <td style="width: 1% !important;" class="no-side-padding">
                                    <div>
                                        <a class="btn" href="{{route('removeFromCart', ['id' => $products[$i]->id])}}" style="display:block;width:35px; padding-left:0; padding-right:0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                                <td style="padding-left:7px; padding-right:0"><img src={{$products[$i]->image}} alt="" height="50px"></td>
                                <td><a href="{{route('product', ['id' => $products[$i]->id])}}"><h5>{{$products[$i]->name}}</h5></a></td>
                                <td class="no-side-padding">
                                    <form action="{{route('updateCart', ['id' => $products[$i]->id])}}">
                                        <input type="number" value="{{isset($carts[$i]->amount) ? ($carts[$i]->amount) : (session()->get("product_".$products[$i]->id))}}" name="amount" min="1">
                                        <input type="submit" class="btn btn-dark no-side-padding" href="{{route('updateCart', ['id' => $products[$i]->id])}}" value="Upraviť" style="width: 75px">
                                    </form>
                                </td>
                                <td class="no-side-padding">{{isset($carts[$i]->amount) ? ($products[$i]->price * $carts[$i]->amount) : (session()->get("product_".$products[$i]->id) * $products[$i]->price)}} €</td>
                            </tr>

                        @endfor
                        </tbody>
                    </table>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <h1>Celkom:</h1>
                            <a href="{{route('eshop')}}" class="btn btn-dark" style="margin:20px">Späť k nákupu</a>
                        </div>
                        <div class="col" style="text-align:right">
                            <h1>{{$totalPrice}} €</h1>
                            <a href="{{route('transport')}}" class="btn btn-dark" style="margin:20px">Pokračovať</a>
                            <br><br>
                        </div>
                    </div>
                @else
                    <div style="text-align: center; margin:100px" >
                        <h1>Košík je prázdny</h1>
                        <br>
                        <a href="/eshop" class="btn btn-dark">Do obchodu</a>
                    </div>

                @endif

            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
@endsection

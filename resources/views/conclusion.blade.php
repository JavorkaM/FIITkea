@extends('app')

@section('title', 'Zhrnutie')

@section('content')
    @include('layout.cart-header', ['checked' => 5])
    <div class="container">
        <a href={{route("payment")}} class="btn btn-dark">Späť</a>
        <div class="row">
            <h1>Zhrnutie</h1>
            <div class="col-lg-6">
                <p><b>Adresa:</b></p>
                <p>{{session()->get('name').' '.session()->get('surname')}} <br>
                {{session()->get('street')}}<br>
                {{session()->get('city')}}<br>
                {{session()->get('zip')}}</p>
                <p><b>Kontakt:</b></p>
                <p>{{session()->get('email')}}<br>
                {{session()->get('phone')}}</p>
            </div>
            <div class="col-lg-6">
                @if(count($products) > 0)
                <table class="table table-borderless">
                    <thead class="no-side-padding">
                    <th colspan="2" class="no-side-padding">Nákupný košík</th>
                    <th class="no-side-padding">Množstvo</th>
                    <th class="no-side-padding">Cena</th>
                    </thead>
                    <tbody>
                    @for ($i = 0; $i < count($products); $i++)
                        <tr>
                            <td style="padding-left:7px; padding-right:0"><img src={{$products[$i]->image}} alt="" height="50px"></td>
                            <td><a href="{{route('product', ['id' => $products[$i]->id])}}"><h5>{{$products[$i]->name}}</h5></a></td>
                            <td class="no-side-padding">
                                {{isset($carts[$i]->amount) ? ($carts[$i]->amount) : (session()->get("product_".$products[$i]->id))}}
                            </td>
                            <td class="no-side-padding">{{isset($carts[$i]->amount) ? ($products[$i]->price * $carts[$i]->amount) : (session()->get("product_".$products[$i]->id) * $products[$i]->price)}} €</td>
                        </tr>
                    @endfor
                        <tr>
                            <td colspan="3"><h5>{{session()->get("transport") == "courier" ? "Doprava kuriérom" : "Osobný odber"}}</h5></td>
                            <td colspan="3">{{session()->get("transport") == "courier" ? "5 €" : "0 €"}}</td>
                        </tr>
                        
                    </tbody>
                </table>
                <hr>
                <div class="row">
                    <div class="col">
                        <h1>Celkom:</h1>
                    </div>
                    <div class="col" style="text-align:right">
                        <h1>{{session()->get("transport") == "courier" ? $totalPrice + 5 : $totalPrice}} €</h1>
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
        </div>
        <div class="row">
            <a class="btn btn-dark" href="order">Objednať</a>
        </div>
        <br>
    </div>
@endsection
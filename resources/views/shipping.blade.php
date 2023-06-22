@extends('app')

@section('title', 'Dodacie údaje')

@section('content')
<!--    TOP -->
@include('layout.cart-header', ["checked" => 3])
<div class="container">
    <a class="btn btn-dark" href="{{route('transport')}}">Späť</a>
    <div class="row">
        <div class="col">
            <!--    FORM    -->
            <div class="row">
                <div class="col">
                    <h1>Dodacie údaje</h1>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col" style="text-align:right">
                    <button class="btn btn-dark">Použiť údaje používateľa</button>
                </div>
            </div> -->
                <form class="row g-2" action="{{route('saveShippingInfo')}}" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="name" class="form-label">Meno:</label>
                        @if($user)
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                        @else
                            <input type="text" class="form-control" id="name" name="name" value="{{session()->get('name')}}" required>
                        @endif
                    </div>
                    <div class="col-12">
                        <label for="surname" class="form-label">Priezvisko:</label>
                        @if($user)
                            <input type="text" class="form-control" id="surname" name="surname" value="{{$user->surname}}" required>
                        @else
                            <input type="text" class="form-control" id="surname" name="surname" value="{{session()->get('surname')}}" required>
                        @endif

                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email:</label>
                        @if($user)
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{session()->get('email')}}" required>
                        @endif

                    </div>
                    <div class="col-12">
                        <label for="phone" class="form-label">Tel. č.:</label>
                        <div class="input-group">
                            <span class="input-group-text">+421</span>
                            @if($user)
                                <input type="text" class="form-control" id="phone" name="phone" pattern="^[0-9]{9}$" title="Tel. č. bez predvoľby" value="{{$user->phone}}" required>
                            @else
                                <input type="text" class="form-control" id="phone" name="phone" pattern="^[0-9]{9}$" title="Tel. č. bez predvoľby" value="{{session()->get('phone')}}" required>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="city" class="form-label">Mesto:</label>
                        @if($user)
                            <input type="text" class="form-control" id="city" name="city" value="{{$user->city}}" required>
                        @else
                            <input type="text" class="form-control" id="city" name="city" value="{{session()->get('city')}}" required>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="zip" class="form-label">PSČ:</label>
                        @if($user)
                            <input type="text" class="form-control" id="zip" name="zip" pattern="^[0-9]{5}$" title="PSČ v tvare 12345" value="{{$user->zip}}" required>
                        @else
                            <input type="text" class="form-control" id="zip" name="zip" pattern="^[0-9]{5}$" title="PSČ v tvare 12345" value="{{session()->get('zip')}}" required>
                        @endif
                    </div>
                    <div class="col-12">
                        <label for="street" class="form-label">Ulica a č. domu:</label>
                        @if($user)
                            <input type="text" class="form-control" id="street" name="street" value="{{$user->street}}" required>
                        @else
                            <input type="text" class="form-control" id="street" name="street" value="{{session()->get('street')}}" required>
                        @endif
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-dark btn-lg" value="Pokračovať">
                    </div>
                </form>

            <br>
        </div>
    </div>
</div>
@endsection

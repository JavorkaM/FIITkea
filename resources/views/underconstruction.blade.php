@extends('app')

@section('title', 'Under construction')

@section('content')
<!--    TOP -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <!--    Under Construction    -->
            <div>
                <div class="row">
                    <img  class="centericon" src="https://img.icons8.com/ios/100/000000/under-construction.png"/>
                    <div class="text-center">
                        <h1>Vo výstavbe</h1>
                    </div>
                </div>
                <div class="text-center">
                    <p>
                        Na tejto funkcii ešte pracujeme.
                        <br>
                        Ďakujeme za pochopenie.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col" style="text-align:center">
                    <a class="btn btn-dark btn-lg" href="{{route('index')}}">Späť</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
@endsection

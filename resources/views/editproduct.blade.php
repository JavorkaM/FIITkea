@extends('app')

@section('title', 'editproduct')

@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px">
        <br>
        <h1>Editovanie Produktu {{$product->id}}</h1>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{url('admin', [$product->id])}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group">
                    <label for="title">Názov</label>
                    <input type="text" class="form-control" id="name"  name="name" value="{{$product->name}}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="description">Opis</label>
                    <textarea class="form-control" name="description" id="description" style="height: 150px">{{$product->description}}</textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label for="price">Cena:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="price" name="price" min="0" size="3" value="{{$product->price}}">
                        <span class="input-group-text">€</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="amount">Na sklade:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="amount" name="amount" min="1" size="3" value="{{$product->amount}}">
                        <span class="input-group-text">ks</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label for="color">Farba:</label>
                    <select class="form-select" name="color" id="color">
                        @foreach ($colors as $color)
                            @if ($product->color == $color->id)
                                <option selected value="{{$color->id}}">{{$color->name}}</option>
                            @else
                                <option value="{{$color->id}}">{{$color->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="color">Materiál:</label>
                    <select class="form-select" name="material" id="material">
                        @foreach ($materials as $material)
                            @if ($product->material == $material->id)
                                <option selected value="{{$material->id}}">{{$material->name}}</option>
                            @else
                                <option value="{{$material->id}}">{{$material->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg">
                    <label for="color">Kategória:</label>
                    <select class="form-select" name="category" id="category">
                        @foreach ($categories as $category)
                            @if ($product->category == $category->id)
                                <option selected value="{{$category->id}}">{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-lg">
                    <label for="color">Zmeniť obrázok:</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg">

                    @if ($product->featured == 1)
                        <input type="checkbox" name="featured" value="1" checked> <label>Featured?</label>
                    @else
                        <input type="checkbox" name="featured" value="1" > <label>Featured?</label>
                    @endif
                    <br>
                        <button type="submit" class="btn btn-primary">Zmeniť</button>
                </div>
                <div class="col-lg">
                    <label for="color">Aktuálny obrázok:</label>

                    @if ($product->image)
                        <img src="{{asset($product->image)}}"  class="center" alt="productimage" style="">
                    @else
                        <h1>Žiadny obrázok!</h1>
                    @endif

                </div>
            </div>

        </form>
    </div>

@endsection

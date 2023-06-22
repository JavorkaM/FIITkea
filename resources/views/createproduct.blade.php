@extends('app')

@section('title', 'editproduct')

@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px">
        <br>
        <h1>Nový produkt</h1>
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
        <form action="/admin" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group">
                    <label for="title">Názov</label>
                    <input type="text" class="form-control" id="name"  name="name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label for="description">Opis</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label for="price">Cena:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="price" name="price" min="0" size="3">
                        <span class="input-group-text">€</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="amount">Na sklade:</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="amount" name="amount" min="1" size="3">
                        <span class="input-group-text">ks</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <label for="color">Farba:</label>
                    <select class="form-select" name="color" id="color">
                        <option value="0">Zvoľte farbu</option>
                        @foreach ($colors as $color)
                                <option value="{{$color->id}}">{{$color->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="color">Materiál:</label>
                    <select class="form-select" name="material" id="material">
                        <option value="0">Zvoľte materiál</option>
                        @foreach ($materials as $material)
                                <option value="{{$material->id}}">{{$material->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg">
                    <label for="color">Kategória:</label>
                    <select class="form-select" name="category" id="category">
                        <option value="0">Zvoľte kategóriu</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg">
                    <label for="color">Obrázok:</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>
            </div>
            <br>




            <button type="submit" class="btn btn-primary">Vytvoriť</button>
        </form>
    </div>
@endsection

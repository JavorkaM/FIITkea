@extends('app')

@section('title', 'admin')

@section('content')

    <div style="padding: 10px">
        <div class = "row">
            <div class="col" style="text-align: left">
                <h1>Produkty</h1>
            </div>
            <div class="col" style="text-align: right">
                <a class="btn btn-dark btn-lg" style="padding-left: 30px;padding-right: 30px " href="{{ route('createproduct') }}">Pridať produkt</a>
            </div>
        </div>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Názov</th>
                <th scope="col">Opis</th>
                <th scope="col">Cena</th>
                <th scope="col">Kat</th>
                <th scope="col">Farba</th>
                <th scope="col">Mat.</th>
                <th scope="col">Skl.</th>
                <th scope="col">Feat?</th>
                <th scope="col">Obrázok</th>
                <th scope="col">Dátum vytvorenia</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td><a href="{{route('product', ['id' => $product->id])}}">{{$product->name}}</a></td>
                    <td style="max-width: 240px">{{strlen($product->description) < 110 ? $product->description : substr($product->description, 0, 100)."..."}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->material}}</td>
                    <td>{{$product->amount}}</td>
                    <td>{{$product->featured}}</td>
                    <td>{{strlen($product->image) < 18 ? $product->image : substr($product->image, 0, 15)."..."}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a class="btn btn-warning" href="{{ URL::to('admin/' . $product->id . '/edit') }}">
                                Editovať
                            </a>&nbsp;&nbsp;
                            <form action="{{url('admin', $product->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="Vymazať"/>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

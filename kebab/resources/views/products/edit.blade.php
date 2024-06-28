@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edycja</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary float-end" href="{{ route('products.index') }}"> Powrót</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Opis:</strong>
                    <input type="textarea" name="description" value="{{ $product->description }}" class="form-control" placeholder="Opis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cena:</strong>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Cena">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zdjęcie:</strong>
                    <input type="file" name="image_path" class="form-control" placeholder="Zdjęcie">
                    <img src="{{ asset('storage/'. $product->image_path )}}" width="100" class="img-thumbnail" alt="zdjęcie">
                    <input type="hidden" name="hidden_image_path" value="{{ $product->image_path }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <input type="hidden" name="hidden_id" value="{{ $product->id }}">
                <button type="submit" class="btn btn-primary">Edytuj</button>
            </div>
        </div>

    </form>
    </div>
@endsection

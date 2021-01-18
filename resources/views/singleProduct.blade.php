@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-4">
                <img class="w-100" src="/storage/{{ $product->image }}" alt="">
                <h3>{{ $product->product_name }}</h3>
                <h3>${{ $product->price }}</h3>
                <h3>{{ $product->description }}</h3>
                <h3>{{ $product->created_at }}</h3>
            </div>
        </div>
    </div>
@endsection

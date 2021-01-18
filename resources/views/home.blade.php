@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-4">
            <a href="{{ route('single.product', $product->id) }}">
            <img class="w-100" src="/storage/{{ $product->image }}" alt="">
            <h3>{{ $product->product_name }}</h3>
            <h3>${{ $product->price }}</h3>
            <h3>{{ $product->description }}</h3>
            <h3>{{ $product->created_at }}</h3>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection

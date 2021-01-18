@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <div class="col-6">
                <a href="{{ route('addProduct') }}">Add Product</a>
            </div>
            <div class="col-6">
                <a href="{{ route('addCategory') }}">Add Category</a>
            </div>
        </div>
    </div>


@endsection

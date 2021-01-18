@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form action="{{ route('addProduct') }}" enctype="multipart/form-data" method="post" >
                @csrf
                <input type="text" name="name" class="form-control mt-2" placeholder="name">
                <input type="text" name="price" class="form-control mt-2" placeholder="price">
                <textarea name="description" class="form-control mt-2" placeholder="description"></textarea>
                <select name="category" multiple class="form-control mt-2">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <input type="file" name="image" class="mt-2">
                <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
            </form>
        </div>
        <a href="/dashboard">Back To Dashboard</a>
    </div>


@endsection

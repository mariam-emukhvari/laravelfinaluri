@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <form action="{{ route('addCategory') }}" method="post">
                @csrf
                <input type="text" name="name" class="form-control mt-2" placeholder="name">
                <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
            </form>
        </div>
        <a href="/dashboard">Back To Dashboard</a>
    </div>


@endsection

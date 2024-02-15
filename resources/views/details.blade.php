@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row my-5">
        <div class="col-sm-6">
            <img src="{{ $products->gallery }}" class="img-fluid">
        </div>
        <div class="col-sm-6 px-md-4 py-md-2">
            <a href="/">Go Back</a>
            <h4>Name : {{ $products->name }}</h4>
            <h5>Price : {{ $products->price }}</h5>
            <h5>Category : {{ $products->category }}</h5>
            <p>Description : {{ $products->description }}</p>
            <button class="btn btn-success ">Add To Cart</button>
            <button class="btn btn-primary ">Buy Now</button>
        </div>
    </div>
</div>

@endsection



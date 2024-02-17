@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row my-5">
        <div class="table table-bordered">
            <div class="col-sm-12 d-sm-flex ">
                <div class="col-sm-6">
                    <img src="{{ $products->gallery }}" class="img-fluid">
                </div>
                <div class="col-sm-6 py-3">
                    <h4>Name : {{ $products->name }}</h4>
                    <h6>Price : {{ $products->price }}</h6>
                    <h6>Category : {{ $products->category }}</h6>
                    <h5 class="my-3">Description : </h5>
                    <p>{{ $products->description }}</p>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                        <button class="btn btn-success ">Add To Cart</button>
                        <a href="/" class="btn btn-info">Go Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



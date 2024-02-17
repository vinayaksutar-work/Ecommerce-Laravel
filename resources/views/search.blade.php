@extends('layouts.master')
@section('content')

<div class="container-fluid px-md-3">
    <h2 class="m-3">searched items..</h2>
    <div class="row col-sm-12 ">
        @foreach ($products as $item)
        <a href="details/{{ $item->id }}">
            <div class="card mx-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ $item->gallery }}">
                <div class="card-body">
                    <h5>Name : {{ $item->name }}</h5>
                    <h6>Price : {{ $item->price }} INR.</h6>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                        <button class="btn btn-success ">Add To Cart</button>
                        <a href="/" class="btn btn-primary ">Go Back</a>
                    </form>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection

@extends('layouts.master')
@section('content')

<div class="container-fluid px-md-5">
    <div class="row col-sm-12 my-5 ">
        @foreach ($products as $item)
        <a href="details/{{ $item->id }}">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $item->gallery }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $item->name }}</h5>
                    <h6 class="card-subtitle">Price : {{ $item->price }}</h6>
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                        <button class="btn btn-success ">Add To Cart</button>
                    </form>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection

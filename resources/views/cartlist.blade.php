@extends('layouts.master')
@section('content')

<div class="container-fluid px-md-5">
    <h2 class="my-4">Cart List</h2>
    <div class="row">
       <div class="col-sm-6">
        @if ($products->count() >= 1)
            <a href="/ordernow" class="btn btn-success my-2">Order Now</a>
        @endif
        @forelse ($products as $item)
        <table class="table table-bordered ">
            <tbody>
                <td>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="details/{{ $item->id }}">
                            <img class="img-fluid" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-6 pt-2">
                            <h4>Name : {{ $item->name }}</h4>
                            <h6 class="my-2">Price : {{ $item->price }} INR.</h6>
                            <h6 class="my-2">Category : {{ $item->category }}</h6>
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-danger my-2 ">Remove</a>
                            <a href="/" class="btn btn-primary my-2 ">Go Back</a>
                        </div>
                    </div>
                </td>
            </tbody>
        </table>
        @empty
            <td>ITEM NOT FOUND IN CART</td>
        @endforelse
       </div>
    </div>
</div>

@endsection

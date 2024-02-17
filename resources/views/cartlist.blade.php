@extends('layouts.master')
@section('content')

<div class="container-fluid px-md-5">
    <h2 class="my-4">Cart List</h2>
    <div class="row">
       <div class="col-sm-6">
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
                            <h5>Name : {{ $item->name }}</h5>
                            <p class="my-2">Price : {{ $item->price }} INR.</p>
                            <p class="my-2">Category : {{ $item->category }}</p>
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-danger my-2 ">Remove</a>
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

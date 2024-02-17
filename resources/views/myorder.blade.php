@extends('layouts.master')
@section('content')

<div class="container-fluid px-md-5">
    <div class="row">
        <div class="col-sm-8">
            <h2 class="my-4">Order List</h2>
            @forelse ($orders as $order)
            <table class="table table-bordered">
                <tbody>
                    <td>
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="details/{{ $order->id }}">
                                <img class="img-fluid" src="{{ $order->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <h5 class="my-2">Name : {{ $order->name }}</h5>
                                <p class="my-2 ">Order No : {{ $order->id }}</p>
                                <p class="my-2 ">Delivery Address : {{ $order->address }}</p>
                                <p class="my-2 ">Price  : {{ $order->price }} INR.</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="my-2">Delivery Status : {{ $order->status }}</p>
                                <p class="my-2 ">Payment Status : {{ $order->payment_status }}</p>
                                <p class="my-2 ">Payment Method : {{ $order->payment_method }}</p>
                                <a href="/removeorder/{{ $order->id }}" class="btn btn-warning my-2 ">Cancel Order</a>
                            </div>
                        </div>
                    </td>
                </tbody>
            </table>
            @empty
            <td>NO ITEM FOUND IN ORDER LIST</td>
            @endforelse
        </div>
    </div>
</div>

@endsection

@extends('layouts.master')
@section('content')

<div class="container-fluid px-md-5">
    <h2 class="my-4">Cart List</h2>
    @foreach ($products as $item)
    <table class="table table-bordered ">
        <tbody>
            <td>
                <div class="row col-sm-12">
                    <div class="col-sm-4">
                        <a href="details/{{ $item->id }}">
                        <img class="img-fluid" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="card-title">Name : {{ $item->name }}</h5>
                        <h6 class="card-subtitle">Price : {{ $item->price }}</h6>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning ">Remove Item</a>
                    </div>
                </div>
            </td>
        </tbody>
    </table>
    @endforeach
</div>

@endsection

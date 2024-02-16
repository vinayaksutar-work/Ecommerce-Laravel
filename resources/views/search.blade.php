@extends('layouts.master')
@section('content')
    <div class="container-fluid px-md-5">
        <div class="row col-sm-12 my-5 ">
        @foreach ($products as $item)
            {{-- <div class="col-sm-4">
                <div>
                    <a href="details/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" class="img-fluid">
                        <div>
                            <h3>{{ $item->name }}</h3>
                            <h5>{{ $item->price }}</h5>
                        </div>
                    </a>
                </div>
            </div> --}}

            <a href="details/{{ $item->id }}">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $item->gallery }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Name : {{ $item->name }}</h5>
                      <h6 class="card-subtitle">Price : {{ $item->price }}</h6>
                      <button class="btn btn-success ">Add Cart</button>
                      <button class="btn btn-primary ">Buy Now</button>
                    </div>
                </div>
            </a>
        @endforeach
        </div>
    </div>
@endsection
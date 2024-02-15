@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach($products as $key => $item)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                class="{{ $loop->first ? 'active' : '' }}"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
              @foreach ($products as $item)
              <div class="carousel-item {{ $item->id==1?'active':''}}" data-interval="2000">
                <a href="details/{{ $item->id }}">
                    <img class="d-block w-100 slider-img" src="{{ $item->gallery }}" alt="First slide"/>
                    <div class="carousel-caption">
                        <h3>{{ $item->name }}</h3>
                    </div>
                </a>
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row p-3 ">
        <h2 class="py-3">Trending Products</h2>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-sm-2 my-3  text-center">
                    <a href="details/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" class="img-fluid">
                        <div><h5>{{ $item->name }}</h5></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection



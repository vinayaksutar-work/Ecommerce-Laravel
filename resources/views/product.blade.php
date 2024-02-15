@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row mt-5 justify-content-center">
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
                <img class="d-block w-100 slider-img" src="{{ $item->gallery }}" alt="First slide"/>
                <div class="carousel-caption">
                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->description }}</p>
                </div>
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
</div>

@endsection



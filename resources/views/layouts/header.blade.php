<?php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartItem();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<title>E-commerce Project</title>
</head>
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{'/'}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/myorder">Orders</a>
            </li>
            <form class="form-inline my-2 my-lg-0 " action="/search">
                <input class="form-control mr-sm-2 " type="search" name="search_name" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </ul>
        <ul class="nav navbar-nav navbar-right mx-2 ">
            @if (Session::has('user'))
            <li class=""><a href="/cartlist" class="px-2">Cart Item ({{ $total }})</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {{ Session::get('user')['name']}}
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="/logout">Logout</a></li>
                </ul>
              </li>
            @else
                <li><a href="/login"></a></li>
            @endif
        </ul>
    </div>
</nav>

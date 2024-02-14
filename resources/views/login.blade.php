@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row col-sm-12 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4 my-5">
            <div class="card">
                <div class="card-header"><h4 class="text-center">Login Page</h4></div>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



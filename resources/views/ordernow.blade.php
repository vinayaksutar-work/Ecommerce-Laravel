@extends('layouts.master')
@section('content')

<div class="container-fluid mt-3">
    <div class="col-sm-6">
        <table class="table table-striped table-bordered ">
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{ $total }} Rs</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 Rs</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>100 Rs</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{ $total + 100 }} Rs</td>
              </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" placeholder="enter your address" cols="10" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd" class="h5 my-3">Payment Method</label>
                <p><input type="radio" value="cash" name="payment"><span class="mx-2">Online Payment</span></p>
                <p><input type="radio" value="cash" name="payment"><span class="mx-2">EMI</span></p>
                <p><input type="radio" value="cash" name="payment"><span class="mx-2">Cash on Delivery</span></p>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>
    </div>
</div>

@endsection

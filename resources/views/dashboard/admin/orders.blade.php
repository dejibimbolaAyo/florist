@extends('layouts.dashboard')
@section('title', 'Orders')
@section('content')
<div class="graphs">
    <div class="span_11">
    <div class="xs">
          <h3>Order List</h3>
          @if(!$orders->isEmpty())
          <div class="bs-example4" data-example-id="contextual-table">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Customer Email</th>
                  <th>Product name</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($orders as $key=>$order)
                    <?php $key = $key + 1?>
                    <tr>
                        <th scope="row">{{$key}}</th>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->user->email}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>${{$order->product->price}}</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-info">Fulfill Order</button>
                                <a  class="btn btn-danger" href="{{headless_url('admin/orders/delete/'.$order->id)}}">
                                  Reject Order
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
        @else
        <div class="card">
            <h4>Orders list empty</h4>
        </div>
        @endif
        <div class="clearfix"> </div>
    </div>
    <div class="copy">
        <p>Copyright &copy; 2019 Flower Central | All Rights Reserved.
        </p>
    </div>
</div>
@stop
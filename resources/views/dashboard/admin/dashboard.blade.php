@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="graphs">
    <div class="col_3">
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                <div class="stats">
                    <h5><strong>{{$orders->count()}}</strong></h5>
                    <span>New Orders</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-users user1 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>{{$users}}</strong></h5>
                    <span>New Visitors</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>{{$users}}</strong></h5>
                    <span>New Users</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 widget">
            <div class="r3_counter_box">
                <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                <div class="stats">
                    <h5><strong>
                      <?php $profit = 0;foreach ($orders as $order) {$profit = $profit + $order->product->price;}?>
                      {{$profit}}
                    </strong></h5>
                    <span>Profit Today</span>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
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
                                <button class="btn btn-danger">Reject Order</button>
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
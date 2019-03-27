@extends('layouts.dashboard')
@section('title', 'Products')
@section('content')
<div class="graphs">
    <div class="span_11">
    <div class="xs">
          <h3>Product List</h3>
          @if(!$products->isEmpty())
          <div class="bs-example4" data-example-id="contextual-table">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($products as $key=>$product)
                    <?php $key = $key + 1?>
                    <tr>
                        <th scope="row">{{$key}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img class="img-fluid" src="{{headless_url($product->picture_url)}}" style="height: 30px !important; width: auto" alt="{{$product->name}}">
                        </td>
                        <td>${{$product->price}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-info" href="{{headless_url('admin/products/edit/'.$product->id)}}">
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="{{headless_url('admin/products/delete/'.$product->id)}}">
                                    Delete
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
            <h4>Product list empty</h4>
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

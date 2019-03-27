@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="graphs">
    <div class="xs">
        <h3>Create Product</h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{headless_url('admin/products/create')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Product name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" required name="name"
                                placeholder="Product name">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block">Product name</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-8">
                            <input type="number" min="10" class="form-control1" id="price" required name="price"
                                placeholder="Price">
                        </div>
                        <div class="col-sm-2">
                            <p class="help-block">Price in USD</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtarea1" class="col-sm-2 control-label">Product description</label>
                        <div class="col-sm-8">
                            <textarea name="description" id="txtarea1" cols="50" rows="8"
                                class="form-control1" required></textarea>
                        </div>
                    </div>

                    <div class="container" style="position: relative; left: 15%">
                        <div class="form-group">
                            <label for="product_image">Product Image</label>
                            <input type="file" id="product_image" name="product_image" required>
                            <p class="help-block">Upload an image of the product.</p>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-success btn">Add Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2019 Flower Central | All Rights Reserved.
            </p>
        </div>
    </div>
</div>
@stop

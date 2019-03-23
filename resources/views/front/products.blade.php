@extends('layouts.front')
@section('title', 'Homepage')
@section('content')
<!--/Blog-Posts-->
<section class="banner-bottom-w3layouts bg-light py-md-5 py-4" id="blog">
    @include('includes.front.menu')
    <div class="container">
        <div class="inner-sec-w3ls py-md-5 py-4">
            <!-- <h4 class="sub-tittle-w3layouts text-uppercase text-center">Recent Talks</h4> -->
            <h3 class="tittle-w3layouts text-center mb-md-5 mb-4">
                Products</h3>
            <!--/services-grids-->
            <div class="row blog-sec">
                @foreach($products as $product)
                <div class="col-lg-4 about-in blog-grid-info text-left" data-aos="fade-up">
                    <div class="card img">
                        <div class="card-body img">
                            <div class="product-image">
                                <img src="{{headless_url($product->picture_url)}}" alt="" class="img-fluid image">
                            </div>
                            <div class="blog-des">
                                <span class="entry-date"></span>
                                <h5 class="card-title text-uppercase mt-2"><a href="#" data-toggle="modal"
                                        data-target="#">{{$product->name}}</a></h5>
                                <p class="card-text">{{$product->description}}
                                </p>
                                <div class="btn-group">
                                    <a class="image-zoom" href="{{headless_url($product->picture_url)}}" data-gal="prettyPhoto[gallery]">
                                        <button class="btn btn-success">Open</button>
                                    </a>
                                    <button class="btn btn-info" disabled>
                                        <span class="price">${{$product->price}}</span>
                                    </button>
                                    <a href="{{headless_url('user/products/place-order/'.$product->id)}}">
                                        <button class="btn btn-warning">Order</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--//Blog-Posts-->
@stop
<!-- FooterScript -->
@section('footerscripts')
@stop

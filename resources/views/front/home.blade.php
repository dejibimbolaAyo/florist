@extends('layouts.front')
@section('title', 'Homepage')
@section('content')
<section id="ps-container" class="ps-container">
    <div class="ps-header">
        <div class="login-logo">
            <a href="{{ headless_url('/') }}"><img src="{{asset('assets/dashboard/images/logo.png')}}" alt="" /></a>
        </div>
    </div>
    <!-- /ps-header -->

    <div class="ps-contentwrapper">

        <div class="ps-content">
            <h3>Spice of love</h3>
            <span class="ps-price">$100</span>
            <p>Going at the Pace of a little elf, eventually, it Ignites the floral, nectar flow, crowned with a
                fragrant halo. tantalizing, Kisses of honey dew lay on its succulent pillow.</p>
        </div>

        <div class="ps-content">
            <h3>Cutest</h3>
            <span class="ps-price">$120</span>
            <p>Attired in pure natural innocence, you are ignorant of your enchanting aroma, unaware of thy Charm,
                dances freely with flirtious breeze</p>
        </div>

        <div class="ps-content">
            <h3>Packet of joy</h3>
            <span class="ps-price">$140</span>
            <p>A sign of beauty,a symbol of grace. Its pride runs strong at a very fast pace.</p>
        </div>

        <div class="ps-content">
            <h3>Flower vase</h3>
            <span class="ps-price">$195</span>
            <p>Of comfort and happiness, a flower feels like a friend, it listens to me and makes me feel loved!<br>
                When I am sad, the flowers are my help. They might just sit there but they speak a million words.
            </p>
        </div>

        <div class="ps-content">
            <h3>Royal love</h3>
            <span class="ps-price">$130</span>
            <p>Rambling down a cobbled pathway, I stumbled upon a wild rose, deep garnet red, velveteen petals each
                curled to perfection, luminescent and innocently pretty.
                <br>A coy damsel oblivious of her beauty, fading away unadored and unsung.</p>
            <!-- <a href="#" data-toggle="modal" data-target="#exampleModalCenter3"><i class="fas fa-long-arrow-alt-right"></i>
                Read More</a> -->
        </div>

    </div>
    <!-- /ps-contentwrapper -->

    <div class="ps-slidewrapper">
        <div class="ps-slides">
            <div style="background-image:url({{asset('assets/front/images/1.jpg')}});"></div>
            <div style="background-image:url({{asset('assets/front/images/2.jpg')}});"></div>
            <div style="background-image:url({{asset('assets/front/images/3.jpg')}});"></div>
            <div style="background-image:url({{asset('assets/front/images/4.jpg')}});"></div>
            <div style="background-image:url({{asset('assets/front/images/5.jpg')}});"></div>
        </div>
        <nav>
            <a href="#" class="ps-prev"></a>
            <a href="#" class="ps-next"></a>
        </nav>
    </div>
    <!-- include Menu here -->
    @include('includes.front.menu')
</section>
<!-- banner-bottom-w3layouts -->
<section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-4" id="about">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-3">
            <div class="row">
                <div class="col-lg-6 about-img" data-aos="fade-right">
                    <img class="img-fluid" src="{{asset('assets/front/images/6.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 about-right mt-lg-4" data-aos="fade-left">
                    <h4 class="sub-tittle-w3layouts">Flower central</h4>
                    <h3 class="tittle-w3layouts text-uppercase">Finding expression with nature.</h3>
                    <p class="my-4">We deliver the best of flowers to help you give visual expressions to the feelings
                        in your heart.</p>

                    <ul class="author d-flex">
                        <li><img class="img-fluid" src="{{asset('assets/front/images/logo.png')}}" style="height: 60px"
                                alt=""></li>
                        <li><span>John Dowe</span>Flower central</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-lg-5 stats-con">
                <div class="col-sm-3 col-6 stats_info counter_grid" data-aos="fade-up">

                    <i class="far fa-lightbulb"></i>
                    <p class="counter">645</p>
                    <h4>Projects Done</h4>

                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid1" data-aos="fade-up">

                    <i class="far fa-heart"></i>
                    <p class="counter">563</p>
                    <h4>Satisfied Clients</h4>

                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid" data-aos="fade-up">

                    <i class="fas fa-magic"></i>
                    <p class="counter">1145</p>
                    <h4>Awards</h4>

                </div>
                <div class="col-sm-3 col-6 stats_info counter_grid2" data-aos="fade-up">

                    <i class="far fa-smile"></i>
                    <p class="counter">1045</p>
                    <h4>Happy Clients</h4>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- //banner-bottom-w3layouts -->
@stop
<!-- FooterScript -->
@section('footerscripts')
@stop
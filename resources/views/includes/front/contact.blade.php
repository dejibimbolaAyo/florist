<!-- contact -->
<section class="banner-bottom-w3layouts py-md-5 py-4" id="contact">
    <div class="container">
        <div class="inner-sec-w3ls py-md-5 py-4">
            <div class="row blog-sec con">
                <div class="col-lg-4" data-aos="fade-right">
                    <h3 class="tittle-w3layouts mb-md-5 mb-4">Contact Us</h3>
                    <p class="mb-3">Would you like to get in touch with us and get expert suggestion on what flower fits your particular occassion?
                    </p>
                    <img src="{{asset('assets/front/images/contact.jpg')}}" class="img-fluid" alt="" />
                </div>
                <div class="offset-2"></div>
                <div class="col-lg-6 mt-lg-0 mt-5" data-aos="fade-left">
                    <!-- register form grid -->
                    <div class="register-top1">
                        <form action="{{headless_url('contact')}}" method="post" class="register-contact">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            <span class="fas fa-user"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-5">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="First name" name="first_name"
                                            required="true">
                                    </div>
                                    <div class="col-md-5">
                                        <label>
                                            Last name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Last name" name="last_name"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            <span class="fas fa-envelope-open"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@email.com" name="email"
                                            required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 d-md-flex align-items-end justify-content-end px-md-0">
                                        <label class="mb-0">
                                            <span class="far fa-edit"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Type your message here" class="form-control" required name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-lg-5 mt-3">
                                <div class="offset-2"></div>
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-object btn-block w-100">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--  //register form grid ends here -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact -->

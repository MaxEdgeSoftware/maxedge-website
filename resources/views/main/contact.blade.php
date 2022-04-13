@extends("layouts.app")

@section("titleSection")
<title> Contact Us - {{ config('app.name', 'Laravel') }}</title>
@endSection("titleSection")

@section('nav')

<div class="theme-main-menu sticky-menu theme-menu-five">
    <div class="d-flex align-items-center justify-content-center">
        <div class="logo"><a href="/"><img src="/assets/images/logo.png" alt=""></a></div>

        <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="flaticon-menu-of-three-lines"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <ul class="navbar-nav main-side-nav font-gordita" id="one-page-nav">

                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="whyus" class="nav-link">Why Us</a>
                            </li>

                            <li class="nav-item">
                                <a href="contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="right-widget">
            <ul class="d-flex align-items-center">
                <li>
                    <a href="login" class="signIn-action d-flex align-items-center">
                        <img src="/assets/images/icon/52.svg" alt="">
                        <span>login</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div> <!-- /.theme-main-menu -->

@endSection("nav")


@section("mainSection")

<!-- 
        =============================================
            Fancy Hero One
        ============================================== 
        -->
<div class="fancy-hero-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-11 m-auto">
                <div class="page-title">Contact us</div>
                <h2 class="font-rubik">Feel free to contact us or just say hi!</h2>
            </div>
        </div>
    </div>
    <div class="bubble-one"></div>
    <div class="bubble-two"></div>
    <div class="bubble-three"></div>
    <div class="bubble-four"></div>
    <div class="bubble-five"></div>
    <div class="bubble-six"></div>
</div> <!-- /.fancy-hero-one -->



<!-- 
        =============================================
            Contact Us Light
        ============================================== 
        -->
<div class="contact-us-light pt-140 pb-200 md-pt-90 md-pb-80">
    <div class="bubble-one"></div>
    <div class="bubble-two"></div>
    <div class="bubble-three"></div>
    <div class="bubble-four"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="/assets/images/icon/15.svg" alt=""></div>
                    <div class="title">Location</div>
                    <p class="font-rubik"> EC3N 4EE 1 TOWER HILL TERRACE, LONDON, UK<br> </p>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="/assets/images/icon/16.svg" alt=""></div>
                    <div class="title">Contact</div>
                    <p class="font-rubik">hello@maxedge.co.uk <br>(+44) 742 534 9313</p>
                </div> <!-- /.address-info -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="address-info">
                    <div class="icon"><img src="/assets/images/icon/17.svg" alt=""></div>
                    <div class="title">Social Media</div>
                    <p class="font-rubik">Follow on social media</p>
                    <ul class="d-flex justify-content-center">
                        <li><a href="maxedge.html"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div> <!-- /.address-info -->
            </div>
        </div>

        <!-- <div class="form-style-light">
                    <form action="#" id="contact-form" data-toggle="validator" novalidate="true">
                        <div class="messages"></div>
                        <div class="row controls">
                            <div class="col-md-6">
                                <div class="input-group-meta form-group mb-35">
                                    <label>First Name</label>
                                    <input type="text" placeholder="Mitchell" name="Fname" required="required" data-error="Name is required.">
                                    <span class="placeholder_icon valid-sign"><img src="/assets/images/icon/18.svg" alt=""></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group-meta form-group mb-35">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="John" name="Lname" required="required" data-error="Name is required.">
                                    <span class="placeholder_icon valid-sign"><img src="/assets/images/icon/18.svg" alt=""></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-35">
                                    <label>Your Email</label>
                                    <input type="email" placeholder="james@gmail.com" name="email" required="required" data-error="Valid email is required.">
                                    <span class="placeholder_icon valid-sign"><img src="/assets/images/icon/18.svg" alt=""></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group lg mb-35">
                                    <label>Your Message</label>
                                    <textarea placeholder="Write your message here..." name="message" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12"><button class="theme-btn-one btn-lg">Send Message</button></div>
                        </div>
                    </form>
                </div>  -->
    </div>
</div> <!-- /.contact-us-light -->



@endSection("mainSection")
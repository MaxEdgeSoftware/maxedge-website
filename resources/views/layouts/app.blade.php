<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield("titleSection")
    <meta charset="UTF-8">
    <meta property="og:site_name" content="deski">

    <meta property="og:type" content="website">

    <meta name='og:image' content='images/logo.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2a2a2a">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2a2a2a">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2a2a2a">
    <title>maxedge</title>
    <!-- Favicon -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" type="image/png" sizes="56x56" href="images/logo.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    @yield("styleSection")
    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script src="/assets/vendor/html5shiv.js"></script>
                <script src="/assets/vendor/respond.js"></script>
            <![endif]-->
</head>
<!-- <script type="text/javascript">
            function zoom() {
                document.body.style.zoom = "80%" 
            }
        </script> -->


<body data-spy="scroll" data-target="#one-page-nav" data-offset="120">
    <div id="app">

        <div class="main-page-wrapper font-gordita">
            <!-- ===================================================
				Loading Transition
	==================================================== -->


            @yield("nav")
            @yield("mainSection")


            <!--
                =====================================================
                    Footer Style Seven
                =====================================================
                -->
            <div class="footer-bg-wrapper" style="padding-top: 100px;">
                <div class="bubble-one"></div>
                <div class="bubble-two"></div>
                <div class="bubble-three"></div>
                <div class="fancy-short-banner-two">
                    <div class="container">
                        <div class="content-wrapper">
                            <div class="bg-wrapper d-lg-flex align-items-center justify-content-between">
                                <h2 class="font-gilroy-bold">Don’t find the answer? contact us for any query.</h2>
                                <a href="contact">Contact us</a>
                                <div class="bubble-one"></div>
                                <div class="bubble-two"></div>
                                <div class="bubble-three"></div>
                                <div class="bubble-four"></div>
                                <div class="bubble-five"></div>
                            </div> <!-- /.bg-wrapper -->
                        </div> <!-- /.content-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.fancy-short-banner-two -->
                <footer class="theme-footer-one pt-130 md-pt-70">
                    <div class="top-footer">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-3 col-md-12 footer-about-widget aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                                    <a href="/" class="logo"><img src="images/logo.png" alt=""></a>
                                </div> <!-- /.about-widget -->
                                <div class="col-lg-3 col-md-4 footer-list aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="50">
                                    <h5 class="footer-title">Links</h5>
                                    <ul>
                                        <li><a href="whyus">Why Us </a></li>
                                        <li><a href="website">Web Design</a></li>
                                        <li><a href="mobile">Mobile App</a></li>

                                        <li><a href="datascience">Data Science</a></li>

                                    </ul>
                                </div> <!-- /.footer-list -->
                                <div class="col-lg-3 col-md-4 footer-list aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">

                                </div> <!-- /.footer-list -->
                                <div class="col-lg-3 col-md-4 address-list aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                                    <h5 class="footer-title">Address</h5>
                                    <ul>
                                        <li><a href="mailto:hello@maxedge.co.uk">hello@maxedge.co.uk</a></li>
                                        <li><a href="tel:+447425349313" class="mobile-num">+447425349313</a></li>

                                    </ul>
                                </div> <!-- /.footer-list -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->
                    </div> <!-- /.top-footer -->

                    <div class="container">
                        <div class="bottom-footer-content">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <ul class="order-sm-last aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="100" data-aos-anchor=".theme-footer-one">
                                    <li><a href="privacy">Privacy Policy</a></li>


                                </ul>
                                <p class="order-sm-first aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="100" data-aos-anchor=".theme-footer-one">Copyright @ {{ date('Y') }} maxedge LLC.</p>
                            </div>
                        </div> <!-- /.bottom-footer -->
                    </div>
                </footer> <!-- /.theme-footer-one -->
            </div>
            <!-- /.theme-footer-seven -->




            <!-- Scroll Top Button -->
            <button class="scroll-top">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>
        </div>
        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="/assets/vendor/jquery.min.js"></script>
        <!-- Popper js -->
        <script src="/assets/vendor/popper.js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- menu  -->
        <script src="/assets/vendor/mega-menu/assets/js/custom.js"></script>
        <!-- AOS js -->
        <script src="/assets/vendor/aos-next/dist/aos.js"></script>
        <!-- js count to -->
        <script src="/assets/vendor/jquery.appear.js"></script>
        <script src="/assets/vendor/jquery.countTo.js"></script>
        <!-- Slick Slider -->
        <script src="/assets/vendor/slick/slick.min.js"></script>
        <!-- Fancybox -->
        <script src="/assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

        <!-- Theme js -->
        <script src="/assets/js/theme.js"></script>
    </div> <!-- /.main-page-wrapper -->
    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='#';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script> -->
    <!--Start of Tawk.to Script-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = '#';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
</body>

</html>
@extends("layouts.app")



@section("titleSection")
<title> Mobile Application - {{ config('app.name', 'Laravel') }}</title>
@endSection("titleSection")

@section("nav")

<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
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
					<a href="#" class="signIn-action d-flex align-items-center">
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
				Theme Hero Banner
			============================================== 
			-->
<div class="hero-banner-ten">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-11 col-md-8 m-auto">
				<h1 class="hero-heading">We are Experts in App Developement</h1>
				<p class="hero-sub-heading">Creating seamless and intuitive mobile applications that offer the best user experience is what our team of mobile app development professionals at maxedge, We design & develop all kinds of mobile apps for iOS, Android, etc. depending on your business and end-user requirements.

				</p>
			</div>
		</div>

	</div>
	<div class="icon-box-one"><img src="/assets/images/logo/logo-39.png" alt=""></div>
	<div class="icon-box-two"><img src="/assets/images/logo/logo-40.png" alt=""></div>
	<div class="icon-box-three"><img src="/assets/images/logo/logo-41.png" alt=""></div>
	<div class="icon-box-four"><img src="/assets/images/logo/logo-42.png" alt=""></div>
	<div class="icon-box-five"><img src="/assets/images/logo/logo-43.png" alt=""></div>
	<div class="icon-box-six"><img src="/assets/images/logo/logo-44.png" alt=""></div>
	<div class="icon-box-seven"><img src="/assets/images/logo/logo-45.png" alt=""></div>
	<div class="icon-box-eight"><img src="/assets/images/logo/logo-46.png" alt=""></div>
</div> <!-- /.hero-banner-ten -->



<!-- 
			=============================================
				App Screen Preview
			============================================== 
			-->
<div class="app-screen-preview-one">
	<div class="container">
		<div class="app-preview-slider-one">
			<div class="item">
				<div class="img-holder"><img src="/assets/images/assets/screen_21.png" alt=""></div>
			</div>
			<div class="item">
				<div class="img-holder"><img src="/assets/images/assets/screen_22.png" alt=""></div>
			</div>
			<div class="item">
				<div class="img-holder"><img src="/assets/images/assets/screen_23.png" alt=""></div>
			</div>
			<div class="item">
				<div class="img-holder"><img src="/assets/images/assets/screen_22.png" alt=""></div>
			</div>
		</div>
	</div>
	<img src="/assets/images/shape/bg5.svg" alt="" class="shapes round-bg">
	<img src="/assets/images/shape/216.svg" alt="" class="shapes shape-one">
	<img src="/assets/images/shape/217.svg" alt="" class="shapes shape-two">
	<img src="/assets/images/shape/218.svg" alt="" class="shapes shape-three">
	<img src="/assets/images/shape/219.svg" alt="" class="shapes shape-four">
</div> <!-- /.app-screen-preview-one -->



<!-- 
			=============================================
				Fancy Feature Twenty Two
			============================================== 
			-->


<!-- 
			=============================================
				Fancy Feature Twenty Five
			============================================== 
			-->
<div class="fancy-feature-twentyFive lg-container mt-200 md-mt-100" id="feature">
	<div class="container">
		<div class="block-style-twentyFive">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-6 col-md-10 m-auto" data-aos="fade-right" data-aos-duration="1200">
					<div class="screen-container">
						<img src="/assets/images/assets/screen_24.png" alt="">
					</div> <!-- /.screen-container -->
				</div>
				<div class="col-xl-5 col-lg-6" data-aos="fade-left" data-aos-duration="1200">
					<div class="text-wrapper pl-xl-5">
						<h6>Over <span>150,000+ Users</span></h6>
						<h3 class="title">Mentior, Our winning application.</h3>
						<p>A super awesome application, for one of our client who is into mentorship business </p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div> <!-- /.block-style-twentyFive -->

	</div>
</div> <!-- /.fancy-feature-twentyFive -->



<!-- 
			=============================================
				App Screen Preview
			============================================== 
			-->
<div class="app-screen-preview-two mt-200 md-mt-130" style="margin-bottom: 200px">
	<div class="container">
		<div class="title-style-eleven text-center mb-120 md-mb-70">
			<h2>Other App Screenshot</h2>
		</div>
	</div>

	<div class="app-preview-slider-two">
		<div class="item">
			<div class="img-holder"><img src="/assets/images/assets/screen_25.png" alt=""></div>
		</div>
		<div class="item">
			<div class="img-holder"><img src="/assets/images/assets/screen_26.png" alt=""></div>
		</div>
		<div class="item">
			<div class="img-holder"><img src="/assets/images/assets/screen_27.png" alt=""></div>
		</div>
		<div class="item">
			<div class="img-holder"><img src="/assets/images/assets/screen_28.png" alt=""></div>
		</div>
		<div class="item">
			<div class="img-holder"><img src="/assets/images/assets/screen_29.png" alt=""></div>
		</div>
		<div class="item">
			<div class="img-holder"><img src="/assets/images/assets/screen_27.png" alt=""></div>
		</div>
	</div> <!-- /.app-preview-slider-two -->
</div> <!-- /.app-screen-preview-two -->



<!--
			=====================================================
				Pricing Section Seven
			=====================================================
			-->

<!--
			=====================================================
				Client Feedback Slider Seven
			=====================================================
			-->



<!--
			=====================================================
				Useable Tools
			=====================================================
			-->

@endSection("mainSection")
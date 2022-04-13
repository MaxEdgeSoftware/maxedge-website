@extends("layouts.app")

@section("titleSection")
<title> DataScience - {{ config('app.name', 'Laravel') }}</title>
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
				Theme Hero Banner
			============================================== 
			-->
<div class="hero-banner-eleven lg-container">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-6">
				<div class="hero-text-wrapper">
					<h1>Looking <br> for
						<span>
							Data Scientist
							<img src="/assets/images/shape/line-shape-12.svg" alt="" class="cs-screen">
						</span>

					</h1>
					<p class="hero-sub-heading"> We help and inspire clients to transform their businesses and excel in the digital world by harnessing the power of data and analytics, Our team of Data engineers are ready to serve </p>

				</div> <!-- /.hero-text-wrapper -->
			</div>
			<div class="illustration-container">
				<img src="/assets/images/ndts.jpeg" alt="">
			</div>
		</div>
	</div>

</div> <!-- /.hero-banner-eleven -->




<!-- 
			=============================================
				Fancy Feature Twenty Six
			============================================== 
			-->
<div class="fancy-feature-twentySix lg-container pt-160 md-pt-100">
	<div class="container">
		<div class="row">
			<div class="col-md-6" data-aos="fade-right">
				<div class="block-style-twentySix text-center mb-40" style="background:#E8FBFF;">
					<h6 style="color:#8BBDC8;">Data Science</h6>


					<img src="/assets/images/shape/222.jpg" alt="" class="shapes shape-one">
					<img src="/assets/images/shape/223.jpg" alt="" class="shapes shape-two">
				</div> <!-- /.block-style-twentySix -->
			</div>
			<div class="col-md-6" data-aos="fade-left">
				<div class="block-style-twentySix text-center mb-40" style="background:#FFEFE7;">
					<h6 style="color:#DCAC91;">Data Engineering</h6>


					<img src="/assets/images/shape/224.jpg" alt="" class="shapes shape-one">
					<img src="/assets/images/shape/225.jpg" alt="" class="shapes shape-two">
				</div> <!-- /.block-style-twentySix -->
			</div>
		</div>
	</div>
</div> <!-- /.fancy-feature-twentySix -->



<!-- 
			=============================================
				Fancy Feature Twenty Seven
			============================================== 
			-->
<div class="fancy-feature-twentySeven lg-container mt-100 pt-20 md-mt-60" id="product">
	<div class="container">
		<div class="title-style-twelve text-center mb-70 md-mb-20">
			<div class="row">
				<div class="col-xl-10 col-lg-11 m-auto">
					<div class="upper-title">maxedge</div>
					<h2>
						<span>We are trusted by Over 200 Companies <img src="/assets/images/shape/line-shape-13.svg" alt=""></span>
					</h2>
					<p class="mt-40 md-mt-30">We empower organizations to serve their customers better by helping them move up the analytics maturity curve through actionable insights that lead to data-driven decisions.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-sm-6" data-aos="fade-up">
				<div class="block-style-twentySeven">
					<div class="icon d-flex align-items-end justify-content-center"><img src="/assets/images/icon/144.svg" alt=""></div>
					<h4 class="font-gordita">Data Minning</h4>

				</div> <!-- /.block-style-twentySeven -->
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
				<div class="block-style-twentySeven">
					<div class="icon d-flex align-items-end justify-content-center"><img src="/assets/images/icon/145.svg" alt=""></div>
					<h4 class="font-gordita">Data Analysis</h4>

				</div> <!-- /.block-style-twentySeven -->
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
				<div class="block-style-twentySeven">
					<div class="icon d-flex align-items-end justify-content-center"><img src="/assets/images/icon/146.svg" alt=""></div>
					<h4 class="font-gordita">BI</h4>

				</div> <!-- /.block-style-twentySeven -->
			</div>
			<div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
				<div class="block-style-twentySeven">
					<div class="icon d-flex align-items-end justify-content-center"><img src="/assets/images/icon/147.svg" alt=""></div>
					<h4 class="font-gordita">Big Data</h4>

				</div> <!-- /.block-style-twentySeven -->
			</div>
		</div>
	</div>
</div> <!-- /.fancy-feature-twentySeven -->



<!-- 
			=============================================
				Video Box Two
			============================================== 
			-->

<!--
			=====================================================
				Fancy Text block Twenty Three
			=====================================================
			-->

<!--
			=====================================================
				Pricing Section Eight
			=====================================================
			-->


@endSection("mainSection")
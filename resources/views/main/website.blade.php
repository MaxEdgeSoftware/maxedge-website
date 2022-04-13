@extends("layouts.app")


@section("titleSection")
<title> Website - {{ config('app.name', 'Laravel') }}</title>
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
								<a href="Services" class="nav-link">Services</a>
							</li>
							<li class="nav-item">
								<a href="whyus" class="nav-link">Why Us </a>
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
</div>
<!-- /.theme-main-menu -->

@endSection("nav")




@section("mainSection")

<!-- 
=============================================
	Fancy Feature Seven
============================================== 
-->
<div class="fancy-feature-seven">
	<div class="container">
		<div class="title-style-two text-center mb-150 md-mb-70">
			<p>maxedge</p>
			<h2>Web Application Developement

				<span>maxedge <img src="/assets/images/shape/line-shape-8.svg" alt=""></span> is the leading Company.
				<p class="hero-sub-heading"> Have an idea for an app but no idea where to start? Look no further!
					maxedge can help you design, develop, and implement the perfect application!</p>
			</h2>
		</div> <!-- /.title-style-two -->

		<div class="block-wrapper">
			<div class="block-style-nine">
				<div class="row align-items-center">
					<div class="col-lg-7 col-md-9 m-auto" data-aos="fade-right" data-aos-duration="1200">
						<div class="illustration-holder">
							<img src="/assets/images/collab.png" alt="">
						</div> <!-- /.illustration-holder -->
					</div>
					<div class="col-lg-5" data-aos="fade-left" data-aos-duration="1200">
						<div class="text-wrapper">
							<h6>Colla-Bay</h6>
							<h3 class="title font-gilroy-bold">Provided Smater ways to collaborate.</h3>
							<p class="font-rubik">We implemented Smarter ways for teams to collaborate seamlessly</p>
						</div> <!-- /.text-wrapper -->
					</div>
				</div>
			</div> <!-- /.block-style-nine -->

			<div class="block-style-nine">
				<div class="row align-items-center">
					<div class="col-lg-7 col-md-9 m-auto order-lg-last" data-aos="fade-left" data-aos-duration="1200">
						<div class="illustration-holder">
							<img src="/assets/images/collab2.png" alt="">
						</div> <!-- /.illustration-holder -->
					</div>
					<div class="col-lg-5 order-lg-first" data-aos="fade-right" data-aos-duration="1200">
						<div class="text-wrapper">
							<h6>Kod-Helper</h6>
							<h3 class="title font-gilroy-bold">We have implemented a Virtual engagement for Developers.</h3>
							<p class="font-rubik">In a world where we have lots of issues while debugging especially , Now you can get help easily with the web app.</p>
						</div> <!-- /.text-wrapper -->
					</div>
				</div>
			</div> <!-- /.block-style-nine -->

			<div class="block-style-nine">
				<div class="row align-items-center">
					<div class="col-lg-7 col-md-9 m-auto" data-aos="fade-right" data-aos-duration="1200">
						<div class="illustration-holder">
							<img src="/assets/images/collab3.png" alt="">
						</div> <!-- /.illustration-holder -->
					</div>
					<div class="col-lg-5" data-aos="fade-left" data-aos-duration="1200">
						<div class="text-wrapper">
							<h6>Celler-X</h6>
							<h3 class="title font-gilroy-bold">A business intelligence Solution.</h3>
							<p class="font-rubik">Now with awesome data analysis tool at your finger tip you can easily grow your sales</p>
						</div> <!-- /.text-wrapper -->
					</div>
				</div>
			</div> <!-- /.block-style-nine -->

			<div class="block-style-nine">
				<div class="row align-items-center">
					<div class="col-lg-7 col-md-9 m-auto order-lg-last" data-aos="fade-left" data-aos-duration="1200">
						<div class="illustration-holder">
							<img src="/assets/images/collab4.png" alt="">
						</div> <!-- /.illustration-holder -->
					</div>
					<div class="col-lg-5 order-lg-first" data-aos="fade-right" data-aos-duration="1200">
						<div class="text-wrapper">
							<h6>Orgaani</h6>
							<h3 class="title font-gilroy-bold">Team Organizing Made Easy</h3>
							<p class="font-rubik">We implemented high end solution for team organizing </p>
						</div> <!-- /.text-wrapper -->
					</div>
				</div>
			</div> <!-- /.block-style-nine -->
		</div>
	</div>
</div> <!-- /.fancy-feature-seven -->


<!--
			=====================================================
				Fancy Text Block Thirteen
			=====================================================
			-->
<div class="fancy-text-block-thirteen pt-140 md-pt-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 order-lg-last" data-aos="fade-left" data-aos-duration="1200">
				<div class="text-wrapper">
					<div class="title-style-two">
						<h2>We Build secure App.</h2>
					</div> <!-- /.title-style-two -->
					<p>Our dashboard is served over SSL which means you can be sure that all data transferred is secure.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 m-auto order-lg-first" data-aos="fade-right" data-aos-duration="1200">
				<img src="/assets/images/assets/feature-img-11.png" alt="">
			</div>
		</div>
	</div>
</div> <!-- /.fancy-text-block-thirteen -->



@endSection("mainSection")
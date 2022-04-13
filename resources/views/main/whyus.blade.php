@extends("layouts.app")

@section("titleSection")
<title> Why Us - {{ config('app.name', 'Laravel') }}</title>
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

<div class="fancy-text-block-twenty">

	<div class="container">
		<div class="row">
			<div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
				<div class="client-info font-rubik">Over <span>150,000+ client</span></div>
				<div class="title-style-five">
					<h2><span>Your Trusted</span><br> Technology Partner</h2>
				</div>
			</div>
			<div class="col-lg-6 ml-auto" data-aos="fade-left" data-aos-duration="1200">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs md-mt-50">

					<li class="nav-item">
						<a class="nav-link font-slab" data-toggle="tab" href="#our-mission">Our Mission </a>
					</li>
					<li class="nav-item">
						<a class="nav-link font-slab" data-toggle="tab" href="#our-vision">Our Vision</a>
					</li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content mt-20">

					<div class="tab-pane fade active" id="our-mission">
						<p class="font-rubik">To enable people and businesses throughout the ideas come life</p>
					</div>
					<div class="tab-pane fade" id="our-vision">
						<p class="font-rubik">Bringing the business back to esprit with our software strategy.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.fancy-text-block-twenty -->


<div class="fancy-text-block-four pt-130 pb-120 md-pt-100 md-pb-80">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-8">
				<div class="title-style-one mb-40 md-mb-20">
					<h2>Our Approaches Simplifies the Developement and maintainance of your Next Project</h2>

				</div> <!-- /.title-style-one -->
			</div>
		</div>

		<div class="wrapper">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-three">
						<div class="icon"><img src="/assets/images/icon/09.svg" alt=""></div>
						<h4>Flexible Project management and Dev</h4>
						<p class="font-rubik">Our project management put our development right in front of you in real time </p>
					</div> <!-- /.block-style-three -->
				</div>
				<div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-three">
						<div class="icon"><img src="/assets/images/icon/10.svg" alt=""></div>
						<h4>Customer Support</h4>
						<p class="font-rubik">We have 24/7 Customer support during projects and after project.</p>
					</div> <!-- /.block-style-three -->
				</div>

			</div>
		</div>
	</div>
</div>


<div class="fancy-text-block-five pt-130 pb-160 md-pt-100 md-pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 ml-auto">
				<div class="title-style-one mb-50 md-mb-30">
					<h2>We do exceptionally well in all kind of requirements</h2>

				</div> <!-- /.title-style-one -->
			</div>
		</div>

		<div class="wrapper">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-four">
						<div class="icon"><img src="/assets/images/icon/12.svg" alt=""></div>
						<h4>Media &amp; Hospital</h4>
						<!-- <p class="font-rubik">Lorem ipsum dolor amet, consetre adipiscing elit, sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim </p>
									<a href="#"><i class="flaticon-right-arrow"></i></a> -->
					</div> <!-- /.block-style-four -->
				</div>
				<div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-four">
						<div class="icon"><img src="/assets/images/icon/13.svg" alt=""></div>
						<h4>Ai Educational System</h4>
						<!-- <p class="font-rubik">Lorem ipsum dolor amet, consetre adipiscing elit, sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim </p>
									<a href="#"><i class="flaticon-right-arrow"></i></a> -->
					</div> <!-- /.block-style-four -->
				</div>
				<div class="col-lg-4 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-four">
						<div class="icon"><img src="/assets/images/icon/14.svg" alt=""></div>
						<h4>Financial Applications</h4>
						<!-- <p class="font-rubik">Lorem ipsum dolor amet, consetre adipiscing elit, sed do eiusmod tempor incididunt ut labore et dole magna aliqua. Ut enim </p>
									<a href="#"><i class="flaticon-right-arrow"></i></a> -->
					</div> <!-- /.block-style-four -->
				</div>
			</div>
		</div>
	</div>
</div>
@endSection("mainSection")
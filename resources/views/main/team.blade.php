@extends("layouts.app")

@section("titleSection")
<title> Team - {{ config('app.name', 'Laravel') }}</title>
@endSection("titleSection")
@section("nav")
<!-- 
=============================================
	Theme Main Menu
============================================== 
-->
<div class="theme-main-menu sticky-menu theme-menu-five">
	<div class="d-flex align-items-center justify-content-center">
		<div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></div>

		<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
			<div class="container nav-container">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="flaticon-menu-of-three-lines"></i>
				</button>
				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					<div class="d-lg-flex justify-content-between align-items-center">
						<ul class="navbar-nav main-side-nav font-gordita" id="one-page-nav">

							<li class="nav-item">
								<a href="index.html" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="whyus.html" class="nav-link">Why Us</a>
							</li>

							<li class="nav-item">
								<a href="contact.html" class="nav-link">Contact</a>
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
						<img src="assets/images/icon/52.svg" alt="">
						<span>login</span>
					</a>
				</li>

			</ul>
		</div>
	</div>
</div> <!-- /.theme-main-menu -->
@endSection("nav")




@section("mainSection")
<div class="fancy-hero-one">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-11 m-auto">
				<h2 class="font-rubik">We’ve Most Talented Team Members</h2>
			</div>

		</div>
	</div>
	<div class="bubble-one"></div>
	<div class="bubble-two"></div>
	<div class="bubble-three"></div>
	<div class="bubble-four"></div>
	<div class="bubble-five"></div>
	<div class="bubble-six"></div>
</div>

<div class="team-section-one">
	<div class="container">
		<div class="controls mb-100 md-mb-60">
			<button type="button" class="control mixitup-control-active" data-filter="all">All</button>
			<button type="button" class="control" data-filter=".leadership">Leadership</button>
			<button type="button" class="control" data-filter=".designer">Designer</button>
			<button type="button" class="control" data-filter=".developer">Developer</button>
			<button type="button" class="control" data-filter=".marketing">Marketing</button>
		</div>

		<div class="mixitUp-container" id="MixItUp5FCCF5">
			<div class="mix designer developer">
				<div class="team-member">
					<img src="assets/images/media/img_07.png" alt="">
					<h4>Maurice Craig</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix leadership marketing">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_08.png" alt="">
					<h4>Duane Cain</h4>
					<strong>Senior Product Desogner</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix developer marketing">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_09.png" alt="">
					<h4>Viola George</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix leadership marketing">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_10.png" alt="">
					<h4>Maurice Craig</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->

			<div class="mix designer marketing">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_11.png" alt="">
					<h4>Nina Walters</h4>
					<strong>Senior Product Desogner</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix developer marketing">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_12.png" alt="">
					<h4>Nathaniel Burke</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix leadership developer">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_13.png" alt="">
					<h4>Maurice Craig</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix marketing leadership">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_14.png" alt="">
					<h4>Viola George</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->

			<div class="mix designer leadership">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_15.png" alt="">
					<h4>Viola George</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix leadership marketing">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_16.png" alt="">
					<h4>Viola George</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix developer designer">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_17.png" alt="">
					<h4>Viola George</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->
			<div class="mix designer">
				<!-- onclick="location.href='team-single.html';" -->
				<div class="team-member">
					<img src="assets/images/media/img_18.png" alt="">
					<h4>Viola George</h4>
					<strong>Co-Founder</strong>
				</div> <!-- /.team-member -->
			</div> <!-- /.mix -->

			<div class="gap"></div>
			<div class="gap"></div>
			<div class="gap"></div>
		</div> <!-- /.mixitUp-container -->
	</div>
</div>
<div class="fancy-short-banner-eleven bg-color mt-70 mb-50 md-mb-20 md-mt-30">
	<div class="container">
		<div class="clearfix">
			<div class="row">
				<div class="col-lg-8 m-auto">
					<h2 class="font-rubik aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">Convinced yet about Our Strenght?</h2>
					<a href="contact.html" class="theme-btn-one btn-lg mt-50 md-mt-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">Like to Work with Us</a>
				</div>
			</div>
		</div>
	</div>
	<div class="bubble-one"></div>
	<div class="bubble-two"></div>
	<div class="bubble-three"></div>
	<div class="bubble-four"></div>
	<img src="assets/images/shape/212.svg" alt="" class="shapes shape-one">
	<img src="assets/images/shape/213.svg" alt="" class="shapes shape-two">
</div>

@endSection("mainSection")
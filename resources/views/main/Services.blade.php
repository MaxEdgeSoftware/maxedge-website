@extends("layouts.app")



@section("titleSection")
<title> Services - {{ config('app.name', 'Laravel') }}</title>
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



@section('mainSection')
<!-- 
			=============================================
				Fancy Hero Three
			============================================== 
			-->
<div class="fancy-hero-three">
	<div class="shapes shape-one"></div>
	<div class="shapes shape-two"></div>
	<div class="shapes shape-three"></div>
	<div class="shapes shape-four"></div>
	<div class="shapes shape-five"></div>
	<div class="shapes shape-six"></div>
	<div class="bg-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-10 m-auto">
					<h1 class="heading">Our Services</h1>
					<p class="sub-heading">deski helps teams of all sizes get better at delivering effortless customer</p>
				</div>
			</div>
		</div>
	</div> <!-- /.bg-wrapper -->
</div> <!-- /.fancy-hero-three -->



<!-- 
			=============================================
				Fancy Text block Eleven
			============================================== 
			-->
<div class="fancy-text-block-eleven mt-200 md-mt-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 order-lg-last">
				<div class="text-wrapper pt-0">
					<div class="title-style-two mb-35 md-mb-20">
						<h2><span>Service we offer is <img src="/assets/images/shape/line-shape-5.svg" alt=""></span>
							specifically designed to meet your needs.
						</h2>
					</div> <!-- /.title-style-two -->
					<p>With Benefits from deski Pro, Earn rewards & Score discounts on purchases* Foryourself and your customers.</p>
				</div>
			</div>
			<div class="col-lg-6 order-lg-first">
				<div class="video-box">
					<img src="/assets/images/media/img_106.png" alt="">
					<a data-fancybox="" href="../../embed/aXFSJTjVjw0.html" class="fancybox video-button d-flex align-items-center justify-content-center"><img src="/assets/images/icon/170.svg" alt=""></a>
				</div> <!-- /.video-box -->
			</div>
		</div>
	</div>

	<div class="mt-70">
		<div class="container" style="display: none">
			<div class="row">
				<div class="col-lg-4">
					<div class="block-style-thirtyThree pr-lg-5 mt-40">
						<div class="icon"><img src="/assets/images/icon/171.svg" alt=""></div>
						<h3 class="title"><span>Daily Updates</span></h3>
						<p>Elit esse cillum dolore eu fugiat nulla pariatur lorem elit</p>
					</div> <!-- /.block-style-thirtyThree -->
				</div>
				<div class="col-lg-4">
					<div class="block-style-thirtyThree pr-lg-5 mt-40">
						<div class="icon"><img src="/assets/images/icon/172.svg" alt=""></div>
						<h3 class="title"><span>Easy Cutomization</span></h3>
						<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
					</div> <!-- /.block-style-thirtyThree -->
				</div>
				<div class="col-lg-4">
					<div class="block-style-thirtyThree pl-lg-5 mt-40">
						<div class="icon"><img src="/assets/images/icon/173.svg" alt=""></div>
						<h3 class="title"><span>Fast Support</span></h3>
						<p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
					</div> <!-- /.block-style-thirtyThree -->
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.fancy-text-block-eleven -->




<!-- 
			=============================================
				Fancy Feature Six
			============================================== 
			-->
<div class="fancy-feature-six mt-140 md-mt-90">
	<div class="bg-wrapper">
		<div class="shapes shape-one"></div>
		<div class="shapes shape-two"></div>
		<div class="shapes shape-three"></div>
		<div class="shapes shape-four"></div>
		<div class="shapes shape-five"></div>
		<img src="/assets/images/shape/51.svg" alt="" class="shapes shape-six">
		<div class="container">
			<div class="title-style-two text-center mb-85 md-mb-40">
				<h2>
					<span>Explore Services<img src="/assets/images/shape/line-shape-2.svg" alt=""></span>
				</h2>
				<div class="sub-text mt-15">Get to know all deski features, that are part of the complex multi-channel</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-five" onclick="location.href='service-detailsV1.html';">
						<div class="icon"><img src="/assets/images/icon/20.svg" alt=""></div>
						<h6 class="title"><span>Smart popups</span></h6>
						<p>Create customized popups and show the right message at the right time. lorem dummy.</p>
					</div> <!-- /.block-style-five -->
				</div>
				<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
					<div class="block-style-five" onclick="location.href='service-detailsV1.html';">
						<div class="icon"><img src="/assets/images/icon/21.svg" alt=""></div>
						<h6 class="title"><span>Embeded Forms</span></h6>
						<p>Collect website leads with embedded forms and integrate easily.</p>
					</div> <!-- /.block-style-five -->
				</div>
				<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
					<div class="block-style-five" onclick="location.href='service-detailsV1.html';">
						<div class="icon"><img src="/assets/images/icon/22.svg" alt=""></div>
						<h6 class="title"><span>Autoresponder</span></h6>
						<p>Send welcome email to your new subscribers with a code.</p>
					</div> <!-- /.block-style-five -->
				</div>
				<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200">
					<div class="block-style-five" onclick="location.href='service-detailsV1.html';">
						<div class="icon"><img src="/assets/images/icon/174.svg" alt=""></div>
						<h6 class="title"><span>Online Marketing</span></h6>
						<p>Create customized popups and show the right message at the right time. lorem dummy.</p>
					</div> <!-- /.block-style-five -->
				</div>
				<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
					<div class="block-style-five" onclick="location.href='service-detailsV1.html';">
						<div class="icon"><img src="/assets/images/icon/176.svg" alt=""></div>
						<h6 class="title"><span>Web Design</span></h6>
						<p>Collect website leads with embedded forms and integrate easily.</p>
					</div> <!-- /.block-style-five -->
				</div>
				<div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
					<div class="block-style-five" onclick="location.href='service-detailsV1.html';">
						<div class="icon"><img src="/assets/images/icon/175.svg" alt=""></div>
						<h6 class="title"><span>Mobile Notification</span></h6>
						<p>Send welcome email to your new subscribers with a code.</p>
					</div> <!-- /.block-style-five -->
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.fancy-feature-six -->



<!--
			=====================================================
				Fancy Text block Twelve
			=====================================================
			-->
<div class="fancy-text-block-twelve mt-170 md-mt-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
				<div class="text-wrapper">
					<div class="title-style-three">
						<h2>
							<span>School Management System<img src="/assets/images/shape/line-shape-6.svg" alt=""></span>
							- EDUTECH.
						</h2>
					</div>
					<p class="sub-text pb-35">Manage your school's operations flawlessly with an interactive digital platform that helps keep track of your school’s operations from anywhere, any time.</p>
					<ul class="list-item-one">
						<li>Highly Accessible.</li>
						<li>Easy Setup and Integration.</li>
						<li>Highly Responsive</li>
						<li>Access Aytime, Anywhere</li>
					</ul>
				</div> <!-- /.text-wrapper -->
			</div>

			<div class="col-lg-5 ml-auto" data-aos="fade-left" data-aos-duration="1200">
				<div class="img-gallery">
					<img src="/assets/images/media/MockUp-EduTech.png" style="margin-top: 30px;" alt="">
					<img src="/assets/images/shape/53.svg" alt="" class="shapes shape-one">
					<img src="/assets/images/shape/52.svg" alt="" class="shapes shape-two">
				</div> <!-- /.img-gallery -->
			</div>
		</div>
		<br>
		<div class="row mt-4">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
				<div class="text-wrapper">
					<div class="title-style-three">
						<h2>
							<span>AIRSHOP 247<img src="/assets/images/shape/line-shape-6.svg" alt=""></span>
						</h2>
					</div>
					<p class="sub-text pb-35">Air was launched to make it easy for ambitious businesses to reach more customers and to help them succeed in this competitive market and whatever success means to them.</p>

				</div> <!-- /.text-wrapper -->
			</div>

			<div class="col-lg-5 ml-auto" data-aos="fade-left" data-aos-duration="1200">
				<div class="img-gallery">
					<img src="/assets/images/media/new_hero_img.png" style="margin-top: 30px;" alt="">
					<img src="/assets/images/shape/53.svg" alt="" class="shapes shape-one">
					<img src="/assets/images/shape/52.svg" alt="" class="shapes shape-two">
				</div> <!-- /.img-gallery -->
			</div>
		</div>
	</div>
</div> <!-- /.fancy-text-block-twelve -->



<!--
			=====================================================
				Counter With Icon One
			=====================================================
			-->
<div class="counter-with-icon-one pt-120 md-pt-70">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200">
				<div class="counter-box-three">
					<div class="icon"><img src="/assets/images/icon/23.svg" alt=""></div>
					<h2 class="number"><span class="timer" data-from="0" data-to="13" data-speed="1500" data-refresh-interval="5">0</span>m</h2>
					<p class="font-rubik">Ticket Sold</p>
				</div> <!-- /.counter-box-three -->
			</div>
			<div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
				<div class="counter-box-three">
					<div class="icon"><img src="/assets/images/icon/24.svg" alt=""></div>
					<h2 class="number"><span class="timer" data-from="0" data-to="30000" data-speed="1200" data-refresh-interval="5">0</span></h2>
					<p class="font-rubik">Event organisers</p>
				</div> <!-- /.counter-box-three -->
			</div>
			<div class="col-lg-4 col-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
				<div class="counter-box-three">
					<div class="icon"><img src="/assets/images/icon/25.svg" alt=""></div>
					<h2 class="number"><span class="timer" data-from="0" data-to="134" data-speed="1200" data-refresh-interval="5">0</span></h2>
					<p class="font-rubik">Countries</p>
				</div> <!-- /.counter-box-three -->
			</div>
		</div>
	</div>
</div> <!-- /.counter-with-icon-one -->





<!--
			=====================================================
				Fancy Short Banner Three
			=====================================================
			-->
@endSection("mainSection")
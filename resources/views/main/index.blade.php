@extends('layouts.app')


@section("titleSection")
<title> Home - {{ config('app.name', 'Laravel') }}</title>
@endSection("titleSection")


@section("nav")

<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
<div class="theme-main-menu sticky-menu theme-menu-five">
	<div class="d-flex align-items-center justify-content-center">
		<div class="logo"><a href="#"><img src="/assets/images/logo.png" alt=""></a></div>

		<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
			<div class="container nav-container">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="flaticon-menu-of-three-lines"></i>
				</button>
				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					<div class="d-lg-flex justify-content-between align-items-center">
						<ul class="navbar-nav main-side-nav font-gordita" id="one-page-nav">

							<li class="nav-item">
								<a href="#Home" class="nav-link">Home</a>
							</li>
							<li class="nav-item">
								<a href="#Services" class="nav-link">Services</a>
							</li>
							<li class="nav-item">
								<a href="#Technologies" class="nav-link">Technologies</a>
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
</div>
<!-- /.theme-main-menu -->

@endSection("nav")

@section("mainSection")

<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
<div class="hero-banner-eight">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto">
				<h1 class="hero-heading">Simplifying IT & Delivering Promises </h1>
				<p class="hero-sub-heading">We Leverage On ultimate Technologies to Transcend Customers Experience.</p>
				<a href="contact" class="theme-btn-nine">Lets Begin</a>
			</div>
		</div>

	</div>

	<!-- <div class="partner-slider-two mt-130 md-mt-80">
					<div class="container">
						<div class="partnerSliderTwo">
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="/assets/images/logo/logo-1.png" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="/assets/images/logo/logo-2.png" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="/assets/images/logo/logo-3.png" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="/assets/images/logo/logo-4.png" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="/assets/images/logo/logo-6.png" alt=""></div>
							</div>
							<div class="item">
								<div class="img-meta d-flex align-items-center justify-content-center"><img src="/assets/images/logo/logo-3.png" alt=""></div>
							</div>
						</div>
					</div>
				</div>  -->
	<!-- /.partner-slider-two -->
	<img src="/assets/images/shape/173.svg" alt="" class="shapes shape-right">
	<img src="/assets/images/shape/174.svg" alt="" class="shapes shape-left">
</div> <!-- /.hero-banner-eight -->



<!-- 
			=============================================
				Fancy Feature Eighteen
			============================================== 
			-->
<div class="fancy-feature-eighteen mt-130 md-mt-80" id="Services">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 m-auto">
				<div class="title-style-eight text-center" data-aos="fade-up" data-aos-duration="1200">
					<h2>This is What we do - <br>Our Core Expertise</h2>
					<p>At maxedge “average” is a myth - unsurpassed quality is what we live by.</p>
				</div>
			</div>
		</div>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs justify-content-center" data-aos="fade-up" data-aos-duration="1200">
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center active" data-toggle="tab" href="#ft1">
					<img src="/assets/images/solutions/worldwide.png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/worldwideC.png" alt="" class="hover tran3s">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center" data-toggle="tab" href="#ft2">
					<img src="/assets/images/solutions/smartphone (2).png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/smartphoneCpng.png" alt="" class="hover tran3s">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center" data-toggle="tab" href="#ft3">
					<img src="/assets/images/solutions/social-media.png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/social-mediaC.png" alt="" class="hover tran3s">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center" data-toggle="tab" href="#ft4">
					<img src="/assets/images/solutions/ecommerce.png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/ecommerceC.png" alt="" class="hover tran3s">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center" data-toggle="tab" href="#ft5">
					<img src="/assets/images/solutions/user-experience.png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/user-experienceC.png" alt="" class="hover tran3s">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center" data-toggle="tab" href="#ft6">
					<img src="/assets/images/solutions/data-science.png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/data-scienceC.png" alt="" class="hover tran3s">
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link d-flex align-items-center justify-content-center" data-toggle="tab" href="#ft7">
					<img src="/assets/images/solutions/artificial-intelligence.png" alt="" class="current tran3s">
					<img src="/assets/images/solutions/artificial-intelligenceC.png" alt="" class="hover tran3s">
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
		<div class="tab-pane active" id="ft1">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_81.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>Web Development</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<h4>Web Development</h4>
						<p>maxedge is a leading web development company based in uk, offering all kinds of custom built websites, web portals and web applications.We use cutting edge technologies, advanced frameworks and proven methodologies to ensure that our solutions are future-ready and scalable..</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="ft2">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_92.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>Mobile Application</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<h4>Mobile Application</h4>
						<p>Creating seamless and intuitive mobile applications that offer the best user experience is what our team of mobile app development professionals at Maxedge. We design & develop all kinds of mobile apps for iOS, Android, etc. depending on your business and end-user requirements.</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="ft3">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_93.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>Digital Marketing</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<h4>Digital Marketing</h4>
						<p>Developing a long-term and reliable marketing strategy that will flourish and live a longer life, while ensuring your customers stay with you and tell the world the tales of your business’s awesomeness transforming our custom-made business strategies into real time success..</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="ft4">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_94.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>e-commerce</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<h4>E-commerce</h4>
						<p>We have dedicated plans for ecommerce business transactions either as business-to-business (B2B), business-to-consumer (B2C), consumer-to-consumer or consumer-to-business.</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="ft5">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_95.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>UI/UX</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<h4>User Interface and Experience</h4>
						<p>Any part of a design that affects the user is UX design. At Maxedge, we take into accountability each and every minutest aspect of this design variant to provide compelling and intuitive user experience. We offer mobile UX design, UX design for SAAS, Product UX design for startups and more, while ensuring that the end user enjoys a great value-added experience..</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="ft6">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_96.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>Data Science</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<h4>Data Science</h4>
						<p>maxedge have dedicated data engineering which focuses on data analysis, artificial intelligence and Machine learning for business intelligence.</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="ft7">
			<div class="row no-gutters align-items-center">
				<div class="col-md-6">
					<div class="img-holder">
						<img src="/assets/images/media/img_97.png" alt="">
						<div class="ripple-box d-flex align-items-center justify-content-center">
							<p>Artificial Intelligence</p>
						</div>
					</div> <!-- /.img-holder -->
				</div>
				<div class="col-md-6">
					<div class="text-wrapper">
						<p>Artificial Intelligence</p>
						<p>The Need of artificially intelligence is now on the high demand in Information and communication Technologies and we have dedicated engineers with several years of experience.</p>
					</div> <!-- /.text-wrapper -->
				</div>
			</div>
		</div>
	</div>
	<img src="/assets/images/shape/175.svg" alt="" class="shapes shape-right">
	<img src="/assets/images/shape/176.svg" alt="" class="shapes shape-left">
</div> <!-- /.fancy-feature-eighteen -->



<!-- 
			=============================================
				Fancy Feature Nineteen
			============================================== 
			-->

<!-- /.fancy-feature-nineteen -->



<!-- 
			=============================================
				Fancy Feature Twenty
			============================================== 
			-->

<!-- /.fancy-feature-twenty -->



<!--
			=====================================================
				Fancy Feature Twenty One
			=====================================================
			-->
<div class="hero-banner-ten" id="Technologies">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-11 col-md-8 m-auto">
				<h1 class="hero-heading">Our Technologies.</h1>
				<p class="hero-sub-heading">maxedge delivered blazing fast performance, striking word solution</p>
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
</div>
<!-- /.fancy-feature-twentyOne -->




<!--
			=====================================================
				Client Feedback Slider Six
			=====================================================
			-->
<div class="fancy-feature-three pt-200 md-pt-80">
	<div class="block-style-one">
		<div class="container">
			<div class="d-lg-flex align-items-center justify-content-between inner-container">
				<div class="block-meta-data text-center">
					<div class="line-dot-container">
						<div class="icon-box">
							<img src="/assets/images/icon/01.svg" alt="">
						</div> <!-- /.icon-box -->
						<p>Initiation and Analysis Phase</p>
					</div>
					<div class="hover-content"><span>This is the time our team collects Project description and requirement.</span></div>
				</div> <!-- /.block-meta-data -->

				<div class="block-meta-data text-center">
					<div class="line-dot-container">
						<div class="icon-box">
							<img src="/assets/images/icon/02.svg" alt="">
						</div> <!-- /.icon-box -->
						<p>Development</p>
					</div>
					<div class="hover-content"><span>Our programmers come to play at this stage, Where the code to make it happen is created </span></div>
				</div> <!-- /.block-meta-data -->

				<div class="block-meta-data text-center">
					<div class="line-dot-container">
						<div class="icon-box">
							<img src="/assets/images/icon/03.svg" alt="">
						</div> <!-- /.icon-box -->
						<p>Testing</p>
					</div>
					<div class="hover-content text-center"><span> We carry out unit testing , and useability testing at this stage.</span></div>
				</div> <!-- /.block-meta-data -->

				<div class="block-meta-data text-center">
					<div class="line-dot-container">
						<div class="icon-box">
							<img src="/assets/images/icon/04.svg" alt="">
						</div> <!-- /.icon-box -->
						<p>Final Output</p>
					</div>
					<div class="hover-content text-right"><span>We deploy and hand over all your document and credentials.</span></div>
				</div> <!-- /.block-meta-data -->
			</div>
		</div> <!-- /.container -->
	</div>
	<div class="container" style="margin-top: 100px; margin-bottom: 150px;">
		<div class="row align-items-center">
			<div class="col-xl-5 col-lg-6 order-lg-last aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
				<div class="text-wrapper">
					<a class="fancybox mb-20 md-mb-10" data-fancybox="" href="#">
						<img src="/assets/images/icon/71.svg" alt="" class="icon">
					</a>
					<div class="title-style-seven">
						<h2>Why maxedge</h2>
					</div> <!-- /.title-style-seven -->
					<p>We understand the skill requirements for your product and can efficiently arrange a team for you from our 500+ in-house engineers..</p>
					<a href="whyus" class="theme-btn-eight">Learn more</a>
				</div> <!-- /.text-wrapper -->
			</div>
			<div class="col-xl-7 col-lg-6 col-md-8 m-auto order-lg-first aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
				<div class="illustration-holder">
					<img src="/assets/images/assets/ils_21.svg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="title-style-one">
					<h6 class="font-rubik">You’re in good company</h6>
					<h2>Best-in-class talent, competitive costs, incredible infrastructure.</h2>
				</div> <!-- /.title-style-one -->

				<div class="counter-info-classic">
					<div class="counter-box-one color-one">
						<h2 class="number font-rubik"><span class="timer" data-from="0" data-to="1" data-speed="1200" data-refresh-interval="5">1</span>k</h2>
						<p class="font-rubik">Projects</p>
					</div> <!-- /.counter-box-one -->
					<div class="counter-box-one color-two">
						<h2 class="number font-rubik"><span class="timer" data-from="0" data-to="3" data-speed="200" data-refresh-interval="5">200</span>k</h2>
						<p class="font-rubik">Workers</p>
					</div> <!-- /.counter-box-one -->
					<div class="counter-box-one color-three">
						<h2 class="number font-rubik"><span class="timer" data-from="0" data-to="1" data-speed="1200" data-refresh-interval="5">500</span></h2>
						<p class="font-rubik">Clients</p>
					</div> <!-- /.counter-box-one -->
					<div class="bubble-one"></div>
					<div class="bubble-two"></div>
					<div class="bubble-three"></div>
					<div class="bubble-four"></div>
					<div class="bubble-five"></div>
					<div class="bubble-six"></div>
					<div class="bubble-seven"></div>
					<img src="/assets/images/shape/8.svg" alt="" class="cs-screen dot-shape">
				</div> <!-- /.counter-info-classic -->
			</div>

			<div class="col-lg-6">

				<div class="clients-feedback-classic md-mt-80">
					@foreach($testimonials as $testimonial)
					<div class="feedback-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
						<p>{{$testimonial->message}} </p>
						<h6 class="name">{{$testimonial->name}}</h6>
					</div> <!-- /.feedback-wrapper -->
					@endforeach
				</div> <!-- /.clients-feedback-classic -->
			</div>
		</div>
	</div>
</div>

<!-- /.client-feedback-slider-six -->


<!--
			=====================================================
				Fancy Short Banner Nine
			=====================================================
			-->
<div class="fancy-short-banner-nine mt-170 md-mt-80" style="margin-top: 20px; padding-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-11 m-auto" data-aos="fade-up" data-aos-duration="1200">
				<div class="title-style-seven text-center">
					<h2>Already a client?</h2>
					<p>login to see Track the process of your Project.</p>
				</div>
			</div>
		</div>
		<div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
			<div class="dropdown download-btn">
				<a class="btn btn-default" style="background : white" href="login">
					Login
				</a>
			</div>
		</div>
	</div> <!-- /.container -->
	<img src="/assets/images/shape/177.svg" alt="" class="shapes shape-one">
	<img src="/assets/images/shape/178.svg" alt="" class="shapes shape-two">
</div> <!-- /.fancy-short-banner-nine -->

@endSection("mainSection")
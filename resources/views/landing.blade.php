<!DOCTYPE html>
<html>
<head>
	<title>DKM Masjid</title>
	<!-- Favicon -->
	<link rel="icon" type="img/png" sizes="32x32" href="/adminlte/dist/logo2.png">
	<!-- Bootsrap Css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<!-- Custom Css -->
	<link href="{{ asset('css/landing.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-targer="#indexNavbar">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md fixed-top">
		<div class="container">
			<a class="navbar-brand" href="{{ url('home') }}"><img src="/adminlte/dist/logo2.png"></a>

			<button class="navbar navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#indexNavbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse" id="indexNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> 
						<a class="nav-link" href="#obrand-intro-area">Home</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="#why-dkm-masjid">Mengapa ??</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="#fiture">Fiture</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="#">Fiture Lengkap</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="#">Screenshot</a>
					</li>
					<li class="nav-item"> 
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Setion Home -->
	<section id="obrand-intro-area" class="offset">
		<div class="obrand-intro-drak">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="detail-intro wow fadeInLeft">
							<p>DKM <b>MASJID</b></p>
							<p>
								Nabi saw. bersabda, “Siapa yang meninggalkan shalat dengan sengaja, maka ia telah kafir dengan terang-terangan.” Hadis ini diriwayatkan oleh imam Ath-Thabarani dari sahabat Anas bin Malik dan sanadnya hasan.
							</p>
							<a href="{{ url('login/jamaah') }}">Login Jamaah</a>
							<a class="pengurus" href="{{ url('login') }}">Login Admin </a>
						</div>
					</div>
					<div class="col-md-12"> 
						<div class="banner-intro wow fadeInRight">
							<img src="/adminlte/dist/app.png" id="monitor">
							<img src="/adminlte/dist/smart.png" id="dash" class="crypto-icons">
							<img src="/adminlte/dist/smart2.png" id="iota" class="crypto-icons">
							<img src="/adminlte/dist/smart3.png" id="eth" class="crypto-icons">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Setion Home -->

	<!-- Why DKM MASJID -->
	<section id="why-dkm-masjid" class="offset">
		<div class="container">
			<div class="title-why-dkm-masjid text-center">
				<p>Mengapa DKM MASJID</p>
				<p>
					Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci Porta, Eget Porttitor Felis Suscipit. Sed A Nisl.
				</p>
			</div>
			<div class="row detail-why-dkm-masjid">
				<div class="col-md-4">
					<div class="box-why-dkm-masjid text-center wow fadeInLeft">
						<i class="fa fa-cog"></i>
						<p>Easy Customize</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-why-dkm-masjid text-center wow fadeInLeft">
						<i class="fa fa-cog"></i>
						<p>Easy Customize</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-why-dkm-masjid text-center wow fadeInLeft">
						<i class="fa fa-cog"></i>
						<p>Easy Customize</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Fiture DKM Masjid -->
	<section id="fiture">
		<div class="container">
			<div class="title-fiture text-center">
				<p>DKM MASJID APP</p>
				<p>
					Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci Porta, Eget Porttitor Felis Suscipit. Sed A Nisl.
				</p>
			</div>
			<div class="row detail-fiture">
				<div class="col-md-4 detail-col-fiture">
					<div class="text-features text-right wow fadeInLeft">
						<p>Tampilan Cantik</p>
						<p>
							Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci 
						</p>
					</div>
					<div class="text-features text-right wow fadeInLeft">
						<p>Easy To Customize</p>
						<p>
							Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci 
						</p>
					</div>
					<div class="text-features text-right wow fadeInLeft">
						<p>Quick Settings</p>
						<p>
							Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci 
						</p>
					</div>
				</div>
				<div class="col-md-4 detail-col-fiture">
					<div class="img-fiture wow fadeInUp">
						<img src="/adminlte/dist/phone.png" id="phone">
					</div>
				</div>
				<div class="col-md-4 detail-col-fiture">
					<div class="text-features text-right wow fadeInLeft">
						<p>User Friendly</p>
						<p>
							Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci 
						</p>
					</div>
					<div class="text-features text-right wow fadeInLeft">
						<p>Easy To Customize</p>
						<p>
							Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci 
						</p>
					</div>
					<div class="text-features text-right wow fadeInLeft">
						<p>Quick Settings</p>
						<p>
							Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sed Feugiat Arcu Ut Orci 
						</p>
					</div>
				</div>	
			</div>
		</div>
	</section>
	<!-- End Fiture DKM Masjid -->


	<!-- Jquery JS -->
	<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="/adminlte/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Counter JS -->
	<script src="{{ asset('js/counter.js') }}"></script>
	<!-- Corausel JS -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Wow JS -->
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<!-- Custom JS -->
	<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
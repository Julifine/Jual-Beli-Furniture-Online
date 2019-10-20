<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Julifine | Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">

		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../CSS/home_styles.css">
		<link href="https://fonts.googleapis.com/css?family=Saira:300,400,500,600,700,800&display=swap&subset=latin-ext" rel="stylesheet">

		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>


		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
		<link rel="shortcut icon" href="../Assets/logo.png">
	</head>

	<body style="background-color: rgba(0,0,0,0.80)">
		<nav class="navbar navbar-expand-lg navbar-dark static-top bg-topbar" style="z-index: 999;position: absolute;width: 100%">
		  <div class="container">
			<a class="navbar-brand" href="#">
				  <img src="../Assets/logo-text.png" alt="">
				</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">PRODUCTS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">ROOMS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">INSPIRATION</a>
					</li>
					<li class="nav-item" style="">
						<a href="#" class="nav-link">CATALOGUE</a>
					</li>
					<li class="nav-item" style="">
						<a href="#" class="nav-link">NEW LOWER PRICE</a>
					</li>
				</ul>
				<form class="form-inline ml-auto">
				  <input class="form-control mr-sm-2 search-nav" type="search" placeholder="Search" aria-label="Search" style="background-color: transparent;border: 2px white solid;border-radius: 10px">
				  <button class="btn-search" type="submit" style="margin-left: -50px;background-color: transparent;border: none"><div class="fas fa-search" style="color: white"></div></button>
				</form>
				<ul class="navbar-nav ml-4">
					<li class="nav-item">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<img src="../assets/cart-white.svg" alt="" style="width: 50px;height: 25px">
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Link 1</a>
							<a class="dropdown-item" href="#">Link 2</a>
							<a class="dropdown-item" href="#">Link 3</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="#"><img src="../assets/user-white.svg" alt="" style="width: 50px;height: 25px"></a>
					</li>
				</ul>
			</div>
		  </div>
		</nav>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators" style="float: left">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner">
				<div class="carousel-item active" data-touch>
			  		<img class="d-block w-100" src="../assets/bg/bg-carousel-1.png" alt="First slide" style="filter: opacity()">
				</div>
				<div class="carousel-item">
			  		<img class="d-block w-100" src="../assets/bg/bg-carousel-2.png" alt="Second slide">
				</div>
				<div class="carousel-item">
			 		<img class="d-block w-100" src="../assets/bg/bg-carousel-3.png" alt="Third slide">
				</div>
		  	</div>
		  	<a class="carousel-control-prev fontIcon" href="#carouselExampleIndicators" role="button" data-slide="prev" style="">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next fontIcon" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
		  	</a>
		</div>
		<div class="" style="position: relative;text-align: center">
			<div class="" style="position: absolute;top: 0%;left: 50%;margin-top: -350px; transform: translate(-50%, -50%);overflow: hidden">
				<div style="transform: translateY(52%);display: inline-block">
					<span style="border-bottom: 3px white solid;font-weight: 500;padding-left: 5px;padding-right: 5px;color: white">ESTB</span>
				</div>
				<img src="../assets/logo-no-text.png" style="width: 80px;height: 80px;display: inline-block;margin: 0px 30px" alt="">
				<div style="transform: translateY(52%);display: inline-block">
					<span style="border-bottom: 3px white solid;font-weight: 500;padding-left: 5px;padding-right: 5px;color: white">2019</span>
				</div>
			</div>
			<div style="position: absolute;top: 0%;left: 50%;margin-top: -250px; transform: translate(-50%, -50%);overflow: hidden">
				<img src="../assets/logo-text-big.png" alt="" style="margin-top: 60px">
			</div>
			<div style="position: absolute;top: 0%;left: 50%;margin-top: -150px; transform: translate(-50%, -50%);overflow: hidden">
				<span style="font-weight: 400;font-size: 18px;color: white">THE PLACE FOR FURNITURE YOU WISH EXISTED</span>
			</div>
		</div>
		<div class="container" style="">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-deck" style="margin-top: 50px">
					  <div class="card" style="background-color: transparent">
						<h5 class="card-title" style="text-align: center;background-color: rgba(196,196,196,0.80);position: absolute;padding: 10px;color: white;right:0%">BEDROOM</h5>
						<img class="card-img-top" src="../assets/bg/bg-card-bedroom.png" alt="Card image cap">
					  </div>
					  <div class="card" style="background-color: transparent">
						<h5 class="card-title" style="text-align: center;background-color: rgba(196,196,196,0.80);position: absolute;padding: 10px;color: white;right:0%">LIVING ROOM</h5>
						<img class="card-img-top" src="../assets/bg/bg-card-living.png" alt="Card image cap">
					  </div>
					  <div class="card" style="background-color: transparent">
						<h5 class="card-title" style="text-align: center;background-color: rgba(196,196,196,0.80);position: absolute;padding: 10px;color: white;right:0%">KITCHEN</h5>
						<img class="card-img-top" src="../assets/bg/bg-card-kitchen.png" alt="Card image cap">
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div style="border: 1px rgba(255,255,255,0.50) solid;margin-top: 50px;"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div style="margin-top: 50px">
						<div id="carouselExample" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators" style="float: left">
								<li data-target="#carouselExample" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExample" data-slide-to="1"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active" data-interval="10">
									<img class="d-block w-100" src="../assets/bg/bg-inspiration-1.png" alt="First slide" style="filter: opacity()">
									<div class="carousel-caption d-none d-md-block">
										<div style="width: 40px;height: 40px;background-color: white;border-radius: 50%;border: 3px #c4c4c4 solid;position: absolute;transform: translate(20%,-80%);">
											<div class="fas fa-plus" style="color: #c4c4c4;margin-top: 9px"></div>
										</div>
								  	</div>
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="../assets/bg/bg-inspiration-2.png" alt="Second slide">
								</div>
							</div>
							<a class="carousel-control-prev fontIcon" href="#carouselExample" role="button" data-slide="prev" style="">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next fontIcon" href="#carouselExample" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="" style="position: relative;text-align: center">
							<div style="position: absolute;top: 0%;left: 50%;margin-top: -601px; transform: translate(-50%, -50%);overflow: hidden;background-color: rgba(196,196,196,0.80);width: 100%;padding: 10px 0px">
								<span style="font-weight: 700;font-size: 18px;color: white;">JULIFINE INSPIRATION CATALOGUE</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-top: 50px;background-color: rgba(196,196,196,0.20);padding: 20px 0px;width: 100%">
				<div class="row" style="text-align: center;width: 100%">
					<div class="col-4">
						<div style="position: relative;top: 50%;transform: perspective(1px) translateY(-50%);">
							<h3 style="color: white">Follow us on</h3>
							<div style="overflow: hidden;margin-top: 20px">
								<img src="../assets/svg/instagram.svg" alt="" style="height: 40px;width: 40px;">
								<img class="" src="../assets/svg/twitter.svg" alt="" style="height: 40px;width: 40px;margin-left: 20px">
								<img class="" src="../assets/svg/facebook.svg" alt="" style="height: 40px;width: 40px;margin-left: 20px">
								<img class="" src="../assets/svg/pinterest.svg" alt="" style="height: 40px;width: 40px;margin-left: 20px">
							</div>
						</div>
					</div>
					<div class="col-4">
						<div style="position: relative;top: 50%;transform: perspective(1px) translateY(-50%);">
							<div class="row" style="text-align: center;">
								<div class="col">
									<h2 style="color: white">Useful Links</h2>
								</div>
							</div>
							<div class="row" style="text-align: center">
								<div class="col" style="overflow: hidden">
									<a href="" style="color: white">Catalogues</a>
									<a href="" style="color: white;margin-left: 20px">Planning Tools</a>
									<a href="" style="color: white;margin-left: 20px">Customer Services</a>
									<a href="" style="color: white;margin-left: 20px">Contact Us</a>
									<a href="" style="color: white;margin-left: 20px">Store Information</a>
									<a href="" style="color: white;margin-left: 20px">FAQ</a>
									<a href="" style="color: white;margin-left: 20px">Newsroom</a>
								</div>
							</div>
							<div class="row" style="text-align: center">
								<div class="col">
									<span class="footer-text">Copyright © 2019 Julifine Co. All rights reserved.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div style="position: relative;top: 50%;transform: perspective(1px) translateY(-50%);">
							<h3 style="color: white">Our Location</h3>
							<div style="overflow: hidden;margin-top: 20px">
								<span style="color: white">Jl. Telekomunikasi Jl. Terusan Buah Batu No.01, Sukapura,<br> Kec. Dayeuhkolot, Kota Bandung, Jawa Barat 40257</span>
							</div>
						</div>
					</div>
				</div>
		</div>
	</body>
	<script>
		$(".carousel").swipe({

		  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

			if (direction == 'left') $(this).carousel('next');
			if (direction == 'right') $(this).carousel('prev');

		  },
		  allowPageScroll:"vertical"

		});
		
		$('.carousel').carousel({
		  interval: 6000
		})
	</script>
</html>

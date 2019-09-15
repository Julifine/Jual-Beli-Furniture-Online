<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Julifine | Input Barang</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">
		
		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../CSS/profile.css">
		<link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">
		
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://kit.fontawesome.com/yourcode.js"></script>
		<link rel="shortcut icon" href="../Assets/logo.png">
		
	</head>

	<body>
		<section>
			<nav class="navbar navbar-expand-lg navbar-dark static-top bg-topbar">
			  <div class="container">
				<a class="navbar-brand" href="#">
					  <img src="../Assets/logo-text.png" alt="">
					</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<span class="nav-link language" data-toggle="dropdown" id="bahasa">
							<img src="../Assets/globe.svg" alt="" style="width: 15px;height: 15px;">  ENGLISH
						</span>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a href="" class="dropdown-item" id="highlighted">English</a>
							<a href="" class="dropdown-item">Deutsch</a>
							<a href="" class="dropdown-item">Español</a>
							<a href="" class="dropdown-item">Français</a>
							<a href="" class="dropdown-item">日本語</a>
							<a href="" class="dropdown-item">한국어</a>
							<a href="" class="dropdown-item">Português (Brasileiro)</a>
							<a href="" class="dropdown-item">Русский</a>
							<a href="" class="dropdown-item"><span >简体中文</span></a>
							<a href="" class="dropdown-item"><span >繁體中文</span> (Hong Kong)</a>
							<a href="" class="dropdown-item"><span >繁體中文</span> (Taiwan)</a>
							<a href="" class="dropdown-item">Bahasa Melayu</a>
							<a href="" class="dropdown-item">ภาษาไทย</a>
							<a href="" class="dropdown-item">Tiếng Việt</a>
							<a href="" class="dropdown-item">Bahasa Indonesia</a>
						</div>
					</li>
					<li class="nav-item" style="">
						<a href="#" class="nav-link">SUPPORT</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
			<div class="container justify-content-center">
				<div class="jumbotron" style="margin-left: auto; margin-right: auto; width: 1000px;">

				<div class="row justify-content-center title-form" style="margin-top: 40px;">
						<span>INPUT PRODUCT</span>
					</div>
				<div class="row">
						<div class="col-4" style="">
							<div style="width: 60px; height: 200px ;background-color: #5C5B5A; width: 100%; margin-left: 50px; margin-top: 40px; border-radius: 3%; "> <a href="	">
								<i class='fas fa-camera' style="margin-top: 90px; margin-left: 90px; color: white; text-decoration: none"></i>
								<a href="	" style="color: white; text-decoration: none">Select picture</a>
								<div style="border: 1.5px solid white; width: 200px; margin-left: 50px;"></div></a>
							</div>
						</div>
						<div class="col-4" style="">
							<div style="width: 60px; height: 200px ;background-color: ; width: 100%; margin-left: 300px; margin-top: 40px; border-radius: 3%; ">
								<input type="email" name="email_field" id="email_field" placeholder="Product ID" style="margin-top:;">
								<input type="email" name="email_field" id="email_field" placeholder="Product Name" style="margin-top: 15px">
								<input type="email" name="email_field" id="email_field" placeholder="Product Price" style="margin-top: 15px">
								<input type="email" name="email_field" id="email_field" placeholder="Product Stock" style="margin-top: 15px">
								<input type="email" name="email_field" id="email_field" placeholder="Product Weight" style="margin-top: 15px">
								<input type="email" name="email_field" id="email_field" placeholder="Product Category" style="margin-top: 15px">
								<input type="email" name="email_field" id="email_field" placeholder="Product Description" style="margin-top: 100px">
								<button style="margin-top: 10px; background-color: red; border-radius: 3%; border-color: red; border: none; font-weight: bold; width: 150px;">CANCEL</button>
								<button style="margin-top: 10px; margin-left: 8px; background-color: white; border-radius: 3%; border-color: white; border: none; font-weight: bold; width: 150px;">INPUT</button>
							</div>
						</div>
					</div>
					
				</div>
				
				<div style="margin-top: 60px;">		
					<div class="row justify-content-center">
						<a class="footer" href="#">Julifine.com</a>
					</div>
					<div class="row justify-content-center">
						<span class="footer-text">Copyright © 2019 Julifine Co. All rights reserved. <a href="">FAQ</a> | <a href="">Legal Terms</a> | <a href="">Privacy Policy</a> | <a href="">Cookie Policy</a></span>
					</div>
				</div>
			</div>
		</section>		
	</body>
</html>
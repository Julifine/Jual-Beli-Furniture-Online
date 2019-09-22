<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Julifine | Registrasi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">
		
		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../CSS/register.css">
		<link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">
		
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		
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
				<div class="jumbotron" style="margin-left: auto; margin-right: auto;">
					<div class="row justify-content-center title-form" style="margin-top: 40px;">
						<span>Register a new account now</span>
					</div>
					<div class="row justify-content-center" style="">
						<div action="#" method="post" onSubmit="validasi()">
							<div class="field justify-content-center" style="width: 20vw">
								<input type="username" name="username" id="username" placeholder="">
								<label for="username" class="text-label label-placeholder" style="">Username</label>
							</div>
							<div class="field justify-content-center" style="width: 20vw">
								<input type="email" name="email" id="email" placeholder="">
								<label for="email" class="text-label label-placeholder" style="">Email</label>
							</div>
							<div class="field" style="">
								<input type="password" name="password" id="password" placeholder="">
								<label for="password" class="text-label label-placeholder" style="">Password</label>
								<span toggle="#password" class="fas fa-eye fa-lg field-icon toggle-password"  style=""></span>
							</div>
							<div class="field-forgot" style="">
								<a href="#" style="color: #888;"><span style="font-size: 14px;">Forgot password?</span></a>
							</div>
							<div class="field" style="margin-top: 80px">
								<input type="submit" class="tombol" name="submit" value="START" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;border: none" id="btn-razer">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-4 separator-left" style="">
							<div style="border: 1.5px solid;width: 100%; border"></div>
						</div>
						<div class="col-4 separator-text" style="">
							<span style="">or connect with</span>
						</div>
						<div class="col-4 separator-right" style="">
							<div style="border: 1.5px solid;width: 100%; border"></div>
						</div>
					</div>
					<div class="row" style="margin-top: 40px;padding-left: 18%;padding-right: 18%">
						<div class="col-4" style="text-align: center;padding: 0px">
						
							<input type="button" id="btn-google" onClick="signInWithGoogle()">
						</div>
						<div class="col-4" style="text-align: center;padding: 0px">
							<a href="">
								<img src="../Assets/fb.svg" alt="">
							</a>
						</div>
						<div class="col-4" style="text-align: center;padding: 0px">
							<a href="">
								<img src="../Assets/hp.svg" alt="">
							</a>
						</div>
					</div>
					<div class="row justify-content-center" style="padding-left: 10%;padding-right: 10%;margin-top: 40px">
						<input class="masuk" type="button" value="ALREADY HAVE AN ACCOUNT?" name="register" id="" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;">
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
		<script src="../js/auth.js"></script>
		<script>
			function validasi(){
		var username = document.getElementById("username").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		if (nama != "" && email!="" && alamat !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
}
		</script>
	</body>
	<script>
		$(".toggle-password").click(function() {
			$(this).toggleClass("fa-eye-white");
			var input = $($(this).attr("toggle"));
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			}else{
				input.attr("type", "password");
			}
		});
	</script>
</html>
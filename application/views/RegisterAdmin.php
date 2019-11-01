<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Julifine | Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-signin-client_id" content="664499148646-6irjsskl9ph5eafhihqnb7dsgaf6a47f.apps.googleusercontent.com">
		
		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?= base_url();?>/CSS/register_admin.css">
		<link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">
		
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
		
		
		<script src="https://cdn.firebase.com/libs/firebaseui/4.2.0/firebaseui.js"></script>
		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/4.2.0/firebaseui.css" />
		
		<link rel="shortcut icon" href="<?= base_url();?>/Assets/logo.png">
		
	</head>

	<body>
		<section>
			<nav class="navbar navbar-expand-lg navbar-dark static-top bg-topbar">
			  <div class="container">
				<a class="navbar-brand" href="<?= base_url(); ?>Home">
					  <img src="<?= base_url();?>/Assets/logo-text-landscape.png" alt="">
					</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<li class="nav-item active">
							<span id="doesnt" class="btn text-1">Already have an account?</span>
						</li>
						<li class="nav-item">
							<a id="btn-register" class="nav-link" href="javascript:toLogin()"><button class="masuk">LOGIN</button></a>
						</li>
						<li class="nav-item dropdown">
						<span class="nav-link language" data-toggle="dropdown" id="bahasa">
							<img src="<?= base_url();?>/Assets/globe.svg" alt="" style="width: 15px;height: 15px;">  ENGLISH
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
						<span>Register a new admin now</span>
					</div>
					<div class="row justify-content-center" style="">
						<form id="signUpForm" method="post" style="width: 100%;padding-left: 10%;padding-right: 10%">
							<div class="field justify-content-center">
								<input type="username" name="usrAdmin" id="usrAdmin" placeholder="">
								<label for="usrAdmin" class="text-label label-placeholder" style="">Username</label>
							</div>
							<div class="field justify-content-center">
								<input type="email" name="emlAdmin" id="emlAdmin" placeholder="">
								<label for="emlAdmin" class="text-label label-placeholder" style="">Email</label>
							</div>
							<div class="field" style="margin-top: 60px">
								<input type="password" name="pswAdmin" id="pswAdmin" placeholder="">
								<label for="pswAdmin" class="text-label label-placeholder" style="">Password</label>
								<span toggle="#pswAdmin" class="fas fa-eye fa-lg field-icon toggle-password"  style=""></span>
							</div>
							<div class="field" style="margin-top: 80px;margin-bottom: 40px">
								<input type="submit" class="" name="submit" value="START" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;border: none" id="btn-razer">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="" style="position: absolute; bottom: 5px;left: 20%;right: 20%;">
				<center>
				<div class="row justify-content-center">
					<a class="footer" href="#">Julifine.com</a>
				</div>
				<div class="row justify-content-center">
					<span class="footer-text">Copyright © 2019 Julifine Co. All rights reserved.</span>
				</div></center>
				
			</div>
		</section>		
		<script>var base_url = '<?php echo base_url(); ?>';</script>
		<script src="<?= base_url(); ?>/js/auth.js"></script>
		<script>
			
			function toLogin(){
				window.location.href = "<?= base_url(); ?>Landing/Login";
			}
			
			firebase.auth().onAuthStateChanged(function(user){
				if	(user){
					window.location.href = "<?= base_url(); ?>Home";
				}
			});
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
		
		const signUpAdmin = document.querySelector('#signUpForm');
		signUpAdmin.addEventListener('submit',(e) => {
			e.preventDefault();

			admin_email = signUpAdmin['emlAdmin'].value;
			admin_password = signUpAdmin['pswAdmin'].value;
			admin_username = signUpAdmin['usrAdmin'].value;

			var status;

			if ( admin_email != '' && admin_password != '' && admin_username != ''){
				
				firebase.database().ref("users").once('value', function(snapshot) {
					var child = [];
					snapshot.forEach(function(childSnapshot) {
						var childKey = childSnapshot.key;
						var childData = childSnapshot.val();
						child.push(childData);
					});
					for(i=0;i<child.length;i++){
						if (admin_username == child[i].displayName){
							alert('Username sudah digunakan! Silahkan cari username lain.');
							status = false;
							break;
						}else{
							if (child[i].email == admin_email){
								alert('Email sudah digunakan! Silahkan cari email lain.');
								status = false;
								break;
							}
							else{
								status = true;
							}
						}
					}

					if (status){
						firebase.auth().createUserWithEmailAndPassword(admin_email,admin_password).then(cred => {
							console.log(cred);
							var pp;
							var pn;
							if (cred.user.photoURL==null){
								pp = "https://firebasestorage.googleapis.com/v0/b/julifine.appspot.com/o/default%2FphotoURL%2Fuser-white.svg?alt=media&token=319efa94-f140-414c-ae63-b3f50072c6fd";
							}
							if (cred.user.phoneNumber == null){
								pn = "-";
							}
							var user = firebase.auth().currentUser;
							user.updateProfile({
								displayName: admin_username
							});
							var firebaseRef = firebase.database().ref("users/" + cred.user.uid);
							firebaseRef.set({
								email: cred.user.email,
								displayName: admin_username,
								uid:cred.user.uid,
								imageUrl: pp,
								phoneNumber: pn,
								type: 'admin'
							});
						}).catch(function(error) {
							var errorCode = error.code;
							var errorMessage = error.message;
							// The email of the user's account used.
							var email = error.email;
							// The firebase.auth.AuthCredential type that was used.
							var credential = error.credential;
							window.alert(errorMessage);
						});
					}
				});
				
			}else{
				window.alert("The form is incomplete. Please fill out all fields.");
			}
			
		});
	</script>
</html>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Julifine | Home Admin</title>
		
		<script src="https://kit.fontawesome.com/514d14375d.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>/CSS/home_user.css">
		<link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">
		
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>
		<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
		
		<link rel="shortcut icon" href="<?= base_url(); ?>/Assets/logo.png">
		
	</head>

	<body style="">
		<div class="container">
			<div id="child" class="jumbotron" style="vertical-align: middle; height: 20%;width: 35%;margin-right: auto;margin-left: auto;background-color:rgba(51,51,51,0.50);transform: translateY(30%)">
				<h2><b>Welcome to ADMIN Julifine!</b></h2>
				<div class="" style="text-align: center">
					<img id="profilePicture" src="" >	
				</div>
				<div style="">													
					<span style="margin-top: 20px;font-size: 18px">Email: <span id="useremail"></span></span>
					<h3 style="margin-top: 10px;font-size: 18px">UID: <span id="useruid"></span></h3>
				</div>
				<input type="submit" onClick="logout()" name="submit" value="LOG OUT" style="width: 100%;height:50px;font-size: 16px;border-radius: 10px;font-weight: bolder;border: none;background-color: white;margin-top: 20px;">
			</div>
		</div>
		<script src="<?= base_url(); ?>/js/auth.js"></script>
		<script>
			firebase.auth().onAuthStateChanged(function(user){
				if	(!user){
					window.location = "<?= base_url(); ?>Landing/Login";
				}else{
					
					var email = user.email;
					var UID = user.uid;
					var pp = user.photoURL;
					
					if(pp == null){
						pp = "<?= base_url(); ?>/Assets/user-vector.svg";
					}
					
					if(email == null){
						email = "-";
					}
					
					document.getElementById("useremail").innerHTML = email;
					document.getElementById("useruid").innerHTML = UID;
					document.getElementById("profilePicture").src = pp;
				}
			});
		</script>
		<script>
		</script>
	</body>
</html>
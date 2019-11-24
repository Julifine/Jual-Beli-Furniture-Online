<style>
	.active{
		color: white;
		font-weight: 600;
		font-size: 24px;
		background-color: transparent
	}
	
	.btn-putih{
		background-color: white;
		color: black;
		padding: 10px;
		border: none;
		border-radius: 8px
	}

	.content-lbl{
		color: white;
	}
	
	.left-item{
		color: white;
	}
	
	.left-item:hover{
		color: #808080;
		text-decoration: none
	}

	.content-txt{
		color: white
	}
	
</style>

<div style="margin-left: auto;margin-right: auto;min-height: 86.3%!important" class="features19 cid-rFh1Nopgcw" >
	<div class="container" style="">
		<div class="row" style="margin-top: 100px;">
			<div class="col-2">
				<div class="row" style="">
					<a href="<?=base_url();?>MyAccount" class="left-item" style="font-size: 18px;font-weight: 600">MY ACCOUNT</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="<?=base_url();?>MyAccount/Profile" class="left-item" style="color: yellow">Profile</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="<?=base_url();?>MyAccount/AddressBook" class="left-item">Address Book</a>
				</div>
				<div class="row" style="padding-top: 28px;display: none" id="leftSavedCart">
					<a href="#" class="left-item">Saved Carts</a>
				</div>
				<div class="row" style="padding-top: 28px;display: none" id="leftDataUsers">
					<a href="#" class="left-item">Data Users</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="#" class="left-item">Order History</a>
				</div>
			</div>
			<div class="col-10" style="">
						<div class="container">
							<div class="row">
								<div class="col-12" >
									<span class="active">Profile</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">First Name</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt" id="firstName"></span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="margin-top: 20px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">Last Name</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt" id="lastName"></span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="margin-top: 20px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">Full Name</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt" id="fullName"></span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="margin-top: 20px;">
									<div class="container" style="padding: 0px">
										<div class="row">
											<div class="col-2">
												<span class="content-lbl">Email Address</span>
											</div>
											<div class="col-2">
												<center><span style="color: white">:</span></center>
											</div>
											<div class="col-8">
												<center><span class="content-txt" id="email"></span></center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" style="">
									<div class="container" style="padding: 0px;margin-top: 40px">
										<div class="row" >
											<div class="col-4" style="">
												<a href="#"><span class="btn-putih">CHANGE YOUR PASSWORD<span style="color: #0f0">></span></span></a>
											</div>
											<div class="col-5">
												<a href="<?= base_url();?>MyAccount/PersonalDetail"><span class="btn-putih text-uppercase">Update your personal details<span style="color: #0f0">></span></span></a>
											</div>
											<div class="col-3">
												<a href="#"><span class="btn-putih text-uppercase">Update your email<span style="color: #0f0">></span></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
</div>
		</div>
</div>
<script>
	window.onload = function(){
		firebase.auth().onAuthStateChanged(function(user){
				if	(user){
					var email = user.email;
					var dn = user.displayName;
					var UID = user.uid;
					var pp = user.photoURL;
					var phoneNumber = user.phoneNumber;
					firebase.database().ref("users").once('value', function(snapshot) {
						snapshot.forEach(function(childSnapshot) {
							var childKey = childSnapshot.key;
							var childData = childSnapshot.val();
							if(user.uid == childKey){
								document.getElementById("firstName").innerHTML = childData.firstName
								document.getElementById("lastName").innerHTML = childData.lastName
								if (childData.firstName == '-' && childData.lastName == '-'){
									document.getElementById("fullName").innerHTML = "-"
								}else if (childData.firstName != '-' && childData.lastName == '-'){
									document.getElementById("fullName").innerHTML = childData.firstName
								}else if (childData.firstName == '-' && childData.lastName != '-'){
									document.getElementById("fullName").innerHTML = childData.lastName
								}else{
									document.getElementById("fullName").innerHTML = childData.firstName +" "+ childData.lastName
								}
								document.getElementById("email").innerHTML = childData.email
								if(childData.type == "user"){
									document.getElementById("leftDataUsers").style.display = "block"
								}else{
									document.getElementById("leftSavedCart").style.display = "block"
								}
							}
						})
					})
				}else{
					window.location = "<?= base_url(); ?>"
				}
		})
		}
</script>
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
	
	.btn-putih:hover{
		cursor: pointer
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
<div style="margin-left: auto;margin-right: auto;min-height: 86.3%" class="features19 cid-rFh1Nopgcw" >
	<div class="container" style="">
		<div class="row" style="margin-top: 100px;">
					<div class="col-2">
						<div class="row" style="">
							<a href="<?=base_url();?>User/MyAccount" class="left-item" style="font-size: 18px;font-weight: 600">MY ACCOUNT</a>
						</div>
						<div class="row" style="padding-top: 28px;">
							<a href="<?=base_url();?>User/MyAccount/Profile" class="left-item">Profile</a>
						</div>
						<div class="row" style="padding-top: 28px;">
							<a href="<?=base_url();?>User/MyAccount/AddressBook" class="left-item" style="color: yellow">Address Book</a>
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
									<span class="active">Address Book</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;margin-bottom: 10px">
									<span class="content-lbl">Manage your address book</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" style="margin-top:20px">
								<div class="col-4">
									<div class="container">
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
										<div class="row" style="margin-top: 4px">
											<span style="color: white;font-size: 20px"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;">
									<button class="btn-putih" style="background-color: white" onClick="toOtherPage('<?= base_url();?>MyAccount/AddAddress')">ADD NEW ADDRESS</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<script type="text/javascript">

	function toOtherPage(base_url){
		window.location = base_url;
	}
	
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
								if(childData.type == "admin"){
									document.getElementById("leftDataUsers").style.display = "block"
								}else{
									document.getElementById("leftSavedCart").style.display = "block"
								}
							}
						})
					})
				}
			else{
				window.location = "<?= base_url(); ?>"
			}
		})
	}
	
</script>

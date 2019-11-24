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
<div style="margin-left: auto;margin-right: auto;min-height: 86.3%" class="features19 cid-rFh1Nopgcw">
	<div class="container" style="">
		<div class="row" style="margin-top: 50px">
					<div class="col-2">
						<div class="row" style="">
							<a href="<?=base_url();?>MyAccount" class="left-item" style="font-size: 18px;font-weight: 600">MY ACCOUNT</a>
						</div>
						<div class="row" style="padding-top: 28px;">
							<a href="<?=base_url();?>MyAccount/Profile" class="left-item">Profile</a>
						</div>
						<div class="row" style="padding-top: 28px;">
							<a href="<?=base_url();?>MyAccount/AddressBook" class="left-item" style="color: yellow;">Address Book</a>
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
							<form action="<?= base_url(); ?>User/MyAccount/addAddress" method="post" id="addAddressForm">
							<div class="row">
								<div class="col-12" >
									<span class="active">Address Book</span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-12" style="margin-top: 10px;margin-bottom: 10px">
									<span class="content-lbl">Please use this form to add/edit an address </span>
								</div>
							</div>
							<div class="dropdown-divider" style="padding: 0px;margin-top: 10px"></div>
							<div class="row" >
								<div class="col-6">
									<div class="container" style="padding: 0px">
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">First Name</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px;filter: contrast(0.5)" name="firstName" readonly value="" id="firstName">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Street Address</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="streetAdd" id="streetAdd" required>
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Street Address 2 (Optional)</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="streetAdd2" id="streetAdd2">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">City</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="city" id="city" required>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="container" style="padding: 0px">
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Last Name</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px;filter: contrast(0.5)" name="lastName" readonly value="" id="lastName">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Apt, Suite, Building (optional)</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="building" id="building">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">Province</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="province" required id="province">
												</div>
											</div>
										</div>
										<div>
											<div class="row" style="margin-top: 10px">
												<div class="col-12">
													<span style="font-size: 20px;color: white">ZIP Code</span>
												</div>
											</div>
											<div class="row" style="margin-top: 4px">
												<div class="col-12">
													<input type="text" style="width: 100%;font-size: 20px" name="zip" onKeyPress="isInputNumber(event)" required id="zip">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" style="margin-top: 20px">
								<div class="col-6">
									<input class="btn-putih" type="submit" style="background-color: white" value="SAVE ADDRESS">
								</div>
							</div>
						</div>
							</form>
					</div>
				</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);
				
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
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
								document.getElementById("firstName").value = childData.firstName
								document.getElementById("lastName").value = childData.lastName
								if(childData.type == "admin"){
									document.getElementById("leftDataUsers").style.display = "block"
								}else{
									document.getElementById("leftSavedCart").style.display = "block"
								}
							}
						})
					})
				}
		})
	}
	
	const addAddressForm = document.querySelector('#addAddressForm');
	addAddressForm.addEventListener('submit',(e) => {
		e.preventDefault();
		
		var street = addAddressForm['streetAdd'].value;
		var street2 = addAddressForm['streetAdd2'].value;
		var building = addAddressForm['building'].value;
		var province = addAddressForm['province'].value;
		var city = addAddressForm['city'].value;
		var zip = addAddressForm['zip'].value;
		
		firebase.auth().onAuthStateChanged(function(user){
			if	(user){
				var email = user.email;
				var dn = user.displayName;
				var UID = user.uid;
				var pp = user.photoURL;
				var pn = user.phoneNumber;
				
				var firebaseRef = firebase.database().ref("users/" + UID+"/address/"+btoa(street));
				firebaseRef.set({
					street:street,
					street2:street2,
					building:building,
					province:province,
					city:city,
					zip:zip
				}, function(error) {
					if (error) {
					  // The write failed...
					} else {
					  // Data saved successfully!
						//addProductForm.reset();
						window.location = "<?= base_url(); ?>MyAccount/AddressBook"
					}
				});
			}else{
				window.location = "<?= base_url(); ?>"
			}
		})
	})
</script>

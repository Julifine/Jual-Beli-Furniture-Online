<style>
	.jmb-item{
		color: white;
		font-weight: 600
	}
	
	.jmb-isi{
		color: white;
	}
	
	.left-item{
		color: white;
	}
	
	.left-item:hover{
		color: #808080;
		text-decoration: none
	}
	
	.jmb-isi:hover{
		color: #808080;
		text-decoration: none
	}
</style>

<div style="margin-left: auto;margin-right: auto" class="features19 cid-rFh1Nopgcw">
	<div class="container" style="">
		<div class="row" style="margin-top: 100px;">
			<div class="col-2">
				<div class="row" style="">
					<a href="<?=base_url();?>MyAccount" class="left-item" style="font-size: 18px;font-weight: 600">MY ACCOUNT</a>
				</div>
				<div class="row" style="padding-top: 28px;">
					<a href="<?=base_url();?>MyAccount/Profile" class="left-item">Profile</a>
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
			<div class="col-5" style="">
				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: #4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">PROFILE</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Update your personal details</a>
								</div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Change your email address</a>
								</div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">Change your password</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="display: none" id="savedCart">
					<div class="jumbotron" style="width: 80%;background-color: #4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">SAVED CART</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">View your saved carts</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="display: none" id="userData">
					<div class="jumbotron" style="width: 80%;background-color: #4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">DATA USERS</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">View user data</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="">
					<div class="jumbotron" style="width: 80%;background-color: #4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">DELETE ACCOUNT</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px;margin-top:10px">
									<button style="background-color: red;border: none;border-radius: 10px;font-size: 16px;padding: 6px;width: 100%;color: white">DELETE MY ACCOUNT</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-5" style="">
				<div class="row" style="display: none" id="addressUser">
					<div class="jumbotron" style="width: 80%;background-color: #4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">ADDRESS BOOK</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="<?=base_url();?>User/MyAccount/AddressBook" class="jmb-isi">Manage your delivery addresses</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="display: none" id="addressAdmin">
					<div class="jumbotron" style="width: 80%;background-color: #4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">ADDRESS BOOK</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="<?=base_url();?>User/MyAccount/AddressBook" class="jmb-isi">Manage your addresses</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="display: none" id="orderHistoryUser">
					<div class="jumbotron" style="width: 80%;background-color:#4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">ORDER HISTORY</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">View your order history</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row" style="display: none" id="orderHistoryAdmin">
					<div class="jumbotron" style="width: 80%;background-color:#4d4d4d;padding: 30px;height: 200px">
						<div class="container" style="padding: 0px">
							<div class="row" style="padding: 0px">
								<div class="col-12" style="padding: 0px">
									<span class="jmb-item">ORDER HISTORY</span>
								</div>
								<div class="dropdown-divider col-12" style="border: 0.5px solid white;margin-top: 20px"></div>
								<div class="col-12" style="padding: 0px">
									<a href="" class="jmb-isi">View product order history</a>
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
								if(childData.type == "admin"){
									document.getElementById("userData").style.display = "block"
									document.getElementById("addressAdmin").style.display = "block"
									document.getElementById("orderHistoryAdmin").style.display = "block"
									document.getElementById("leftDataUsers").style.display = "block"
								}else{
									document.getElementById("savedCart").style.display = "block"
									document.getElementById("addressUser").style.display = "block"
									document.getElementById("orderHistoryUser").style.display = "block"
									document.getElementById("leftSavedCart").style.display = "block"
								}
							}
						})
					})
				}
		})
	}
</script>
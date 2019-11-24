<style>
	#paymentMethod:hover{
		cursor: pointer;
	}
	
	.btn-putih:hover{
		cursor: pointer
	}
	
	.btn-putih{
		background-color: white;
		color: black;
		padding: 10px;
		border: none;
		border-radius: 8px
	}
	
	.btn-border{
		background-color: transparent;
		color: white;
		padding: 10px;
		border: none;
		border-radius: 8px
	}
	
	.btn-border:hover{
		cursor: pointer
	}
</style>
<?php $i = 0; foreach($item as $item): ?>
<input type="text" value="<?= $item->productName; ?>" style="display: none" id="productName-<?= $i; ?>">
<input type="text" value="<?= $item->productCategory;?>" style="display: none" id="productCategory-<?= $i; ?>">
<input type="text" value="<?= $item->roomCategory;?>" style="display: none" id="roomCategory-<?= $i; ?>">
<input type="text" value="<?= $item->amount;?>" style="display: none" id="amount-<?= $i; ?>">
<?php $i = $i + 1; endforeach; ?>
<input type="text" value="<?= $item->price; ?>" style="display: none" id="totalprice">
<section style="background-color: #808080;min-height: 86.3%" class="features19 cid-rFh1Nopgcw">    
<div>
<div class="container">
	<div class="row" style="margin-top: 30px;background-color: rgba(51,51,51,0.2);padding: 10px">
		<div class="col-6">
			<span style="font-size: 20px;color: white;font-weight: 600">TOTAL INVOICE</span>
		</div>
		<div class="col-6" style="text-align: right">
			<span style="font-size: 20px;color: white;font-weight: 600">Rp <?= number_format($item->price,0,'.','.') ?><i class="fas fa-info-circle fa-xs" style="color: rgb(240, 144, 8)"></i></span>
		</div>
	</div>
	<div class="row" style="margin-top: 20px;background-color: rgba(51,51,51,0.2);padding: 10px" id="paymentMethod" onClick="paymentMethod()">
		<div class="col-6">
			<span style="font-size: 20px;color: white;font-weight: 600">PAYMENT METHOD</span>
		</div>
		<div class="col-6" style="text-align: right">
			<span style="font-size: 18px;color: white;font-weight: 600">SELECT METHOD <i class="fas fa-chevron-circle-up fa-sm" id="icon-dropdown"></i></span></span>
		</div>
	</div>
	<div class="row" style="background-color: rgba(51,51,51,0.2);padding: 10px;" id="paymentMethodMenu" data-tags="show">
		<div class="container" id="mandiri">
			<div class="row">
				<div class="col-6">
					<span style="font-size: 16px;color: white;">Payment Recommendation</span>
				</div>
			</div>
			<div class="row" style="margin-top: 20px">
				<div class="col-6">
					<img src="<?= base_url();?>Assets/mandiri.jpg" alt="" width="80" height="40">
					<span style="color: white;margin-left: 10px;font-weight: 500">Mandiri Virtual Account</span>
				</div>
				<div class="col-6"style="padding: 0px" >
					<div class="container" style="padding: 0px">
						<div class="row">
							<div class="col-12" style="padding: 0px">
								<div style="color: white;margin-left: 10px;font-weight: 500">Virtual Account Number :</div>
								<div style="color: white;margin-left: 10px;font-weight: 600;font-size: 24px"><span id="virtualAcc"></span></div>
								<div style="margin-left: 10px;color: #0d0;font-size: 12px;font-weight: 500">checked in 10 minutes after payment is successful</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown-divider" style="padding: 0px;margin-top: 20px"></div>
			<div class="row" style="padding: 10px;padding-left: 0px;color: white;margin-top: 20px">
				<div class="col-6">
					<div style="font-size: 20px">Total Payment</div>
					<div style="color: rgb(240, 144, 8);font-size: 20px">Rp <?= number_format($item->price,0,'.','.') ?> <i class="fas fa-chevron-circle-down fa-xs"></i></div>
				</div>
				<div class="col-6" style="padding: 0px">
					<button class="btn-putih" style="width: 100%;background-color: white" onClick="payNow('Mandiri Virtual Account')"><b>PAY NOW</b></button>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p style="color: white">Pay for the order to the Virtual Account above before making an order again with the Virtual Account to keep the number the same. Only accept transfers from Bank Mandiri.<br>*Inter-bank transfer fees and transfer limitations may apply if you transfer from a bank other than Mandiri.</p>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;margin-bottom: 10px">
				<div class="col-12">
					<button type="button"  style="width: 100%; border: 1px white solid;color: white" class="btn-border" data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="static" data-keyboard="false" >Choose another payment method</button>
				</div>
			</div>
		</div>
		<div class="container" id="cod" style="display: none" >
			<div class="row" style="margin-top: 20px">
				<div class="col-6">
					<img src="<?= base_url();?>Assets/cod.png" alt="" width="80" height="40">
					<span style="color: white;margin-left: 10px;font-weight: 500">Cash on Delivery</span>
				</div>
			</div>
			<div class="dropdown-divider" style="padding: 0px;margin-top: 20px"></div>
			<div class="row" style="padding: 10px;padding-left: 0px;color: white;margin-top: 20px">
				<div class="col-6">
					<div style="font-size: 20px">Total Payment</div>
					<div style="color: rgb(240, 144, 8);font-size: 20px">Rp <?= number_format($item->price,0,'.','.') ?> <i class="fas fa-chevron-circle-down fa-xs"></i></div>
				</div>
				<div class="col-6" style="padding: 0px">
					<button class="btn-putih" style="width: 100%;background-color: white" onClick="payNow('Cash on Delivery')"><b>PROCESS NOW</b></button>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;margin-bottom: 10px">
				<div class="col-12">
					<button type="button"  style="width: 100%; border: 1px white solid;color: white" class="btn-border" data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="static" data-keyboard="false" >Choose another payment method</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="height: 50%">
	  <div class="modal-dialog modal-dialog-centered" role="document" style="height: 50%">
		<div class="modal-content" style="height: 50%">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Choose payment method</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="container" style="padding: 0px">
				  <div class="row">
					  <div class="col-2" style="padding: 0px;">
						  <img class="" src="<?= base_url();?>Assets/cod.png" alt="" width="80" height="40">
					  </div>
				  	  <div class="col-8" style="padding: 0px;">
						  <button class="btn-putih" style="width: 100%;text-align: left"  data-dismiss="modal" onClick="chooseMethod('COD')">Cash on Delivery</button>
					  </div>
					  <div class="col-2" style="padding: 0px;">
						  <button class="btn-putih" style="width: 100%;padding: 11px"  data-dismiss="modal" onClick="chooseMethod()"><i class="fas fa-chevron-right fa-sm"></i></button>
					  </div>
				  </div>
				  <div class="dropdown-divider" style="padding: 0px;"></div>
				  <div class="row">
					  <div class="col-2" style="padding: 0px;vertical-align: middle">
						  <img class="" src="<?= base_url();?>Assets/mandiri.jpg" alt="" width="80" height="40">
					  </div>
				  	  <div class="col-8" style="padding: 0px;">
						  <button class="btn-putih" style="width: 100%;text-align: left" data-dismiss="modal" onClick="chooseMethod('Mandiri')">Mandiri Virtual Account</button>
					  </div>
					  <div class="col-2" style="padding: 0px;">
						  <button class="btn-putih" style="width: 100%;padding: 11px"  data-dismiss="modal" onClick="chooseMethod()"><i class="fas fa-chevron-right fa-sm"></i></button>
					  </div>
				  </div>
			  </div>
		  </div>
		</div>
	  </div>
	</div>
</div>
	</div>
</section>
<script>
	function payAlert(){
			Swal.fire(
			  'Successfully',
			  'Thanks for purchasing our product!',
			  'success'
			).then((result) => {
				alert("coi")
			})
		}
	
	
	function payNow(method){
		var i = <?= $i ?>;
		console.log(i);
		for( var y = 0; y < i; y++){
			var productName = document.getElementById("productName-"+y).value;
			var productCategory = document.getElementById("productCategory-"+y).value;
			var roomCategory = document.getElementById("roomCategory-"+y).value;
			var amount = document.getElementById("amount-"+y).value;
			var price = document.getElementById("totalprice").value;
			var trans_method = method;
			
			var newAmount;
			
			firebase.database().ref("products/"+roomCategory+"/"+productCategory+"/").on('value', function(snapshot){
				var child = [];
				var key = [];
				snapshot.forEach(function(childSnapshot) {
					var childKey = childSnapshot.key;
					var childData = childSnapshot.val();
					child.push(childData);
					key.push(childKey);
				});
				for( var x = 0; x < child.length; x++){
						console.log(productName)
					if(productName == key[x]){
						newAmount = parseInt(child[x].stock) - parseInt(amount);
						console.log("child: "+child[x].stock)
						console.log("amount: "+amount)
						console.log(newAmount)
					}
				}
				
			})
			/*firebase.database().ref("products/"+roomCategory+"/"+productCategory+"/"+productName).update({
					stock:1
			})*/
		}
	
			/*
			
			firebase.auth().onAuthStateChanged(function(user){
				if	(user){
					var email = user.email;
					var dn = user.displayName;
					var UID = user.uid;
					var pp = user.photoURL;
					var phoneNumber = user.phoneNumber;
					var userRefs = firebase.database().ref("users");
					userRefs.once('value', function(snapshot) {
						snapshot.forEach(function(childSnapshot) {
							var childKey = childSnapshot.key;
							var childData = childSnapshot.val();
							if(user.uid == childKey){
								userRefs.child(UID+"/Cart").once('value', function(snapshot){
									var childCart = [];
									var cartKey = [];
									snapshot.forEach(function(childSnapshot) {
										var childKey = childSnapshot.key;
										var childData = childSnapshot.val();
										childCart.push(childData)
										cartKey.push(childKey)
									})
									for(var i = 0; i < childCart.length; i++){
										if(childCart[i].productCategory == objCart['productCategory'] && objCart['productName'] == cartKey[i]){
											userRefs.child(UID+"/Cart/"+cartKey[i]).remove()
										}
									}
								})
								var length;
								firebase.database().ref("transactions").once('value', function(snapshot) {
									var childD = [];
									var childAdd = [];
									snapshot.forEach(function(childSnapshot) {
										var childKey = childSnapshot.key;
										var childData = childSnapshot.val();
										childD.push(childData)
									})
									length = childD.length;
									userRefs.child(UID+"/address").once('value', function(snapshot){
										snapshot.forEach(function(childSnapshot) {
											var childKey = childSnapshot.key;
											var childData = childSnapshot.val();
											childAdd.push(childData)
										})
										var address = childAdd[0];
										var today = new Date();
										var dd = String(today.getDate()).padStart(2, '0');
										var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
										var yyyy = today.getFullYear();

										today = dd + '/' + mm + '/' + yyyy;
										firebase.database().ref("transaction/"+length).set({
											uid: UID,
											displayName: dn,
											phoneNumber: childData.phoneNumber,
											address: address,
											productName:objCart['productName'],
											amount:objCart['amount'],
											totalprice: objCart['price'],
											trans_method: objCart['trans_method'],
											date:today
										})
									})
								})
							}
						})
					})
				}
			})*/
		payAlert();
	}
	function showMethod(){
		document.getElementById("paymentMethodMenu").style.display = "block";
		document.getElementById("paymentMethodMenu").dataset.tags = "show"
		document.getElementById("icon-dropdown").className = "fas fa-chevron-circle-up fa-sm";
	}
	
	function hideMethod(){
		document.getElementById("paymentMethodMenu").style.display = "none";
		document.getElementById("paymentMethodMenu").dataset.tags = "hidden"
		document.getElementById("icon-dropdown").className = "fas fa-chevron-circle-down fa-sm";
	}
	function paymentMethod(){
		var methodMenu = document.getElementById("paymentMethodMenu").dataset.tags;
		if (methodMenu == "hidden"){
			showMethod();
		}else{
			hideMethod();
		}
	}
	
	var method = "Mandiri";
	
	function chooseMethod(metode){
		if(metode == "Mandiri"){
			document.getElementById("mandiri").style.display = "block";
			document.getElementById("cod").style.display = "none";
		}else{
			document.getElementById("mandiri").style.display = "none";
			document.getElementById("cod").style.display = "block";
		}
	}
	
	window.onload = function(){
		var phoneNumber = "081221098208"
		var virtualAcc = phoneNumber.replace(/(\d{4})/g, '$1 ').replace(/(^\s+|\s+$)/,'')
		document.getElementById("virtualAcc").innerHTML ="8806 "+ virtualAcc;
	}
</script>
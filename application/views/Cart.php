<style>
	
	.delete-link{
		font-size: 18px;
		font-weight: 500;
		color: white
	}
	
	input[type=checkbox]
	{
		-ms-transform: scale(1.5); /* IE */
	  	-moz-transform: scale(1.5); /* FF */
	  	-webkit-transform: scale(1.5); /* Safari and Chrome */
	  	-o-transform: scale(1.5); /* Opera */
	  	transform: scale(1.5);
	  	padding: 10px;
		outline: 0px!important
	}
	
	input[type=checkbox]:hover{
		cursor: pointer
	}
	
	.custom-control-label:hover{
		cursor: pointer
	}
	
	.custom-control-input:hover{
		cursor: pointer
	}
	
	.btn-amount:hover{
		cursor: pointer
	}
</style>
<section class="header1 cid-rFeBrAMgWL mbr-parallax-background" id="header16-v" style="background: none">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" id="title">CART</h1>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #808080;margin-top: -50px" class="features19 cid-rFh1Nopgcw">
<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="container">
				<div class="row" style="margin-left: 34px">
					<div class="col-9">
						<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="selectAll" checked >
						  <label class="custom-control-label" for="selectAll" style="color: white;transform: scale(1.5);">Select All Items</label>
						</div>
					</div>
<!--
					<div class="col-3" style="text-align: right">
						<a href="" class="delete-link">Delete</a>
					</div>
-->
				</div>
				<div style="border: 3px solid rgba(0,0,0,0.15);margin-top: 20px"></div>
				<div class="row">
					<div class="col-12">
						<div class="container">
							<div class="row">
								<div class="col-12" style="margin-top: 20px">
									<div class="container" style="width: 100%;padding: 0px" id="divContainer">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4" style="background-color: rgba(0,0,0,0.15);border-radius: 10px;height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12" style="margin-top: 20px;font-weight: 600;font-size: 18px;color: white;padding: 0px">
						<span>Shopping Summary</span>
					</div>
					<div style="border: 1px solid white;margin-top: 20px;width: 100%;"></div>
					<div class="container" style="padding: 0px;width: 100%;margin: 0px">
						<div class="row" style="width: 100%;margin: 0px;margin-top: 20px">
							<div class="col-6" style="width: 100%;padding: 0px;margin: 0px">
								<span style="color: white">Total Price</span>
							</div>
							<div class="col-6" style="text-align: right;padding: 0px;margin: 0px">
								<input type="number" style="display: none" id="totPrice" value="">
								<span style="color: white;font-weight: 600" id="spanPrice"></span>
								<span style="color: white;font-weight: 600;display: none" id="spanPriceNull">-</span>
							</div>
						</div>
					</div>
					<div class="col-12" style="padding: 0px;margin-top: 20px;margin-bottom: 20px">
						<button class="btn-amount" style="width: 100%;font-size: 18px;padding: 6px;background-color: #0d0;border: none;border-radius: 10px;display: none" id="btn-buy" onClick="onBuy()"></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div></section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
<script src='https://javascriptbase64.googlecode.com/files/base64.js' type='text/javascript'></script>
<script>
		
	function buyAlert(){
		Swal.fire(
		  'Warning!',
		  'Please select an item, at least one!',
		  'warning'
		)
	}
	
	function onBuy(){
		firebase.auth().onAuthStateChanged(function(user){
					if	(user){
						var email = user.email;
						var dn = user.displayName;
						var UID = user.uid;
						var pp = user.photoURL;
						var phoneNumber = user.phoneNumber;
						firebase.database().ref("users/"+UID+"/Cart").once('value', function(snapshot) {
							var child = [];
							var key = [];
							snapshot.forEach(function(childSnapshot) {
								var childKey = childSnapshot.key;
								var childData = childSnapshot.val();
								child.push(childData);
								key.push(childKey);
							});
							var listObjCart = [];
							for( var y = 0; y < child.length; y++){
								var objCart = {};
								if($('#checkbox-'+y).prop("checked") == true){
									objCart['productCategory'] = document.getElementById("label-"+y).dataset.tags;
									objCart['amount'] = (document.getElementById("input-amount-"+y).value);
									objCart['price'] = (document.getElementById("input-price-"+y).value);
									objCart['totalPrice'] = (document.getElementById("input-totprice-"+y).value);
									objCart['productName'] = document.getElementById("spanName-"+y).innerHTML;
									objCart['roomCategory'] = document.getElementById("checkbox-"+y).dataset.tags;
									objCart['productImage'] = document.getElementById("image-"+y).src;
									listObjCart.push(objCart);
								}
							}

							if(listObjCart.length != 0){
								for(var i = 0; i < listObjCart.length;i++){
									console.log("products/"+listObjCart[i]['roomCategory']+"/"+listObjCart[i]['productCategory']+"/"+listObjCart[i]['productName'])
									window.amount = listObjCart[i]['amount'];
									firebase.database().ref("products/"+listObjCart[i]['roomCategory']+"/"+listObjCart[i]['productCategory']+"/"+listObjCart[i]['productName']).once('value', function(snapshot) {
										var productChild = [];
										var productKey = [];
										snapshot.forEach(function(childSnapshot) {
											var childKey = childSnapshot.key;
											var childData = childSnapshot.val();
											productChild.push(childData);
											productKey.push(childKey);
										});
										if(window.amount > productChild[6]){
											buyAlert();
										}else{
											var objJsonStr = btoa(JSON.stringify(listObjCart))
											window.location = "<?= base_url(); ?>Home/Checkout?item="+objJsonStr;
										}
									});
								}
							}else{
								buyAlert();
							}
						});
					}
		});
	}
	
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);
				
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
	
		function checklist(){
			return function(){
				const formatter = new Intl.NumberFormat('id-ID', {
				  style: 'currency',
				  currency: 'IDR',
				  minimumFractionDigits: 0
				});
				firebase.auth().onAuthStateChanged(function(user){
					if	(user){
						var email = user.email;
						var dn = user.displayName;
						var UID = user.uid;
						var pp = user.photoURL;
						var phoneNumber = user.phoneNumber;
						firebase.database().ref("users/"+UID+"/Cart").once('value', function(snapshot) {
							var child = [];
							var key = [];
							snapshot.forEach(function(childSnapshot) {
								var childKey = childSnapshot.key;
								var childData = childSnapshot.val();
								child.push(childData);
								key.push(childKey);
							});
							window.value = 0;
							var totPrice = 0;
							for( var y = 0; y < child.length; y++){
								if($('#checkbox-'+y).prop("checked") == true){
									window.value = window.value + 1;
									totPrice = totPrice + parseInt(document.getElementById("input-totprice-"+y).value);
								}else{
									document.getElementById("selectAll").checked = false;
								}
							}
							if (child.length == window.value){
								document.getElementById("btn-buy").innerHTML = "Buy("+child.length+")";
								document.getElementById("selectAll").checked = true;
								document.getElementById("btn-buy").style.backgroundColor = "#0d0";
								document.getElementById("spanPriceNull").style.display = "none";
								document.getElementById("btn-buy").style.color = "black";
								document.getElementById("spanPrice").style.display = "block";
								document.getElementById("spanPrice").innerHTML = formatter.format(totPrice);
							}else if (window.value == 0){
								document.getElementById("btn-buy").innerHTML = "Buy";
								document.getElementById("btn-buy").style.backgroundColor = "#808080";
								document.getElementById("btn-buy").style.color = "white";
								document.getElementById("spanPriceNull").style.display = "block";
								document.getElementById("spanPrice").style.display = "none";
							}else{
								document.getElementById("btn-buy").innerHTML = "Buy("+window.value+")";
								document.getElementById("btn-buy").style.backgroundColor = "#0d0";
								document.getElementById("btn-buy").style.color = "black";
								document.getElementById("spanPriceNull").style.display = "none";
								document.getElementById("spanPrice").style.display = "block";
								document.getElementById("spanPrice").innerHTML = formatter.format(totPrice);
								
							}
						});
					}
				});
			}
		}
	
	    $(document).ready(function(){
			$('#selectAll').click(function(){
				if($(this).prop("checked") == true){
					firebase.auth().onAuthStateChanged(function(user){
						if	(user){
							var email = user.email;
							var dn = user.displayName;
							var UID = user.uid;
							var pp = user.photoURL;
							var phoneNumber = user.phoneNumber;
							firebase.database().ref("users/"+UID+"/Cart").once('value', function(snapshot) {
								var child = [];
								var key = [];
								snapshot.forEach(function(childSnapshot) {
									var childKey = childSnapshot.key;
									var childData = childSnapshot.val();
									child.push(childData);
									key.push(childKey);
								});
								for( var y = 0; y < child.length; y++){
									document.getElementById("checkbox-"+y).checked = true;
								}
								document.getElementById("btn-buy").innerHTML = "Buy("+child.length+")";
								document.getElementById("btn-buy").style.backgroundColor = "#0d0";
								document.getElementById("btn-buy").style.color = "black";
								document.getElementById("spanPriceNull").style.display = "none";
								document.getElementById("spanPrice").style.display = "block";
							});
						}
					});
				}
				else{
					firebase.auth().onAuthStateChanged(function(user){
						if	(user){
							var email = user.email;
							var dn = user.displayName;
							var UID = user.uid;
							var pp = user.photoURL;
							var phoneNumber = user.phoneNumber;
							firebase.database().ref("users/"+UID+"/Cart").once('value', function(snapshot) {
								var child = [];
								var key = [];
								snapshot.forEach(function(childSnapshot) {
									var childKey = childSnapshot.key;
									var childData = childSnapshot.val();
									child.push(childData);
									key.push(childKey);
								});
								for( var j = 0; j < child.length; j++){
									document.getElementById("checkbox-"+j).checked = false;
								}
								document.getElementById("btn-buy").innerHTML = "Buy";
								document.getElementById("btn-buy").style.backgroundColor = "#808080";
								document.getElementById("btn-buy").style.color = "white";
								document.getElementById("spanPriceNull").style.display = "block";
								document.getElementById("spanPrice").style.display = "none";
							});
						}
					});
				}
			});
			
			
		});
	
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
						if (UID == childKey){
							if (childData.type == "admin"){
								document.getElementById("cart").style.display = "none";
								window.location = "<?= base_url(); ?>"
							}else{
								document.getElementById("cart").style.display = "block";
								firebase.database().ref("users/"+UID+"/Cart").once('value', function(snapshot) {
									var child = [];
									var key = [];
									snapshot.forEach(function(childSnapshot) {
										var childKey = childSnapshot.key;
										var childData = childSnapshot.val();
										child.push(childData);
										key.push(childKey);
									});
									if(child.length != 0){
										var totalPrice = 0;
										const formatter = new Intl.NumberFormat('en-US', {
										  style: 'currency',
										  currency: 'IDR',
										  minimumFractionDigits: 0
										});
										var totalPrice = 0;
										window.i = child.length
										for (var i = 0; i < child.length;i++){

											var divRow = document.createElement("div");
											divRow.className = "input-group-text row";
											divRow.style.backgroundColor = "transparent";
											divRow.style.border = "none";
											divRow.style.padding = "0px";
											divRow.style.width = "100%";
											divRow.style.marginTop = "20px";
											document.getElementById("divContainer").appendChild(divRow);

											var divCheck = document.createElement("div");
											divCheck.className = "col-1 custom-control custom-checkbox";
											divRow.appendChild(divCheck);

											var inputCheckBox = document.createElement("input");

											inputCheckBox.type = "checkbox";
											inputCheckBox.className = "form-control custom-control-input";
											inputCheckBox.id = "checkbox-"+i;
											inputCheckBox.onclick = checklist();
											inputCheckBox.dataset.tags = child[i].roomCategory;

											var labelCheckBox = document.createElement("label");

											labelCheckBox.htmlFor = "checkbox-"+i;
											labelCheckBox.className = "custom-control-label";
											labelCheckBox.style.transform = "scale(1.5)";
											labelCheckBox.style.marginLeft = "30px";
											labelCheckBox.id = "label-"+i
											labelCheckBox.dataset.tags = child[i].productCategory

											divCheck.appendChild(inputCheckBox);
											divCheck.appendChild(labelCheckBox);

											var divImage = document.createElement("div");
											divImage.className = "col-4";
											divRow.append(divImage);

											var img = document.createElement("img");
											img.src = child[i].productImage;
											img.className = "nav-link language";
											img.width = "120"
											img.height = "120"
											img.style.borderRadius = "50%"
											img.style.padding = "0px"
											img.id = "image-"+i
											divImage.appendChild(img)

											var divName = document.createElement("div");
											divName.className = "col-4";
											divRow.append(divName);

											var divRowName = document.createElement("div")
											divRowName.className = "row"
											divName.appendChild(divRowName)

											var spanName = document.createElement("span")
											spanName.style.fontSize = "24px"
											spanName.style.color = "white"
											spanName.style.fontWeight = "600"
											spanName.id = "spanName-"+i
											spanName.innerHTML = child[i].productName
											divRowName.appendChild(spanName)

											var divRowPrice = document.createElement("div")
											divRowPrice.className = "row"
											divName.appendChild(divRowPrice)

											var spanPrice = document.createElement("span")
											spanPrice.style.fontSize = "24px"
											spanPrice.style.color = "white"
											spanPrice.style.fontWeight = "600"
											spanPrice.innerHTML = formatter.format(child[i].price)
											divRowPrice.appendChild(spanPrice)

											var inputPrice = document.createElement("input")
											inputPrice.style.fontSize = "24px"
											inputPrice.style.color = "black"
											inputPrice.style.fontWeight = "600"
											inputPrice.id = "input-price-"+i;
											inputPrice.style.display = "none"
											inputPrice.value = parseInt(child[i].price) 
											divRowPrice.appendChild(inputPrice)

											var inputTotPrice = document.createElement("input")
											inputTotPrice.style.fontSize = "24px"
											inputTotPrice.style.color = "black"
											inputTotPrice.style.fontWeight = "600"
											inputTotPrice.id = "input-totprice-"+i;
											inputTotPrice.style.display = "none"
											inputTotPrice.value = child[i].totalPrice
											divRowPrice.appendChild(inputTotPrice)

											var divOperasi = document.createElement("div")
											divOperasi.className = "col-3"
											divRow.appendChild(divOperasi)

											var btnPlus = [];
											
											var btnMinus = document.createElement("button")
											btnMinus.className = "btn-amount"
											btnMinus.style.border = "none"
											btnMinus.style.backgroundColor = "rgba(0,0,0,0.1)"
											btnMinus.style.width = "30px"
											btnMinus.style.height = "30px"
											btnMinus.style.borderRadius = "50%"
											btnMinus.style.color = "white"
											btnMinus.style.fontWeight = "bolder"
											btnMinus.innerHTML = "-"
											btnMinus.id = "btn-minus-"+i;
											btnMinus.onclick = minAmount(child.length,i,child[i].price)
											divOperasi.appendChild(btnMinus)

											var inputAmount = document.createElement("input")
											inputAmount.onkeypress = "isInputNumber(event)"
											inputAmount.type = "text"
											inputAmount.id = "input-amount-"+i;
											inputAmount.style.width = "40px"
											inputAmount.style.backgroundColor = "transparent"
											inputAmount.style.border = "none"
											inputAmount.style.borderBottom = "1px solid rgba(0,0,0,0.3)"
											inputAmount.style.color = "white"
											inputAmount.style.textAlign = "center"
											inputAmount.value = child[i].qty
											inputAmount.onchange = inputAmounts(child.length,i,child[i].price);
											divOperasi.appendChild(inputAmount)

											var btnPlus = document.createElement("button")
											btnPlus.className = "btn-amount"
											btnPlus.style.border = "none"
											btnPlus.style.backgroundColor = "rgba(255,255,255)"
											btnPlus.style.width = "30px"
											btnPlus.style.height = "30px"
											btnPlus.style.borderRadius = "50%"
											btnPlus.style.color = "#808080"
											btnPlus.style.fontWeight = "bolder"
											btnPlus.innerHTML = "+"
											btnPlus.id = "btn-plus-"+i;
											btnPlus.onclick = plusAmount(child.length,i,child[i].price)
											divOperasi.appendChild(btnPlus)

											var btnDelete = document.createElement("button")
											btnDelete.className = "fas fa-trash-alt btn-amount"
											btnDelete.style.border = "none"
											btnDelete.style.backgroundColor = "rgba(255,255,255)"
											btnDelete.style.width = "30px"
											btnDelete.style.height = "30px"
											btnDelete.style.borderRadius = "50%"
											btnDelete.style.color = "#808080"
											btnDelete.style.fontWeight = "bolder"
											btnDelete.style.marginLeft = "20px"
											divOperasi.appendChild(btnDelete)

											totalPrice = totalPrice + child[i].totalPrice;
											
										}

										document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);
										document.getElementById("totPrice").value = totalPrice;
										if(child.length != 0){
											if($('#selectAll').prop("checked") == true){
												for( var y = 0; y < child.length; y++){
													document.getElementById("checkbox-"+y).checked = true;
												}
												document.getElementById("btn-buy").innerHTML = "Buy("+child.length+")";
												document.getElementById("btn-buy").style.display = "block";
											}
										}else{
											alert("sweet")
												document.getElementById("btn-buy").innerHTML = "Buy";
												document.getElementById("btn-buy").style.display = "block";
										}
									}else{
										console.log("Gaa Ada!");
										document.getElementById("cart-empty").style.display = "flex";
										document.getElementById("cart-avail").style.display = "none";
									}
								});
							}
						} 
					});
				});
				document.getElementById("user-none").style.display = "none";
				document.getElementById("user-avail").style.display = "block";
			}else{
				document.getElementById("user-none").style.display = "block";
				document.getElementById("user-avail").style.display = "none";
			}
		});
	}
		
	function inputAmounts(k , i, price){
		return function(){
			const formatter = new Intl.NumberFormat('id-ID', {
			  style: 'currency',
			  currency: 'IDR',
			  minimumFractionDigits: 0
			});
			if(document.getElementById("input-amount-"+i).value < 1){
				document.getElementById("input-amount-"+i).value = 1; 
				var totalPrice = 0;
				for (var x = 0; x < k; x++){
					var newAmount = 0;
					var newPrice = 0;
					newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
					newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
					totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
					var prices = price * 1;
				}
			}else{
				var totalPrice = 0;
				for (var x = 0; x < k; x++){
					var newAmount = 0;
					var newPrice = 0;
					newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
					newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
					totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
					var prices = parseInt(price) * parseInt(document.getElementById("input-amount-"+i).value)
				}
			}
			document.getElementById("input-totprice-"+i).value = prices; 
			document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);
		}
	}
	
	function plusAmount(k,i,price){
		return function(){
			console.log(k)
			console.log("counter i: "+i)
			const formatter = new Intl.NumberFormat('id-ID', {
			  style: 'currency',
			  currency: 'IDR',
			  minimumFractionDigits: 0
			});
			var value = parseInt(document.getElementById("input-amount-"+i).value);
			var result = value + 1;
			document.getElementById("input-amount-"+i).value = result;


			var totalPrice = 0;
			for (var x = 0; x < k; x++){
				var newAmount = 0;
				var prices;
				var newPrice = 0;
				newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
				newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
				totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
				prices = price * result;
			}
			document.getElementById("input-totprice-"+i).value = prices; 
			document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);	
		}
	}
	
	function minAmount(k,i,price){
		return function(){
			const formatter = new Intl.NumberFormat('id-ID', {
			  style: 'currency',
			  currency: 'IDR',
			  minimumFractionDigits: 0
			});
			console.log(document.getElementById("input-amount-"+i).value);
			var value = parseInt(document.getElementById("input-amount-"+i).value);
			if (value != 1){
				var result = value - 1;
				document.getElementById("input-amount-"+i).value = result;
				var prices = result * price;

				var totalPrice = 0;
				for (var x = 0; x < k; x++){
					var newAmount = 0;
					var prices;
					var newPrice = 0;
					newAmount = newAmount+ parseInt(document.getElementById("input-amount-"+x).value);
					newPrice = newPrice + parseInt(document.getElementById("input-price-"+x).value);
					totalPrice = totalPrice + (parseInt(newAmount) * parseInt(newPrice));
					prices = price * result;
				}
				document.getElementById("input-totprice-"+i).value = prices; 
				document.getElementById("spanPrice").innerHTML = formatter.format(totalPrice);
			}
		}
	}
</script>
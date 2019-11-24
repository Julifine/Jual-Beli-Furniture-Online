<style>
	.btn-order:hover{
		cursor: pointer
	}
</style>

<section class="header1 cid-rFeBrAMgWL mbr-parallax-background" id="header16-v" style="background: none">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" id="title">CHECKOUT</h1>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #808080;margin-top: -50px" class="features19 cid-rFh1Nopgcw">    
<div>
    <div class="container" style="margin-top: -50px;color: rgb(89,141,193);">
        <p style="font-size: 32px;padding-top: 4px;color: white"><i class="fas fa-map-marked-alt mr-2"></i>LOCATION ADDRESS</p>
        <div class="row">
            <div class="col-sm-4">
				<strong style="color: rgb(3,3,3);text-transform: uppercase;color: white" id="displayName"></strong>
                <p style="color: white;margin-top: 30px" id="phoneNumber"></p>
            </div>
            <div class="col-sm-4">
                <p style="color: white;float:center;" id="address"></p>
            </div>
            <div class="col-sm-4"><button class="" type="button" style="float:right;background-color : red;display: none;width: 80px;height: 40px;border: none;border-radius: 5px;color: white" id="btn-change">Change</button></div>
        </div>
    </div>
    <div class="container" style="margin-top:30px;color: white;">
        <div class="row">
			<div class="col-sm-4" style="float:right;">
            </div>
            <div class="col-sm-4 ml-auto" style="float:right;">
                <strong><p style="text-align: center;color: white">AMOUNT</p></strong>
            </div>
            <div class="col-sm-3" >
                <strong><p style="text-align: center;color: white">SUB TOTAL</p></strong>
            </div>
        </div>
    </div>
    <div class="container" style="color: white">
		<?php $totalPrice = 0;$i= 0; foreach($item as $items):?>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-4" style="">
				<div class="container" style="padding: 0px">
					<div class="row" style="">
						<div class="col-4" style="">
							<img src="<?= $items->productImage?>" width="200" height="200"  alt="" style="border-radius:10px;" id="productImage-<?=$i;?>" data-tags="<?= $items->roomCategory ?>"/>
						</div>
						<div class="col-8" style="position: relative">
							<div style="position: relative;top: 50%;left: 100%;transform: translate(-50%,-50%)">
								<div style="font-size: 30px;font-weight: 500" id="productName-<?= $i ?>" data-tags="<?= $items->productCategory ?>"><?= $items->productName ?></div>
								<div style="font-size: 24px;font-weight: bolder">IDR <?= number_format($items->price,0,'.',','); ?></div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="col-4  ml-auto" style="float:right;">
				<div style="text-align: center;font-size: 30px;font-weight: 500;margin-top: 80px" id="amount-<?= $i; ?>"><?= $items->amount ?></div>
			</div>
            <div class="col-3" style="float:right;">
				<div style="text-align: center;font-size: 30px;font-weight: 500;margin-top: 80px">IDR <?= number_format($items->totalPrice,0,'.',','); ?></div>
			</div>
        </div>
		<?php $totalPrice = $totalPrice + $items->totalPrice;$i = $i +1; endforeach; ?>
    </div>
    <div class="container" style="color: white;margin-top: 30px;">
        <div class="row">
            <div class="col-sm-12" style="padding-top:10px;background-color: rgba(51,51,51,0.15);border-radius: 10px 10px 0px 0px"><strong style="color:white;font-size: 30px;">TO BE PAID</strong></div>
        </div>
    </div>
    <div class="container" style="background-color: rgba(51,51,51,0.15)">
        <div class="row" style="margin-left: 200px">
            <div class="col-sm-9">
                <p style="font-size: 20px;color:white;float: right;margin-top: 20px;">Sub Total For Product :</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 20px;color: white;margin-top: 20px;">IDR <?= number_format($totalPrice,0,'.',','); ?></p>
            </div>
            <div class="col-sm-9">
                <p style="font-size: 20px;color:white;float: right;margin-top: 20px;">Shipping Cost :</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 20px;color:white;margin-top: 20px;">
					<?php
						if($totalPrice > 10000000){
							echo "FREE";
						}else{
							echo "IDR 200,000";
						}
					?>
				</p>
            </div>
            <div class="col-sm-9">
                <p style="font-size: 20px;color:white;float: right;margin-top: 20px;">Total Payment :</p>
            </div>
            <div class="col-sm-3">
                <p style="font-size: 24px;color: white;margin-top: 20px;font-weight:bold;">
				<?php
					if($totalPrice > 10000000){
						echo "IDR ".number_format($totalPrice,0,'.',',');;
					}else{
						echo "IDR ".number_format(($totalPrice+200000),0,'.',',');;
					}
				?>
				</p>
				<input type="number" value="<?php
					if($totalPrice > 10000000){
						echo $totalPrice;
					}else{
						echo $totalPrice+200000;
					}
				?>" style="display: none" id="totalPrice">
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #ffffff;color: rgb(89,141,193);padding: 0px;border-radius: 0px 0px 10px 10px">
        <div class="row">
            <div class="col-sm-12">
				<button onClick="onMakeAnOrder()" class="btn-order" type="button" style="background-color: white;color: rgb(0,0,0);border: none;border-radius: 10px;width: 100%;padding: 20px;font-size: 20px;font-weight: 500">MAKE AN ORDER</button>
			</div>
        </div>
    </div>
		
	</div>
</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script>
		function orderAlert(){
			Swal.fire(
			  'Warning!',
			  'Please fill in your phone number and your address first!',
			  'warning'
			)
		}
		
		function onMakeAnOrder(){
			var phoneNumber = document.getElementById("phoneNumber").innerHTML;
			var address = document.getElementById("address").innerHTML;
			if(phoneNumber == "-" || phoneNumber == "" || address == "-" || address == ""){ 
				orderAlert();
			}else{
				var i = <?= $i ?>;
				console.log(i);
				var listObjCart = [];
				for( var y = 0; y < i; y++){
					var objCart = {};
					objCart['productName'] = document.getElementById("productName-"+y).innerHTML;
					objCart['productCategory'] = document.getElementById("productName-"+y).dataset.tags;
					objCart['amount'] = (document.getElementById("amount-"+y).innerHTML);
					objCart['roomCategory'] = document.getElementById("productImage-"+y).dataset.tags;
					objCart['price'] = document.getElementById("totalPrice").value;
					listObjCart.push(objCart);
				}

				if(listObjCart.length != 0){
					var objJsonStr = btoa(JSON.stringify(listObjCart))
					window.location = "<?= base_url(); ?>Home/Payment?obj="+objJsonStr;
				}else{
					buyAlert();
				}
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
									if(childData.type == "user"){
										document.getElementById("displayName").innerHTML = childData.displayName
										document.getElementById("phoneNumber").innerHTML = childData.phoneNumber
										if (childData.address == null){
											document.getElementById("address").innerHTML = "-"
										}else{
											firebase.database().ref("users/"+UID+"/address").once('value', function(snapshot) {
												var childD = []
												snapshot.forEach(function(childSnapshot) {
													var childKey = childSnapshot.key;
													var childData = childSnapshot.val();
													childD.push(childData);
												})
												document.getElementById("address").innerHTML = childD[0].street + ", "+childD[0].street2+", "+childD[0].building+", "+childD[0].city + ", "+childD[0].province+", "+childD[0].zip
											})
										}
										if (childData.address == null || childData.phoneNumber == '-'){
											document.getElementById("btn-change").style.display = "block"
											document.getElementById("btn-change").style.backgroundColor = "red"
										}else{
											document.getElementById("btn-change").style.display = "block"
											document.getElementById("btn-change").style.backgroundColor = "#0d0"
											document.getElementById("btn-change").style.color = "black"
										}
									}
								}
							})
						})
					}
			})
		}
	</script>
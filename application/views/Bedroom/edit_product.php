<section class="header1 cid-rFeBrAMgWL mbr-parallax-background" id="header16-v">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">WARDROBE</h1>
            </div>
        </div>
    </div>
</section>

<section class="features19 cid-rFh1Nopgcw" id="features19-2h">
  <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8" style="color: white">
              <h1>EDIT PRODUCT</h1>
            </div>
        </div>
  </div>

  <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
				<!--<div class="alert alert-warning" role="alert" id="alert-warn" style="display: none">
				</div>-->
                <form method="POST" class="mbr-form form-with-styler" id="addProductWardrobe">
                  <input type="hidden" name="email" data-form-email="true" value="">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Room's Category</label>
                            <input type="text" name="roomCategory" data-form-field="Name" required="required" class="form-control display-7 roomCategory" id="roomCategory" readonly value="<?= $roomCategory;?>">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Product's Category</label>
                            <input type="text" name="productCategory" data-form-field="Name" required="required" class="form-control display-7" id="productCategory" readonly value="<?= $productCategory;?>">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Product Name</label>
                            <input type="text" name="productName" data-form-field="Name" required="required" class="form-control display-7" id="productName">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Price</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">IDR</span>
							  	</div>
							  	<input type="text" class="form-control display-7" aria-label="Amount (to the nearest IDR)" required="required" data-form-field="Name" name="price" id="price" onKeyPress="isInputNumber(event)">
							</div>
                        </div>
                        <div class="col-md-2  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Stock</label>
                            <input type="text" name="stock" data-form-field="Name" required="required" class="form-control display-7" id="stock" onKeyPress="isInputNumber(event)">
                        </div>
                        <div data-for="message" class="col-md-12 form-group" style="color: white">
                            <label for="message-form1-53" class="form-control-label mbr-fonts-style display-7">Short Description</label>
                            <textarea name="desc" data-form-field="Message" class="form-control display-7" id="desc"></textarea>
                        </div>
						<div data-for="message" class="col-md-12 form-group" style="color: white">
                            <label for="message-form1-53" class="form-control-label mbr-fonts-style display-7">Product Image</label>
							<img id="productImage" src="<?= base_url(); ?>assets/bg/no_image.jpg" alt="" class="form-control" style="height: 200px;width: 200px;padding: 0px" id="productImage">
                            <input type="file" name="uploadImage" data-form-field="Name" class="form-control" id="uploadImage" style="background-color: transparent;border: none;color: white;padding: 0px;margin-top: 10px" accept=".jpg, .png, .jpeg" multiple accept='image/*'>
                        </div>
                        <div class="col-md-12 input-group-btn">
							<a href="javascript:stringSplit('<?=$productName;?>')" id="btn-cancel" class="btn btn-primary btn-form-product display-4" style="margin-right: 10px;background-color: #808080!important;border:#808080 solid!important;color: white!important;border-radius: 20px!important">CANCEL</a>
                          	
							<button type="submit" class="btn btn-primary btn-form-product display-4" style="border-radius: 20px!important">ADD NOW</button>
                        </div>
						<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-warn" style="width: 100%;display: none;margin-top: 10px">
							<span id="alert-message" style="margin-right: 50px;font-size: 18px;padding:10px"></span>
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin: 0px">
								<span aria-hidden="true">&times;</span>
						  	</button>
						</div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>
<script>  
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);
				
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
	
	var rupiah = document.getElementById("price");
	rupiah.addEventListener("keyup", function(e) {
	  rupiah.value = formatRupiah(this.value, "IDR ");
	});

	function formatRupiah(angka, prefix) {
	  var number_string = angka.replace(/[^,\d]/g, "").toString(),
		split = number_string.split(","),
		sisa = split[0].length % 3,
		rupiah = split[0].substr(0, sisa),
		ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	  // tambahkan titik jika yang di input sudah menjadi angka ribuan
	  if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	  }

	  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	  return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
	}
	
	function formatString(angka, prefix) {
	  var number_string = angka.replace(/[^,\d]/g, "").toString(),
		split = number_string.split(","),
		sisa = split[0].length % 3,
		rupiah = split[0].substr(0, sisa),
		ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	  // tambahkan titik jika yang di input sudah menjadi angka ribuan
	  if (ribuan) {
		separator = sisa ? "" : "";
		rupiah += separator + ribuan.join("");
	  }

	  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	  return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
	}
	
	var selectedFile;
	
	$("#uploadImage").change(function () {
		if(this.files[0].name.match(".jp") || this.files[0].name.match(".png")){
			selectedFile = this.files[0];
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#productImage').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		}else if(this.files[0] == null){
			selectedFile =  null;
		}else{
			alert("Sorry only jpeg images are accepted");
			document.getElementById("uploadImage").value=""; //clear the uploaded file
		}
		
	});
	
	function stringSplit(kata_kata){
		console.log(kata_kata);
		var newString = kata_kata.replace(/%20/g," ");
		return toOtherPage('<?=base_url();?>BedroomCatalogue/detailProductAdmin/'+newString);
	}
	
	const addProductForm = document.querySelector('#addProductWardrobe');
	addProductForm.addEventListener('submit',(e) => {
		e.preventDefault();

		var productName = '<?php echo $productName;?>';
		var newProductName = productName.replace(/%20/g," ");
		
		var roomCategory = addProductForm['roomCategory'].value;
		var productCategory = addProductForm['productCategory'].value;
		var productName = addProductForm['productName'].value;
		var price = addProductForm['price'].value;
		var stock = addProductForm['stock'].value;
		var desc = addProductForm['desc'].value;
		
		var priced = formatString(price,"IDR ");
		
		console.log(parseInt(priced));
		if(priced > 0){
			if (selectedFile != null){
				var filename = selectedFile.name;
				//var filename = addProductForm['uploadImage'].value;
				var storageRef = firebase.storage().ref("products/" + roomCategory +"/"+ productCategory+"/"+productName+"/productImage.jpg");
				var uploadTask = storageRef.put(selectedFile);
				uploadTask.on('state_changed',function(snapshot){
					var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
					document.getElementById('alert-warn').style.display = "block";
					document.getElementById('alert-message').innerHTML = 'Upload is ' + progress + '% done';
					  switch (snapshot.state) {
						case firebase.storage.TaskState.PAUSED: // or 'paused'
						  console.log('Upload is paused');
						  break;
						case firebase.storage.TaskState.RUNNING: // or 'running'
						  console.log('Upload is running');
						  break;
					  }
				},function(error){

				},function(){
					uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
						console.log('File available at', downloadURL);
						var firebaseRef = firebase.database().ref("products/" + roomCategory +"/"+ productCategory+"/");
						firebaseRef.child(productName).update({
							roomCategory: roomCategory,
							productCategory: productCategory,
							productName:productName,
							price: priced,
							stock: stock,
							desc: desc,
							productImage: downloadURL
						}, function(error) {
							if (error) {
							  // The write failed...
							} else {
							  // Data saved successfully!
								document.getElementById("productImage").src = "<?= base_url(); ?>assets/bg/no_image.jpg";
								if (productName != newProductName){
									firebaseRef.child(newProductName).remove();
								}
								window.location = '<?= base_url();?>BedroomCatalogue/detailProductAdmin/'+productName;
							}
						});
					});
				});
			}else{
				var imageURL = document.getElementById("productImage").src;
				var firebaseRef = firebase.database().ref("products/" + roomCategory +"/"+ productCategory+"/");
				firebaseRef.child(productName).update({
					roomCategory: roomCategory,
					productCategory: productCategory,
					productName:productName,
					price: priced,
					stock: stock,
					desc: desc,
					productImage: imageURL
				}, function(error) {
					if (error) {
					  // The write failed...
					} else {
					  // Data saved successfully!
						document.getElementById("productImage").src = "<?= base_url(); ?>assets/bg/no_image.jpg";
						if (productName != newProductName){
							firebaseRef.child(newProductName).remove();
						}
						window.location = '<?= base_url();?>BedroomCatalogue/detailProductAdmin/'+productName;
						console.log(imageURL);
					}
				});
			}
		}else{
			alert("Price can't zero!");
		}
	});
	
	function toOtherPage(base_url){
		window.location = base_url;
	}
	window.onload = loadView;
	
	function loadView(){
		
		var productName = '<?php echo $productName;?>';
		var newProductName = productName.replace(/%20/g," ");
		
		if (newProductName != null){
			console.log(newProductName);
			firebase.database().ref("products/Bedroom/Wardrobe/").once('value', function(snapshot) {
				snapshot.forEach(function(childSnapshot) {
					var childKey = childSnapshot.key;
					var childData = childSnapshot.val();
					if(newProductName == childKey){
						document.getElementById("roomCategory").value = childData.roomCategory;
						document.getElementById("productCategory").value = childData.productCategory;
						document.getElementById("productName").value = childData.productName;
						document.getElementById("price").value = formatRupiah(childData.price, "IDR ");
						document.getElementById("stock").value = childData.stock;
						document.getElementById("desc").value = childData.desc;
						document.getElementById("productImage").src = childData.productImage;
					}
				});
			});
		}
	}
	
	
            
</script>
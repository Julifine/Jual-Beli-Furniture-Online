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
              <h1>ADD PRODUCT</h1>
            </div>
        </div>
  </div>

  <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
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
                            <input type="text" name="roomCategory" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-53" readonly value="Bedroom">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Product's Category</label>
                            <input type="text" name="productCategory" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-53" readonly value="Wardrobe">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Product Name</label>
                            <input type="text" name="productName" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-53">
                        </div>
                        <div class="col-md-12  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Price</label>
                            <input type="text" name="price" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-53" onKeyPress="isInputNumber(event)">
                        </div>
                        <div class="col-md-6  form-group" data-for="name" style="color: white">
                            <label for="name-form1-53" class="form-control-label mbr-fonts-style display-7">Stock</label>
                            <input type="text" name="stock" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-53" onKeyPress="isInputNumber(event)">
                        </div>
                        <div data-for="message" class="col-md-12 form-group" style="color: white">
                            <label for="message-form1-53" class="form-control-label mbr-fonts-style display-7">Short Description</label>
                            <textarea name="desc" data-form-field="Message" class="form-control display-7" id="message-form1-53"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center">
                          <button type="submit" class="btn btn-primary btn-form display-4" style="">ADD NOW</button>
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
	
	const addProductForm = document.querySelector('#addProductWardrobe');
	addProductForm.addEventListener('submit',(e) => {
		e.preventDefault();

		var roomCategory = addProductForm['roomCategory'].value;
		var productCategory = addProductForm['productCategory'].value;
		var productName = addProductForm['productName'].value;
		var price = addProductForm['price'].value;
		var stock = addProductForm['stock'].value;
		var desc = addProductForm['desc'].value;

		var firebaseRef = firebase.database().ref("products/" + roomCategory +"/"+ productCategory+"/"+productName);
		firebaseRef.set({
			roomCategory: roomCategory,
			productCategory: productCategory,
			productName:productName,
			price: price,
			stock: stock,
			desc: desc
		}, function(error) {
			if (error) {
			  // The write failed...
			} else {
			  // Data saved successfully!
				window.alert("Add Product Successfully!");
			}
		  });
		addProductForm.reset();
	});
            
</script>
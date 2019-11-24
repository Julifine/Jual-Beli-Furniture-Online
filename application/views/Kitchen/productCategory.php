<section class="header1 cid-rFjGRm4Sr6 mbr-parallax-background" id="header16-v">
<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">KITCHEN</h1>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section content4 cid-rFeBNSud4e" id="content4-z">
	<div class="container">
		<div style="text-align: right;display: none" id="btn-add-product">
			<a href="javascript:stringSplit('<?=$judul;?>')" class="btn add-product" style="color: white;border: 2px solid white;padding: 15px;border-radius: 30px"><i class="fas fa-plus" style="margin-right: 10px"></i>Add Product</a>
		</div>
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5" id="subTitle"></h2>
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rFeGRdU9kJ" id="gallery2-14" style="min-height: 38.9%">
    <div class="container">
        <div>
			<!-- Filter -->
			<!--<div class="mbr-gallery-filter container gallery-filter-active">
			  	<ul buttons="0">
					<li class="mbr-gallery-filter-all">
				  		<a class="btn btn-md btn-white-outline active display-7" href="" id="btn-all">All</a>
					</li>
			  	</ul>
        	</div>-->
			<!-- Gallery -->
			<div class="container" style="">
          		<div class="mbr-gallery-layout-default">
            		<div class="">
						<div class="" id="tes" style="">
							
              			</div>
					</div>
            	</div>
         	</div>
        </div>
      </div>
</section>
<script>
	
	function stringSpace(string){
		return string.replace(/%20/g," ");
	}
	
	function nReplacer(string){
		return string.replace(/ n /g," & ");
	}
		
		var sub = stringSpace("<?=$judul?>");
		var newSub = nReplacer(sub);
		var subtitle = document.getElementById("subTitle");
		subtitle.innerHTML = newSub.toUpperCase();
		
		var child = [];
		firebase.database().ref("products/Kitchen/"+newSub).once('value', function(snapshot) {

			snapshot.forEach(function(childSnapshot) {
				var childKey = childSnapshot.key;
				var childData = childSnapshot.val();
				child.push(childData);
			});
			if (child != null){
				for(var i=0;i<child.length;i++){
					var gallery_item = document.createElement("div");
					document.getElementById("tes").appendChild(gallery_item);
					gallery_item.className = "mbr-gallery-item mbr-gallery-item--p2";
					gallery_item.dataset.tags = child[i].productName;
					gallery_item.setAttribute('name', child[i].productName);
					gallery_item.id = "content-item-"+i;
					var frame = document.createElement("div");

					var img_src = document.createElement("img");
					var item_focus = document.createElement("span");
					var product_title = document.createElement("span");

					gallery_item.appendChild(frame);
					frame.appendChild(img_src);
					frame.appendChild(item_focus);
					frame.appendChild(product_title);
					item_focus.className = "icon-focus";
					product_title.className = "mbr-gallery-title mbr-fonts-style display-5";



					img_src.src = child[i].productImage;
					//img_src.style.height = "300px";
					//img_src.style.width = "300px";

					const formatter = new Intl.NumberFormat('en-US', {
					  style: 'currency',
					  currency: 'IDR',
					  minimumFractionDigits: 0
					});

					var priced = formatter.format(child[i].price);

					product_title.innerHTML = child[i].productName + " - " + priced;
				}
				
				firebase.auth().onAuthStateChanged(function(user){
					if	(user){
						firebase.database().ref("users").once('value', function(snapshot) {
							snapshot.forEach(function(childSnapshot) {
								var childKey = childSnapshot.key;
								var childData = childSnapshot.val();
								if(user.uid == childKey){
									if(childData.type == "user"){
										document.getElementById("btn-add-product").style.display = "none";
										var elements = document.getElementsByClassName("mbr-gallery-item");
										console.log(elements);
										for(var i=0;i<elements.length;i++){
											document.getElementById("content-item-"+i).onclick = function() {
												//console.log(this.dataset.tags);
												window.location = '<?=base_url();?>KitchenCatalogue/detailProduct/'+sub+"/"+this.dataset.tags;
											};
										}
									}else{
										document.getElementById("btn-add-product").style.display = "block";
										var elements = document.getElementsByClassName("mbr-gallery-item");
										console.log(elements);
										for(var i=0;i<elements.length;i++){
											document.getElementById("content-item-"+i).onclick = function() {
												//console.log(this.dataset.tags);
												window.location = '<?=base_url();?>KitchenCatalogue/detailProductAdmin/'+sub+"/"+this.dataset.tags;
											};
										}
									}
								}
							});
						});
					}else{
						document.getElementById("btn-add-product").style.display = "none";
						var elements = document.getElementsByClassName("mbr-gallery-item");
						console.log(elements);
						for(var i=0;i<elements.length;i++){
							document.getElementById("content-item-"+i).onclick = function() {
								//console.log(this.dataset.tags);
								window.location = '<?=base_url();?>KitchenCatalogue/detailProduct/'+sub+"/"+this.dataset.tags;
							};
						}
					}			
				});
			}else{
				document.getElementById("tes").style.height = window.innerHeight+"px";
			}
		});
	
	function toOtherPage(base_url){
		window.location =base_url;
	}
	
	function stringSplit(kata_kata){
		console.log(kata_kata);
		var newString = kata_kata.replace(/%20/g," ");
		return toOtherPage('<?=base_url();?>KitchenCatalogue/addProduct/'+newString);
	}
</script>
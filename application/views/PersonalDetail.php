<style>
	.div-footer{
		position: absolute;
		bottom: 0;
		width: 100%
	}
	
	.btn-form:hover{
		cursor: pointer
	}
	
	.btn-form{
		width: 80px;
		height: 40px;
		border: none;
		border-radius: 5px
	}
</style>

<div style="margin-left: auto;margin-right: auto;min-height: 86.3%!important" class="features19 cid-rFh1Nopgcw" >
<div class="container" style="">
  <div class="row" style="margin-top: 50px">
    <div class="col-12">
      <div class="">
        <h1 style="color: white">PERSONAL INFO</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="">
        <span style="font-size: 18px;color: white">This information is never shared publicly.</span>
      </div>
    </div>
  </div>
	<form action="#" id="updatePersonalDetail" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-8" style="margin-top: 20px">
					<div class="row" style="background-color: #4d4d4d;font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">Username</span>
						</div>
						<div class="col-8">
							<center><input name="username" readonly type="text" value="" style="background-color: transparent;border: none;color: white;font-style: italic" id="username"></center>
						</div>
					</div>
					<div class="row" style="background-color: #4d4d4d;font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">First Name</span>
						</div>
						<div class="col-8">
							<center><input required name="firstname" type="text" value="" style="background-color: transparent;border: none;color: white;" id="firstName"></center>
						</div>
					</div>
					<div class="row" style="background-color: #4d4d4d;font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">Last Name</span>
						</div>
						<div class="col-8">
							<center><input required name="lastname" type="text" value="" style="background-color: transparent;border: none;color: white;" id="lastName"></center>
						</div>
					</div>
					<div class="row" style="background-color: #4d4d4d;font-size: 18px;padding: 10px 0px;margin-top: 6px">
						<div class="col-4">
							<span style="color: white">Phone Number</span>
						</div>
						<div class="col-8" style="">
							<center><input onKeyPress="isInputNumber(event)" required name="phoneNumber" type="text" value="" style="background-color: transparent;border: none;color: white;" id="phoneNumber"></center>
						</div>
					</div>
				</div>
				<div class="col-4">
					<img name="photoProfile" id="photoProfileId" src="" alt="" width="200px" height="200" style="margin-left: 100px;border-radius: 100px;border: 4px solid white"/>
					<input type="file" name="uploadImage" style="margin-left: 50px;margin-top: 10px" accept=".jpg, .png, .jpeg" multiple accept='image/*' id="uploadImageID">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px">
			<div class="col-4">
				<input type="button" onClick="toOtherPage('<?= base_url(); ?>MyAccount/Profile')" value="BACK" class="btn-form" style="width: 100px;background-color: rgba(51,51,51,0.5);color: white;font-weight: 500">
				<input type="submit" value="SAVE" class="btn-form" style="width: 100px;background-color: white;color: rgba(51,51,51,1);font-weight: 500;margin-left:10px">
			</div>
		</div>
		<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert-warn" style="width: 100%;display: none;margin-top: 10px">
			<span id="alert-message" style="margin-right: 50px;font-size: 18px;padding:10px"></span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin: 0px">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</form>
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
									document.getElementById("username").value = childData.displayName
									document.getElementById("firstName").value = childData.firstName
									document.getElementById("lastName").value = childData.lastName
									document.getElementById("phoneNumber").value = childData.phoneNumber
									document.getElementById("photoProfileId").src = childData.imageUrl
							}
						})
					})
				}
		})
	}
	
	function isInputNumber(evt){
		var ch = String.fromCharCode(evt.which);
				
		if(!(/[0-9|-]/.test(ch))){
			evt.preventDefault();
		}
	}
	
	var selectedFile;
	
	$("#uploadImageID").change(function () {
		if(this.files[0].name.match(".jp") || this.files[0].name.match(".png")){
			selectedFile = this.files[0];
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#photoProfileId').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			}
		}
		else
		{
			alert("Sorry only jpeg images are accepted");
			document.getElementById("uploadImageID").value=""; //clear the uploaded file
		}
	});
	
	function toOtherPage($base_url){
		window.location = $base_url;
	}
	
	const updateForm = document.querySelector('#updatePersonalDetail');
	updateForm.addEventListener('submit',(e) => {
		e.preventDefault();
		
		var firstName = updateForm['firstName'].value;
		var lastName = updateForm['lastName'].value;
		var phoneNumber = updateForm['phoneNumber'].value;
		
		if(selectedFile != null){
			var filename = selectedFile.name;
		
			firebase.auth().onAuthStateChanged(function(user){
			if	(user){
				var email = user.email;
				var dn = user.displayName;
				var UID = user.uid;
				var pp = user.photoURL;
				var pn = user.phoneNumber;
				var storageRef = firebase.storage().ref("users/" + UID+"/imageUrl/");
				
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
						var firebaseRef = firebase.database().ref("users/" + UID);
						firebaseRef.update({
							firstName: firstName,
							lastName: lastName,
							phoneNumber:phoneNumber,
							imageUrl: downloadURL
						}, function(error) {
							if (error) {
							  // The write failed...
							} else {
							  // Data saved successfully!
								//addProductForm.reset();
								document.location.reload(true);
							}
						});
					});
				});
			}
		})
		}else{
			firebase.auth().onAuthStateChanged(function(user){
				if	(user){
					var email = user.email;
					var dn = user.displayName;
					var UID = user.uid;
					var pp = user.photoURL;
					var pn = user.phoneNumber;
					
					var firebaseRef = firebase.database().ref("users/" + UID);
					firebaseRef.update({
						firstName: firstName,
						lastName: lastName,
						phoneNumber:phoneNumber,
					}, function(error) {
						if (error) {
						  // The write failed...
						} else {
						  // Data saved successfully!
							//addProductForm.reset();
							document.location.reload(true);
						}
					});
				}else{
					window.location = "<?= base_url(); ?>"
				}
			})
		}
		
	})
</script>
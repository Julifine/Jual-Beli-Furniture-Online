var provider = new firebase.auth.GoogleAuthProvider();

var firebaseConfig = {
	apiKey: "AIzaSyDadH6k6XGUOMhnI37Bf1SRFfI7OLJ4o-M",
	authDomain: "julifine.firebaseapp.com",
	databaseURL: "https://julifine.firebaseio.com",
	projectId: "julifine",
	storageBucket: "gs://julifine.appspot.com",
	messagingSenderId: "664499148646",
	appId: "1:664499148646:web:6d2560cc26c90907ac1aa7"
};

firebase.initializeApp(firebaseConfig);

firebase.database().goOnline();

firebase.auth.Auth.Persistence.LOCAL;

function signInWithFacebook(base_url){
		
	var provider = new firebase.auth.FacebookAuthProvider();
	
	firebase.auth().signInWithPopup(provider).then(function(result) {
		// This gives you a Google Access Token. You can use it to access the Google API.
		var token = result.credential.accessToken;
		// The signed-in user info.
		var user = result.user;
		var email = user.email;
		var displayName = user.displayName;
		var uid = user.uid;
		var imageUrl = user.photoURL;
		var phoneNumber = user.phoneNumber;
		window.location = base_url;
		
	}).catch(function(error) {
	  // Handle Errors here.
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  // The email of the user's account used.
	  var email = error.email;
	  // The firebase.auth.AuthCredential type that was used.
	  var credential = error.credential;
	  window.alert("Error: "+errorMessage);
	});	
}

function login(){
	var email = document.getElementById("email_field").value;
	var pass = document.getElementById("pass_field").value;
	
	if ( email != '' && pass != ''){
		var result = firebase.auth().signInWithEmailAndPassword(email,pass);
		
		result.catch(function(error){
			var errorCode = error.code;
			var errorMessage = error.message;
			
			console.log(errorCode);
			console.log(errorMessage);
			
			window.alert("Error "+errorMessage);
		});
		
	}else{
		window.alert("The form is incomplete. Please fill out all fields.");
	}
}

function signInWithGoogle(base_url){
	firebase.auth().signInWithPopup(provider).then(function(result) {
	  	var token = result.credential.accessToken;
	  	var user = result.user;
		var email = user.email;
		var dn = user.displayName;
		var UID = user.uid;
		var pp = user.photoURL;
		var phoneNumber = user.phoneNumber;
		
		if (phoneNumber == null){
			phoneNumber = "-";
		}
		
		firebase.database().ref("users").once('value', function(snapshot) {
			snapshot.forEach(function(childSnapshot) {
				var childKey = childSnapshot.key;
				var childData = childSnapshot.val();
				if (UID == childKey){
					if	(childData.type == "user"){
						window.location.href = base_url;
					}
				}else{
					var firebaseRef = firebase.database().ref("users/" + UID);
					firebaseRef.set({
						email: email,
						displayName: dn,
						uid:UID,
						imageUrl: pp,
						phoneNumber: phoneNumber,
						type: 'user'
					});
					window.location.href = base_url;
				}
			});
		});
	  
	}).catch(function(error) {
	  // Handle Errors here.
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  // The email of the user's account used.
	  var email = error.email;
	  // The firebase.auth.AuthCredential type that was used.
	  var credential = error.credential;
	  window.alert("Error: "+errorMessage);
	});
}

var uiConfig = {
	signInSuccessUrl: base_url
	,
	signInOptions: [
		firebase.auth.PhoneAuthProvider.PROVIDER_ID
	],
	tosUrl: '',
	recaptchaParameters:{
		'size':'invisible',
	},
	callbacks:{
		'signInSuccess': function(user, credential, redirectUrl) {
			var pp;
			var dn;
			var email;
			if (user.photoURL==null){
				pp = "https://firebasestorage.googleapis.com/v0/b/julifine.appspot.com/o/default%2FphotoURL%2Fuser-white.svg?alt=media&token=319efa94-f140-414c-ae63-b3f50072c6fd";
			}

			if (user.displayName == null){
				dn = user.phoneNumber;
			}

			if(user.email == null){
				email = "-";
			}

			var user = firebase.auth().currentUser;
			user.updateProfile({
				displayName: dn
			});
			var firebaseRef = firebase.database().ref("users/" + user.uid);
			firebaseRef.set({
				email: email,
				displayName: dn,
				uid:user.uid,
				imageUrl: pp,
				phoneNumber: user.phoneNumber,
				type: 'user'
			});
			return true;
		}
	}
};

var ui = new firebaseui.auth.AuthUI(firebase.auth());
ui.start('#firebaseui-auth-container',uiConfig);

function registerUser(){
	
}

const signUpForm = document.querySelector('#signUpFormUser');
signUpForm.addEventListener('submit',(e) => {
	e.preventDefault();
	
	signup_email = signUpForm['email_field'].value;
	signup_password = signUpForm['pass_field'].value;
	signup_username = signUpForm['username'].value;
	
	var status;
	
	if ( signup_email != '' && signup_password != '' && signup_username != ''){
		
		firebase.database().ref("users").once('value', function(snapshot) {
			var child = [];
			snapshot.forEach(function(childSnapshot) {
				var childKey = childSnapshot.key;
				var childData = childSnapshot.val();
				child.push(childData);
			});
			for(i=0;i<child.length;i++){
				if (signup_username == child[i].displayName){
					alert('Username sudah digunakan! Silahkan cari username lain.');
					status = false;
					break;
				}else{
					if (child[i].email == signup_email){
						alert('Email sudah digunakan! Silahkan cari email lain.');
						status = false;
						break;
					}
					else{
						status = true;
					}
				}
			}

			if (status){
				firebase.auth().createUserWithEmailAndPassword(signup_email,signup_password).then(cred => {
					console.log(cred);
					var pp;
					var pn;
					if (cred.user.photoURL==null){
						pp = "https://firebasestorage.googleapis.com/v0/b/julifine.appspot.com/o/default%2FphotoURL%2Fuser-white.svg?alt=media&token=319efa94-f140-414c-ae63-b3f50072c6fd";
					}
					if (cred.user.phoneNumber == null){
						pn = "-";
					}
					var user = firebase.auth().currentUser;
					user.updateProfile({
						displayName: signup_username
					});
					var firebaseRef = firebase.database().ref("users/" + cred.user.uid);
					firebaseRef.set({
						email: cred.user.email,
						displayName: signup_username,
						uid:cred.user.uid,
						imageUrl: pp,
						phoneNumber: pn,
						type: 'user'
					});
				}).catch(function(error) {
					var errorCode = error.code;
					var errorMessage = error.message;
					// The email of the user's account used.
					var email = error.email;
					// The firebase.auth.AuthCredential type that was used.
					var credential = error.credential;
					window.alert(errorMessage);
				});
			}
		});
	}else{
		window.alert("The form is incomplete. Please fill out all fields.");
	}
});

function logout(){
	firebase.auth().signOut().then(function() {
	  // Sign-out successful.
		document.location.reload(true);
	}).catch(function(error) {
	  // An error happened.
	});
}
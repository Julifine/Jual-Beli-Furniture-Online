var provider = new firebase.auth.GoogleAuthProvider();

var firebaseConfig = {
	apiKey: "AIzaSyDadH6k6XGUOMhnI37Bf1SRFfI7OLJ4o-M",
	authDomain: "julifine.firebaseapp.com",
	databaseURL: "https://julifine.firebaseio.com",
	projectId: "julifine",
	storageBucket: "",
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
	signInSuccessUrl: base_url,
	signInOptions: [
		firebase.auth.PhoneAuthProvider.PROVIDER_ID
	],
	tosUrl: '',
	recaptchaParameters:{
		'size':'invisible',
	}
};
var ui = new firebaseui.auth.AuthUI(firebase.auth());
ui.start('#firebaseui-auth-container',uiConfig);

const signUpForm = document.querySelector('#signUpFormUser');
signUpForm.addEventListener('submit',(e) => {
	e.preventDefault();
	
	signup_email = signUpForm['email_field'].value;
	signup_password = signUpForm['pass_field'].value;
	signup_username = signUpForm['username'].value;
	
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
	  // Handle Errors here.
	  var errorCode = error.code;
	  var errorMessage = error.message;
	  // The email of the user's account used.
	  var email = error.email;
	  // The firebase.auth.AuthCredential type that was used.
	  var credential = error.credential;
	  window.alert("Error: "+errorMessage);
	});
	
});

const signUpFormAdmin = document.querySelector('#signUpFormAdmin');
signUpFormAdmin.addEventListener('submit',(e) => {
	e.preventDefault();
	
	signup_email = signUpFormAdmin['email_field'].value;
	signup_password = signUpFormAdmin['pass_field'].value;
	signup_username = signUpFormAdmin['username'].value;
	
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
			type: 'admin'
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
	
});

function logout(){
	firebase.auth().signOut().then(function() {
	  // Sign-out successful.
		document.location.reload(true);
	}).catch(function(error) {
	  // An error happened.
	});
}
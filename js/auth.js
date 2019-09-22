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
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

firebase.database().goOnline();

firebase.auth.Auth.Persistence.LOCAL;

function signInWithFacebook(){
	
	window.fbAsyncInit = function() {
		FB.init({
		  appId      : 'Julifine',
		  cookie     : true,
		  xfbml      : true,
		  version    : 'v4.0'
		});

		FB.AppEvents.logPageView();   
	};

	(function(d, s, id){
	 var js, fjs = d.getElementsByTagName(s)[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement(s); js.id = id;
	 js.src = "https://connect.facebook.net/en_US/sdk.js";
	 fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	var provider = new firebase.auth.FacebookAuthProvider();

	provider.addScope('user_birthday');

	provider.setCustomParameters({
	  'display': 'popup'
	});
	
	firebase.auth().signInWithPopup(provider).then(function(result) {
	  // This gives you a Google Access Token. You can use it to access the Google API.
	  var token = result.credential.accessToken;
	  // The signed-in user info.
	  var user = result.user;
	  // ...
		var email = user.email;
		var displayName = user.displayName;
		var uid = user.uid;
		var imageUrl = user.photoURL;
		
		insertData(email,displayName,uid,imageUrl);
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

function signInWithGoogle(){
	firebase.auth().signInWithPopup(provider).then(function(result) {
	  	var token = result.credential.accessToken;
	  	var user = result.user;
		var email = user.email;
			var dn = user.displayName;
			var UID = user.uid;
			var pp = user.photoURL;
			var phoneNumber = user.phoneNumber;
			firebase.database().ref("users").once('value', function(snapshot) {
				
			var status = false;
			  snapshot.forEach(function(childSnapshot) {
				var childKey = childSnapshot.key;
				var childData = childSnapshot.val();
				  /*console.log(childKey.length);*/
			  });
				var key = Object.keys(snapshot.val());
				for(i=0;i<key.length;i++){
					if(UID == key[i]){
						status = false;
						break;
					}else{
						status = true;
					}
				}
				if(status == false){
					window.location.href = "homeuser.php";
				}else{
					window.location.href = "select_account.php";
				}
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

function hideLogin(){
	document.getElementById("jumbo-login").style.display = "none";
	document.getElementById("jumbo-type").style.display = "block";
	document.getElementById("doesnt").style.display = "none";
	document.getElementById("btn-register").style.display = "none";
}

var uiConfig = {
	//signInSuccessUrl: 'window.location.href = "homeuser.php";'
	signInSuccessUrl: 'select_account.php',
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

function logout(){
	firebase.auth().signOut().then(function() {
  // Sign-out successful.
}).catch(function(error) {
  // An error happened.
});

}
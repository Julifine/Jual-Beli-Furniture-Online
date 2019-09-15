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

firebase.auth.Auth.Persistence.LOCAL;

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
	  // This gives you a Google Access Token. You can use it to access the Google API.
	  var token = result.credential.accessToken;
	  // The signed-in user info.
	  var user = result.user;
	  // ...
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

function logout(){
	firebase.auth().signOut().then(function() {
  // Sign-out successful.
}).catch(function(error) {
  // An error happened.
});

}
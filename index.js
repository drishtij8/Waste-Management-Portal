var config = {
    apiKey: "AIzaSyCTpf8qm3i65C96gWB_ZBZ-t2RQCflJ8zI",
    authDomain: "sample-d0d73.firebaseapp.com",
    databaseURL: "https://sample-d0d73.firebaseio.com",
    projectId: "sample-d0d73",
    storageBucket: "sample-d0d73.appspot.com",
    messagingSenderId: "928397747541"
  };
  firebase.initializeApp(config);
var messagesRef = firebase.database().ref('messages');



document.getElementById('contactForm').addEventListener('submit',submitForm);
function submitForm(e){
	e.preventDefault();



  // Initialize Firebase


	var name=getInputVal('name');
	var address=getInputVal('addr');
	var aadhar=getInputVal('adrcrd');
	var phone=getInputVal('phone');
	var vehicle=getInputVal('message');
    console.log(name);
}
function getInputVal(id){
	return document.getElementById(id).value;

}
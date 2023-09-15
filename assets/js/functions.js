function openPopup(id) {
document.getElementById(id).style.display = "block";
}

function closePopup(id) {
document.getElementById(id).style.display = "none";
}

function signup() {
const name = document.getElementById("signup-name").value;
const email = document.getElementById("signup-email").value;
const password = document.getElementById("signup-password").value;

fetch('/register', {
	method: 'POST',
	headers: {'Content-Type': 'application/x-www-form-urlencoded'},
	body: `name=${name}&email=${email}&password=${password}`})
.then(response => response.json())
.then(data => {
	if (data.message) {
		alert(data.message);
		closePopup('signup-popup');
	} else {
		alert(data.error);
	}});}

function login() {
const email = document.getElementById("login-email").value;
const password = document.getElementById("login-password").value;

fetch('/login', {
	method: 'POST',
	headers: {'Content-Type': 'application/x-www-form-urlencoded'},
	body: `email=${email}&password=${password}`})
.then(response => response.json())
.then(data => {
	if (data.message) {
		alert(data.message);
		closePopup('login-popup');
	} else {
		alert(data.error);
	}});}

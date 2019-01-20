function animateLogin() {
	var element = document.getElementById("loginBTN");
 	element.classList.add("angry-animate");
 	setTimeout(function() {
 		element.style = "opacity: 0;";
 		console.log(element);
 	}, 2000);
 }

function animateRegister() {
	var element = document.getElementById("registerBTN");
 	element.classList.add("angry-animate");
 	setTimeout(function() {
 		element.style = "opacity: 0;";
 		console.log(element);
 	}, 2000);
 }
 
function checkout(){
	window.alert("Checkout works")
	
	var user = document.getElementById("user")
	var password = document.getElementById("pw")
	var shipping = document.getElementById("shipping").value
	
	var q1 = document.getElementById("qapple")
	var q2 = document.getElementById("qbanana")
	var q3 = document.getElementByID("qpear")
	
	//username check
	if(password === ""){
		window.alert("Your password is blank.  Enter a password")
	}
	if(q1 === "" || q2 === "" || q3 === ""){
		window.alert("One or more of your quantities is blank.  Please adjust.")
	}
	if(q1<0 || q2 <0 || q3 <0){
		window.alert("One or more of your quantities is negative.  Please adjust.")
	}
	//Shipping automatically defaults, so no need to check
}
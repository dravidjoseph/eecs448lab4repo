function checkout(){
	//username and password
	var user = document.getElementById("user").value;
	var password = document.getElementById("password").value;
	
	//quantities of items
	var q1 = parseInt(document.getElementById("qapple").value);
	var q2 = parseInt(document.getElementById("qbanana").value);
	var q3 = parseInt(document.getElementById("qpear").value);
	
	//shipping value
	var shipping = document.getElementById("shipping").value;
	
	//check user string
	var check = /\b\w+@\w+\.com\b/;
	
	//username
	if(!check.test(user)){
		
		window.alert("Invalid username.  Give it in the form user@domain.com");
		return false;
	}
	//password
	if(password === null || password == ""){
		window.alert("Password cannot be blank.");
		return false;
	}
	//shipping has default value so no need to check.
	
	//if any of the quantities are nonnegative
	if((isNaN(q1)|| q1 < 0)||(isNaN(q2)||q2 < 0)||(isNaN(q3) || q3 < 0)){
		window.alert("All quantities must be nonnegative integers");
		return false;
	}
		
	return true;
	
}
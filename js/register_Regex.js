function validate() {
    // checking and wrong for empty feilds in first name  
    let fnameTest = document.myForm.fullname.value.search(/^[a-zA-Z]{4,}(?: [a-zA-Z]+)?(?: [a-zA-Z]+)?$/)
    if (document.myForm.fullname.value == "" || fnameTest == -1) {
    	alert("Name can only contain alphabets and spaces");
    	document.myForm.fullname.focus();
    	return false;
    }


	//validate email
    // checking and wrong for empty feilds in email 
    let emailTest = document.myForm.email.value.search(/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/)
    if (document.myForm.email.value == "" || emailTest == -1) {
    	alert("Enter a valid email!");
    	document.myForm.email.focus();
    	return false;
    }




	// validate password
	let passwordTest = document.myForm.urpassword.value.search(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)
	if (document.myForm.upassword.value == "") {
		alert("Password must be minimum 8 characters, at least one letter, one number and one special character");
		document.myForm.upassword.focus();
		return false;
	}

	// validate country
	let countryTest = document.myForm.country.value.search(/^[a-zA-Z]+$/)
	if (document.myForm.country.value == "" || countryTest == -1) {
		alert("Country must be letters only");
		document.myForm.city.focus();
		return false;
	}


	 //city
	 let cityTest = document.myForm.city.value.search(/^[a-zA-Z]+$/)
	 if (document.myForm.city.value == "" || cityTest == -1) {
	 	alert("City must be letters only");
	 	document.myForm.city.focus();
	 	return false;
	 }

	//contact
	let contactTest = document.myForm.contact.value.search(/^\d{10}$/)
	if (document.myForm.contact.value == "" || contactTest == -1) {
		alert("Contact must be digits only");
		document.myForm.contact.focus();
		return false;
	}
	return (true);
}
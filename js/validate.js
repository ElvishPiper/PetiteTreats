function validateData(){
	let confirmCheck = document.getElementsByName("addToList")[0];
	let name = document.getElementsByName("name")[0].value.trim();
	let email = document.getElementsByName("email")[0].value.trim();
	let interests = document.getElementsByName("interests[]");
	let birthday = document.getElementsByName("birthday")[0].value;

	if(name=="" || !validateText(name)){
		alert("Invalid Name!");
		return false;
	}
	if(email==""){
		alert("Please input your email!");
		return false;
	}
	if (validateCheckbox(interests) == 0){
		alert("Please select at least one interest!");
		return false;
	}
	if(birthday=="" || Date.parse(birthday) >= new Date()){
		alert("Invalid Birthday!");
		return false;
	}
	if(!confirmCheck.checked){
		alert("Please check the box to continue!");
		return false;
	}
	
}

function validateText(userInput){
	//matches for letters and whitespace only
	let lettersOnly = /^[A-Za-z ]+$/g;	
    return lettersOnly.test(userInput);
}

function validateCheckbox(checkboxes){
	let numChecked = 0;
	
	for(i=0; i < checkboxes.length; i++){
		if (checkboxes[i].checked)
			numChecked++;
	}	
	return numChecked;
}
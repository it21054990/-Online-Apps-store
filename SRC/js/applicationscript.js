
function enableButton(){
	if(document.getElementById("checkbox").checked)
	{
		document.getElementById("submitBtn").disabled=false;
	}
	else
	{
		document.getElementById("submitBtn").disabled=true;
		
	}
}

function checkGender(){
	if(document.getElementById("male").checked)
	{
		return true;
	}
	else if(document.getElementById("female").checked)
	{
		return true;
	}
	else{
		alert ("Please select a gender");
		return false;
	}
}	
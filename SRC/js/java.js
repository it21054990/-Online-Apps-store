
function checkPassword()
{
   if(document.getElementById("psw").value!= document.getElementById("cnfrmpwd").value)
	{
		alert("Password Mismatch!");
		return false;
	}
	else
	{
		return true;
	}
	
}

function enableButton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitBtn").disabled=false;
	}
	else{
		document.getElementById("submitBtn").disabled=true;
	}
	
	
}
// https://www.webtrickshome.com/forum/how-to-display-uploaded-image-in-html-using-javascript to display uploaded image in form// 
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
}








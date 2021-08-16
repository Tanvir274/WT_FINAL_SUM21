var hasError=false;
function get(id)
{
	return document.getElementById(id);
}
function validate()
{
	refresh();
	if(get("digit").value == "")
	{
		hasError = true;
		get("err_digit").innerHTML = "*Phone Digit Required";
	}
	
	
return !hasError;	
}
function refresh(){
	hasError=false;
	
	get("err_digit").innerHTML = "";
		
}
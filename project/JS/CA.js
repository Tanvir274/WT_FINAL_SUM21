var hasError=false;
function get(id)
{
	return document.getElementById(id);
}
function validate()
{
	refresh();
	if(get("add").value == "")
	{
		hasError = true;
		get("err_add").innerHTML = "* Address Required";
	}
	
	
return !hasError;	
}
function refresh(){
	hasError=false;
	
	get("err_add").innerHTML = "";
		
}
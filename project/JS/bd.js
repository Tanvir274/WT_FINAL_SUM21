var hasError=false;
function get(id)
{
	return document.getElementById(id);
}
function bvalidate()
{
	refresh();
	if(get("name").value == "")
	{
		hasError = true;
		get("err_name").innerHTML = "* Blood group Required";
	}
	
	
return !hasError;	
}
function refresh(){
	hasError=false;
	
	get("err_name").innerHTML = "";
	
		
}
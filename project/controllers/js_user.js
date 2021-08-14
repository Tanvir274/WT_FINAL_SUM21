var hasError=false;
function get(id)
{
  return document.getElementById(id);
}
function validateGen()
{
	var gn = document.getElementsByName("gender"); 
	var checked = false;
	for(var i=0;i<gn.length;i++){
		if(gn[i].checked){
			checked= true;
			break;
		}
	}
	return checked;
}
function validateGender()
{
	var gn = document.querySelector('input[name="gender"]:checked');
	if(gn == null){
		return false;
	}
	return true;
}


function validate()
{
	refresh();
	
	//Name
	if(get("name").value == "")
	{
		hasError = true;
		get("err_name").innerHTML = "j Name Required";
	}
	
	
	//username
	if(get("username").value == "")
	{
		hasError = true;
		get("err_uname").innerHTML = "j Uname Required";
	}
	
	
	
	//password
	
	if(get("password").value == "") 
	{
		hasError = true;
		get("err_pass").innerHTML="j Password Required";
		
	}
	
	
	
	
	//confirm password
	if(get("confirm_password").value == "") 
	{
		hasError = true;
		get("cerr_pass").innerHTML="Confirmation Password";
	}
	
	
	
	//Email
	if(get("email").value == "") 
	{
		hasError = true;
		get("err_mail").innerHTML="j Email Required";
	}
	
	
	
	//Phone Number
	if(get("digit").value == "") 
	{
		hasError = true;
		get("err_digit").innerHTML="j Phone Number Required";
	}
	
	
	
	// Street Address
	if(get("address").value == "")
	{
		hasError = true;
		get("err_add").innerHTML="j Street Address Required";
		
	}
	
	
	//day
	if(get("day").selectedIndex==0)
	{
		hasError = true;
		get("err_day").innerHTML = "j select Day";
	}
	//month
	if(get("month").selectedIndex==0)
	{
		hasError = true;
		get("err_month").innerHTML = "j select month";
	}
	//year
	if(get("year").selectedIndex==0)
	{
		hasError = true;
		get("err_year").innerHTML = "j select year";
	}
	//Blood_group
	if(get("group").selectedIndex==0)
	{
		hasError = true;
		get("err_group").innerHTML = "j select Blood group";
	}
	if(!validateGen())
	{
		hasError = true;
		get("err_gender").innerHTML = "j Select Gender";
	}
	
	
return !hasError;	
}
function refresh(){
	hasError=false;
	get("err_name").innerHTML="";
	get("err_uname").innerHTML = "";
	get("err_pass").innerHTML = "";
	get("cerr_pass").innerHTML = "";
	get("err_mail").innerHTML = "";
	get("err_digit").innerHTML = "";
	get("err_add").innerHTML = "";
	get("err_day").innerHTML = "";
	get("err_month").innerHTML = "";
	get("err_year").innerHTML = "";
	get("err_group").innerHTML = "";
	get("err_gender").innerHTML = "";
	
	
}
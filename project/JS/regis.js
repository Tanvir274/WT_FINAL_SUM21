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
function validation()
{
	refresh();
	
	//Name
	if(get("name").value == "")
	{
		hasError = true;
		get("err_name").innerHTML = "j Name Required";
	}
	else if(strlen(get("name").value) <=2)
	{
		hasError = true;
		get("err_name").innerHTML="j Name Must be greater than 2";
	}
	
	//username
	if(get("username").value == "")
	{
		hasError = true;
		get("err_uname").innerHTML = "j Uname Required";
	}
	else if(strlen(get("username").value) <=3)
	{
		hasError = true;
		get("err_uname").innerHTML="j Username must contain at least 4 characters";
	}
	else if(strlen(get("username").value)>=4)
	{
		l=strlen(get("username").value);
		str=get("username").value;
		
		for(i=0;i<l;i++)
		{
			if(str[i]==' ')
			{
		        hasError = true;
				get("err_uname").innerHTML="j Username space is not allowed";
			}
		}
	}
	
	//password
	
	/*if(get("password").value == "") 
	{
		hasError = true;
		get("err_pass").innerHTML="j Password Required";
		
	}
	else if(strlen(get("password").value) <=4)
	{
		hasError = true;
		get("err_pass").innerHTML="j password must contain at least 5 characters";
	}
	else if(strlen(get("password").value)>=5)
	{
		
		c=0;
		d=0;
		e=0;
		f=0;
		l=strlen(get("password").value);
		str=get("password").value;
		for(i=0;i<l;i++)
		{
			if($str[i]==' ')
			{
		        hasError = true;
				get("err_pass").innerHTML="Password space is not allowed";
				i=l;
				
			}
			if(str[i]>='A' && str[i]<='Z' )
			{
				c=1;
			}
			if(str[i]>='a' && str[i]<='z' )
			{
				d=1;
			}
			if(str[i]=='?' || str[i]=='#' )
			{
				e=1;
			}
			if(str[i]>='0' && str[i]<='9' )
			{
				f=1;
			}
			
		}
	}
	else if($c==0 || $d==0 ||$e==0 ||$f==0)
	{
		hasError = true;
		get("err_pass").innerHTML="j Password  is not Right";
		
	}
	
	
	
	//confirm password
	if(get("confirm_password").value == "") 
	{
		hasError = true;
		get("cerr_pass").innerHTML="Confirmation Password";
	}
	else if(get("confirm_password").value != get("password").value)
	{
		hasError = true;
		get("cerr_pass").innerHTML="Confirmation with same password";
	}*/
	
	
	//Email
	if(get("email").value == "") 
	{
		hasError = true;
		get("err_mail").innerHTML="j Email Required";
	}
	else if(strlen(get("email").value) <=9)
	{
		hasError = true;
		get("err_mail").innerHTML="j Email must contain at least 8 characters";
	}
	else if(strlen(get("email").value)>=9)
	{
		
		l=strlen(get("confirm_password").value);
		str=get("confirm_password").value ;
		for(i=0;i<l;i++)
		{
			if(str[i]=='@')
			{
				if(str[i+6]!='.')
				{
		           hasError = true;
				   get("err_mail").innerHTML="j Insert right Mail Address";
				   i=l;
				}
				
			}
			
			
		}
	}
	
	
	
	//Phone Number
	if(get("digit").value == "") 
	{
		hasError = true;
		get("err_digit").innerHTML="j Phone Number Required";
	}
	else if(!empty(get("digit").value))
	{
		l=strlen(get("digit").value);
		str=get("digit").value;
		
		for(i=0;i<l;i++)
		{
			if(str[i]<='0' && str[i]>='9')
			{
				hasError=true;
				get("err_digit").innerHTML="Phone number only accept numeric value";
			}
		}
	}
	
	
	// Street Address
	if(get("address").value == "")
	{
		hasError = true;
		get("err_add").innerHTML="j Street Address Required";
		
	}
	else if(strlen(get("address").value) <=2)
	{
		hasError = true;
		get("err_add").innerHTML="j Street Address Must be greater than 2";
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
	
	//Gender
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
	//get("err_pass").innerHTML = "";
	//get("cerr_pass").innerHTML = "";
	get("err_mail").innerHTML = "";
	get("err_digit").innerHTML = "";
	get("err_add").innerHTML = "";
	get("err_day").innerHTML = "";
	get("err_month").innerHTML = "";
	get("err_year").innerHTML = "";
	get("err_group").innerHTML = "";
	get("err_gender").innerHTML = "";
	
	
}
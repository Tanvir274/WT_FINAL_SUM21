function checkUser(e)
{
	
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_user.php?uname="+e.value,true);
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText.trim() == "invalid"){
				get("err_uname").innerHTML = "Username Invalid";
			}
			else{
				get("err_uname").innerHTML ="";
			}
		}
	};
	xhr.send();
}

function checkMail(e)
{
	
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_mail.php?mail="+e.value,true);
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText.trim() == "invalid"){
				get("err_mail").innerHTML = "Email Invalid";
			}
			else{
				get("err_mail").innerHTML ="";
			}
		}
	};
	xhr.send();
}

function checkPhone(e)
{
	
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_phone.php?digit="+e.value,true);
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText.trim() == "invalid"){
				get("err_digit").innerHTML = "Phone Invalid";
			}
			else{
				get("err_digit").innerHTML ="";
			}
		}
	};
	xhr.send();
}


function get(id)
{
	return	 document.getElementById(id);
}


function get(id)
{
	return	 document.getElementById(id);
}
function search(e)
{
	if(e.value=="")
	{
		get("suggestion").innerHTML = "";
		return;
	}
	var xhr = new XMLHttpRequest();
	xhr.open("GET","search_suggestion.php?key="+e.value,true);
	xhr.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)
		{
			get("suggestion").innerHTML = this.responseText;
		}
	};
	xhr.send();
}
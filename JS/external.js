
var gFrm = false;

function getVal(name){
	var uname = name.value;
	get("op").innerHTML = uname;
}

function get(id){
	return document.getElementById(id);
}

function viewGFrom(){
	var g_frm = get("g_form");
	var g_bt = get("g_btn");
	
	if(gFrm){
	    g_frm.style.display = "none";
		g_bt.innerHTML = "Login With Google";
		gFrm = false;
	}
	else{
		g_frm.style.display = "block";
		g_bt.innerHTML = "Hide Google Form";
		gFrm = true;
	}
}

function viewInfo(){
	var info = get("aiub_info");
	info.style.display = "block";
}

function hideInfo(){
	var info = get("aiub_info");
	info.style.display = "none";
}
function validation()
{
	var name=document.getElementById('uname').value;
	var pass=document.getElementById('pass').value;
	document.getElementById("xp").innerHTML="";
	document.getElementById("pr").innerHTML="";
	if(name=="" && pass=="")
	{
		document.getElementById("xp").innerHTML="<span style='color:red'>Username Required</span>";
		document.getElementById("pr").innerHTML="<span style='color:red'>Password Required</span>";
		//alert("username and password required");
		return false;
	}
	else if(name=="")
	{
		//alert("username required");
		document.getElementById("xp").innerHTML="<span style='color:red'>Username Required</span>";
		//document.getElementById("pr").innerHTML="Required";
		return false;
	}
	else if(pass=="")
	{
		//alert("password required");
		//document.getElementById("xp").innerHTML="Required";
		document.getElementById("pr").innerHTML="<span style='color:red'>Password Required</span>";
		return false;
	}
	else
	{
		return true;
	}
}
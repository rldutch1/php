function iviewlist(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
		}
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{document.getElementById("iviewdisplay").innerHTML=xmlhttp.responseText;
		}
		}
//		alert("Made it here!");
		var x = document.getElementById("optiondown").selectedIndex;
		y=(document.getElementsByTagName("option")[x].value);
//		alert(y);
		if (y==null || y=="")
  		{
  		alert("Program selection must not be blank!");
  		return false;
  		}

	var programtosend=document.getElementsByTagName("option")[x].value;
	//alert(programtosend);
	xmlhttp.open("POST","iview_list.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("optiondown="+programtosend+"");
//	xmlhttp.send();
	xmlhttp.close();

}

function iviewlist1(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
		}
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{document.getElementById("iviewdisplay").innerHTML=xmlhttp.responseText;
		}
		}
//		alert("Made it here!");
		var x = document.getElementById("optiondown").selectedIndex;
		y=(document.getElementsByTagName("option")[x].value);
//		alert(y);
		if (y==null || y=="")
  		{
  		alert("Program selection must not be blank!");
  		return false;
  		}

	var programtosend=document.getElementsByTagName("option")[x].value;
	//alert(programtosend);
	xmlhttp.open("POST","iview_list1.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("optiondown="+programtosend+"");
//	xmlhttp.send();
	xmlhttp.close();

}

function updatetable_checkbox2(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
		}
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{document.getElementById("iviewdisplay").innerHTML=xmlhttp.responseText;
		}
		}
//		alert("Made it here!");
		var x = document.getElementById("optiondown").selectedIndex;
		y=(document.getElementsByTagName("option")[x].value);
//		alert(y);
		if (y==null || y=="")
  		{
  		alert("Program selection must not be blank!");
  		return false;
  		}

	var programtosend=document.getElementsByTagName("option")[x].value;
	//alert(programtosend);
	xmlhttp.open("POST","updatetable_checkbox2.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("optiondown="+programtosend+"");
//	xmlhttp.send();
	xmlhttp.close();

}


function updatelist(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
		}
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{document.getElementById("iviewdisplay").innerHTML=xmlhttp.responseText;
		}
		}
//		alert("Made it here!");
		var x = document.getElementById("optiondown").selectedIndex;
		y=(document.getElementsByTagName("option")[x].value);
//		alert(y);
		if (y==null || y=="")
  		{
  		alert("Program selection must not be blank!");
  		return false;
  		}

	var programtosend=document.getElementsByTagName("option")[x].value;
	//alert(programtosend);
	xmlhttp.open("POST","updatelist.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("optiondown="+programtosend+"");
//	xmlhttp.send();
	xmlhttp.close();

}

$(document).ready(function()
    {
        $("#myTable").tablesorter();
    }
);
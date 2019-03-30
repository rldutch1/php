<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta source="https://www.youtube.com/watch?v=jVAaxkbmCts" >
	<title>Post to PHP Tutorial Using AJAX</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	</head>

<body>
	<form name="nameage">
		<input type="text" id="name" name="" placeholder="Enter your name..." /><br />
		<input type="text" id="age" name="" placeholder="Enter your age..." /><br />
		<input type="button" value="Submit" onclick="post();">
	</form>
	
	<form name="cars"> 
	<select onchange="showcar(this.value)">
  	<option id="blank" value="">Select a Vehicle</option>
  	<option id="volvo" value="1">Volvo</option>
  	<option id="saab" value="2">Saab</option>
  	<option id="opel" value="3">Opel</option>
  	<option id="audi" value="4">Audi</option>
	</select>
	</form>
<div id="result"></div>
<br />
<div id="car_out"></div>

<script type="text/javascript">
	function post(){ //post function for submit button.
			var name = $('#name').val();
			var age = $('#age').val();
			
			$.post('validate.php',{postname:name,postage:age}, //Get information from validate.php
				function(data) { //Pass validate.php information to 'data'.
					if(data=="1"){ //Evaluate data.
						 $('#result').html('You are over 18'); //Place response in the element with the id of 'result'.
						}
					if(data==""){ //Evaluate data.
						 $('#result').html('You are under 18.'); //Place response in the element with the id of 'result'.
						}
				}
			);
			}

//https://www.w3schools.com/Php/php_ajax_database.asp
	function showcar(str) {
    if (str == "") {
        document.getElementById("car_out").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("car_out").innerHTML = this.responseText;
            }
        }; 
        //alert(str);
        xmlhttp.open("GET","validate.php?q="+str,true);
        xmlhttp.send();
    }
	}
</script>
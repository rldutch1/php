<?php
	//53:42
	/* Headers - whenever a server makes a request to the PHP page the headers lets the browser know what to expect. 
Syntax: header(header information);
Example:
	To send a file as a PDF: header("content-type: application/pdf");
	To send an Excel file: 
		header("content-type: application/vnd.ms-excel; name='excel'");
		header("content-disposition: attachment; filename-myfile.xls");

*/
	//Header has to come first before anything, there cannot even be a space. 
	//This is how you return a 404 error.
	//header("HTTP/1.0 404 Not Found");
	//echo "Not Found";
	//exit;
	
	//This is how you redirect a page. 
	//Technically this is a 302 redirect to the browser.
	//header("Location: basic.html"); //Redirecting to basic.html.
	//exit;
	ob_start(); //Need to use this if "Output Buffering" is turned off.
?>
<html>
<head>
<title>Headers</title>
</head>
<body>
<?php

	header("Location: output_buffering.html"); //Redirecting to output_buffering.html.
	echo "Output buffering is manually turned on and we are now looking at output_buffering.html"; 
	exit;
  /*Can use the following examples:
  header("Content-type: application/pdf");
  header("Content-type: application/vnd.ms-excel; name='excel'");
  header("Content-disposition: attachment; filename=myfile.xls");
  
  */
?>



</body>
</html>
<?php
	ob_end_flush(); //Need to use this if "Output Buffering" is turned off.
?>

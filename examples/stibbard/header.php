<?php
if(!session_id()) session_start();
echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <meta name='description' content='Template HTML Document'>
  <meta name='keywords' content='comma,separated,keywords'>
  <meta name='author' content='Robert Holland'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title></title>
<script type='text/javascript' src='http://example.com/js/filename.js'></script>
<link rel='stylesheet' href='http://example.com/css/filname.css' />

</head>
<style>
/*common css*/
th {background-color:#c0c0c0;}
table, th, td {border-collapse:collapse; border: 1px solid black;}
tr:nth-child(even) {background: #CCC};
tr:nth-child(odd) {background: #FFF};
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: underline;}
a:active {text-decoration: underline;}
.section1 {background-color:#4BAD85;}
.grey {background-color:#a0a0a0;}
</style>
<body>
<form method='post' action='x.php'>
  <select name='stibbard'>
  <option value='1'>See Lesson 1</option><br />
  <option value='2'>See Lesson 2</option><br />
  <option value='3'>See Lesson 3</option><br />
  <option value='4'>See Lesson 4</option><br />
  <option value='5'>See Lesson 5</option><br />
  <option value='6'>See Lesson 6</option><br />
  <option value='7'>See Lesson 7</option><br />
  <option value='8'>See Lesson 8</option><br />
</select>
<input type='submit' value='Choose' />
</form>
<br /><hr /><br />
";

?>

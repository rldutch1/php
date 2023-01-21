<?php 
$html="
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<meta name='description' content='Template HTML Document'>
<meta name='keywords' content='comma,separated,keywords'>
<meta name='author' content='Robert Holland'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title></title>
<link rel='stylesheet' href='http://example.com/css/filname.css' />
<script type='text/javascript' src='http://example.com/js/filename.js'></script>
</head>
<script>
function check(elem) {
    document.getElementById('mySelect1').disabled = !elem.selectedIndex;
}
</script>
<style>
/*common css*/
table, th, td {border-collapse:collapse; border: 1px solid black;}
th {background-color:#ffff00;}
tr:nth-child(even) {background: #CCC;}
tr:nth-child(odd) {background: #FFF;}
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: underline;}
a:active {text-decoration: underline;}
th, td {padding: 5px;}
</style>

<body>

<div>
	<span><p>Select 'Yes' from dropdown to activate another dropdown.</p></span>
<form>
    <select id='mySelect' onChange='check(this);'>
        <option value='0'>No</option>
        <option value='3'>Yes</option>
    </select>

    <select id='mySelect1' disabled='disabled' >
        <option>Dep1</option>
        <option>Dep2</option>
        <option>Dep3</option>
        <option>Dep4</option>
    </select>
</form>

	<span><p>Select option from dropdown and display the option value.</p></span>
<select id='ddlFruits'>
    <option value='0'></option> <!-- Zero seems to prevent the alert from showing an empty message in Chrome. -->
    <option value='1'>Bannana</option>
    <option value='2'>Blueberry</option>
    <option value='3'>Grapefruit</option>
</select>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
<script type='text/javascript'>
    $(function () {
        $('#ddlFruits').change(function () {
            var selectedText = $(this).find('option:selected').text();
            var selectedValue = $(this).val();
            alert('Selected Text: ' + selectedText + ' Value: ' + selectedValue);
        });
    });
</script>
</div>
</body>
</html>
";
echo nl2br(htmlentities($html,ENT_QUOTES));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Template HTML Document">
<meta name="keywords" content="comma,separated,keywords">
<meta name="author" content="Robert Holland">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="http://example.com/css/filname.css" />
<script type="text/javascript" src="http://example.com/js/filename.js"></script>
</head>
<script>
function check(elem) {
    document.getElementById('mySelect1').disabled = !elem.selectedIndex;
}
</script>
<style>
/*common css*/
table, th, td {border-collapse:collapse; border: 1px solid black;}
th {background-color:#ffff00;}
tr:nth-child(even) {background: #CCC;}
tr:nth-child(odd) {background: #FFF;}
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: underline;}
a:active {text-decoration: underline;}
th, td {padding: 5px;}
</style>

<body>
<hr />
<div>
	<span><p>Select "Yes" from dropdown to activate another dropdown.</p></span>
<form>
    <select id="mySelect" onChange="check(this);">
        <option value='0'>No</option>
        <option value='3'>Yes</option>
    </select>

    <select id="mySelect1" disabled="disabled" >
        <option>Dep1</option>
        <option>Dep2</option>
        <option>Dep3</option>
        <option>Dep4</option>
    </select>
</form>

	<span><p>Select option from dropdown and display the option value.<br />https://www.aspsnippets.com/Articles/Get-selected-Text-and-Value-of-DropDownList-in-OnChange-event-using-JavaScript-and-jQuery.aspx</p></span>
<select id="ddlFruits">
    <option value="0"></option>
    <option value="1">Bannana</option>
    <option value="2">Blueberry</option>
    <option value="3">Grapefruit</option>
</select>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ddlFruits").change(function () {
            var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
            alert("Selected Text: " + selectedText + " Value: " + selectedValue);
        });
    });
</script>
</div>
</body>
</html>

<?php
/*
Source: http://forums.codeguru.com/showthread.php?464634-HTML-Keypad
Purpose: Teach user how to activate and deactivate the alarm.
Filename: button_control_panel1.php
Note 1: Display 45 second countdown.
Note 2: Check the last number to validate "Off", "Away", "Stay".
*/
?>

<html>

<body onload="emptyCode();">

	<?php $code = rand(1000,9999);
	$task1 = "The alarm is beeping!";
	$task2 = "You are leaving the house.";
	$task3 = "You are staying home.";

	$task_num = rand(1,3);
	if($task_num == 1) {
		echo $task1;
		$fullcode = $code . $task_num;
		//$task_num = '';
	}
	else if ($task_num == 2) {
		echo $task2;
		$fullcode = $code . $task_num;
		//$task_num = '';
	}
	else {
		echo $task3;
		$fullcode = $code . $task_num;
		//$task_num = '';
	}
	?>

	Your code is: <?php echo $code; ?>
<script type="text/javascript">
function addCode(key){
	var display_task = <?php echo $task_num . ";";?> //Dynamically setting the display task.
	var code = document.forms[0].code;
	if(code.value.length < 5){
		code.value = code.value + key;
	}
	if(code.value.length == 5 && code.value == '<?php echo $fullcode; ?>'){//Need to do the "Off", "Away", "Stay" validation here.
		document.getElementById("task<?php echo $task_num;?>").style.display = "block";//getElementById("task1"), ("task2"), ("task3").
		setTimeout(submitForm,2000);
	}
	else if (code.value.length == 5 && code.value != '<?php echo $fullcode; ?>') {
		document.getElementById("task4").style.display = "block";//getElementById("task1"), ("task2"), ("task3").
		setTimeout(submitForm,2000);
	}
}

function submitForm(){
	document.forms[0].submit();
}

function emptyCode(){
	document.forms[0].code.value = "";
}
</script>
<style>
body {
	text-align:center;
	background-color:#333333;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	color:yellow;
}
#keypad {margin:auto; margin-top:20px;}

#keypad tr td {
	vertical-align:middle;
	text-align:center;
	border:1px solid #000000;
	font-size:18px;
	font-weight:bold;
	width:40px;
	height:30px;
	cursor:pointer;
	background-color:#666666;
	color:#CCCCCC;}
#keypad tr td:hover {background-color:#999999; color:#FFFF00;}

.display {
	width:130px;
	margin:10px auto auto auto;
	background-color:#000000;
	color:#00FF00;
	font-size:18px;
	border:1px solid #999999;
}
#task {
	text-align:center;
	color:#009900;
	font-size:24px;
	font-weight:bold;
	display:none;
}
#task1 {
	text-align:center;
	color:#009900;
	font-size:24px;
	font-weight:bold;
	display:none;
}
#task2 {
	text-align:center;
	color:#009900;
	font-size:24px;
	font-weight:bold;
	display:none;
}
#task3 {
	text-align:center;
	color:#009900;
	font-size:24px;
	font-weight:bold;
	display:none;
}
#task4 {
	text-align:center;
	color:#FF0000;
	font-size:24px;
	font-weight:bold;
	display:none;
}
</style>

<form action="button_control_panel1.php" method="post">
<input type="text" name="code" value="" maxlength="4" class="display" readonly="readonly" />
<table id="keypad" cellpadding="5" cellspacing="3">
	<tr>
    	<td onclick="addCode('1');">1<br />Off</td>
        <td onclick="addCode('2');">2<br />Away</td>
        <td onclick="addCode('3');">3<br />Stay</td>
    </tr>
    <tr>
    	<td onclick="addCode('4');">4<br />Max</td>
        <td onclick="addCode('5');">5<br />Test</td>
        <td onclick="addCode('6');">6<br />Bypass</td>
    </tr>
    <tr>
    	<td onclick="addCode('7');">7<br />Chime</td>
        <td onclick="addCode('8');">8<br />Code</td>
        <td onclick="addCode('9');">9<br />Chime</td>
    </tr>
    <tr>
    	<td onclick="addCode('*');"><br />Ready</td>
        <td onclick="addCode('0');">0</td>
        <td onclick="addCode('#');">#</td>
    </tr>
</table>
<p id="task">You have 45 seconds to </p>
<p id="task1">You have 45 seconds to disable the alarm!</p>
<p id="task2">You have 45 seconds to leave!</p>
<p id="task3">You have 45 seconds to stay in or leave!</p>
<p id="task4">Try Again!</p>
</form>
<p>Note: The actual alarm keypad will not display your code.</p>
</body>
</html>

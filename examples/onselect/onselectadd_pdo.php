<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MySQL PDO</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >

	<img id="top" src="top.png" alt="">
	<div id="form_container">

		<form id="form_71303" class="appnitro" enctype="multipart/form-data" method="post" action="onselectadd_submit_pdo.php">
					<div class="form_description">
			<h2>Add More Names</h2>
		</div>
			<ul >
				<li id="li_1" >
				<label class="description" for="element_1">Name </label>
				<span>
				  <input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="20" value="" required />
				  <label>First</label>
				</span>
				<span>
				  <input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="20" value="" required />
				  <label>Last</label>
				</span><p class="guidelines" id="guide_1"><small>Name instructions.</small></p>
				</li>
				<li id="li_2" >
				<label class="description" for="element_2">Birthdate </label>
				<span>
				  <input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text" required /> /
				  <label for="element_2_1">MM</label>
				</span>
				<span>
				  <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text" required /> /
				  <label for="element_2_2">DD</label>
				</span>
				<span>
				  <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text" required />
				  <label for="element_2_3">YYYY</label>
				</span>

				<span id="calendar_2">
				  <img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">
				</span>
				<script type="text/javascript">
				  Calendar.setup({
				  inputField	 : "element_2_3",
				  baseField    : "element_2",
				  displayArea  : "calendar_2",
				  button		 : "cal_img_2",
				  ifFormat	 : "%B %e, %Y",
				  onSelect	 : selectDate
				  });
				</script>
				<p class="guidelines" id="guide_2"><small>Date instructions.</small></p>
				</li>
				<li id="li_3" >
				<label class="description" for="element_3">Hometown</label>
				<div>
				  <input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value="" required />
				</div><p class="guidelines" id="guide_3"><small>Hometown instructions.</small></p>
				</li>
				<li id="li_4" >
				<label class="description" for="element_4">Job</label>
				<div>
				  <input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value="" required />
				</div><p class="guidelines" id="guide_4"><small>Job instructions.</small></p>
				</li>
    <li class="buttons">
    <input type="hidden" name="form_id" value="71303" />
    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
    </li>
  </ul>
</form>
<div id="footer">
  <!-- Generated by <a href="http://www.phpform.org">pForm</a> -->
  <a href='onselect_pdo.php'>Back.</a>
</div>
</div>
<img id="bottom" src="bottom.png" alt="">
</body>
</html>

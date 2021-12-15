<?php
$fromphp = "Table Title";
echo "
<html>
	<title></title>
<head>

<script src='js/jquery-1.9.1.js' type='text/javascript' charset='utf-8'></script>

<script type='text/javascript'>
			$(document).ready(function(){
				$('.thetip0').hover(function(){//Hover on the class. This works on all classes in the document.
					//mouse enters
						$('.tooltip00').css('display','block');
				},function(){
					//mouse leaves
						$('.tooltip00').css('display','none');
				});

				$('.thetip1').hover(function(){//Hover on the class. This works on all classes in the document.
					//mouse enters
						$('.tooltip01').css('display','block');
				},function(){
					//mouse leaves
						$('.tooltip01').css('display','none');
				});

				$('.thetip2').hover(function(){//Hover on the class. This works on all classes in the document.
					//mouse enters
						$('.tooltip02').css('display','block');
				},function(){
					//mouse leaves
						$('.tooltip02').css('display','none');
				});

				$('.thetip3').hover(function(){//Hover on the class. This works on all classes in the document.
					//mouse enters
						$('.tooltip03').css('display','block');
				},function(){
					//mouse leaves
						$('.tooltip03').css('display','none');
				});

				$(document).mousemove(function(event){
					var mx = event.pageX+15;
					var my = event.pageY+15;
					$('.tooltip00').css('left',mx+'px').css('top',my+'px');
					$('.tooltip01').css('left',mx+'px').css('top',my+'px');
					$('.tooltip02').css('left',mx+'px').css('top',my+'px');
					$('.tooltip03').css('left',mx+'px').css('top',my+'px');
				});
			});

//$('#thetip td').tooltip01();

//$('#postop td[title]').tooltip00();
//$('#tester img[title]').tooltip00();

</script>

<style type='text/css'>
	.thetip0{
		margin-left:auto;
		margin-right:auto;
		margin-top:auto;
		/*width:250px; */
		background-color:#ffffff;
		color:#000000;
		padding:auto;
		text-align:left;
		}

	.thetip1{
		margin-left:auto;
		margin-right:auto;
		margin-top:auto;
		/*width:250px;*/
		background-color:#ffffff;
		color:#000000;
		padding:auto;
		text-align:left;
		}

	.thetip2{
		margin-left:auto;
		margin-right:auto;
		margin-top:auto;
		/*width:250px;*/
		background-color:#ffffff;
		color:#000000;
		padding:auto;
		text-align:left;
		}

	.thetip3{
		margin-left:auto;
		margin-right:auto;
		margin-top:auto;
		/*width:250px;*/
		background-color:#ffffff;
		color:#000000;
		padding:auto;
		text-align:center;
		}

	.tooltip00{
		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/
		z-index:2;
		width:auto;
		padding:5px;
		background-color:#ffff00;
		border:2px solid #000000;
		border-radius:15px; //Rounding the corners on the box.
		-moz-border-radius:15px; /*Firefox*/

		display:none; /*Hide from page so that it will only be shown on hover.*/

		}

	.tooltip01{
		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/
		z-index:2;
		width:auto;
		padding:5px;
		background-color:#ff0000;
		border:2px solid #000000;
		border-radius:15px; //Rounding the corners on the box.
		-moz-border-radius:15px; /*Firefox*/

		display:none; /*Hide from page so that it will only be shown on hover.*/

		}

	.tooltip02{
		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/
		z-index:2;
		width:auto;
		padding:5px;
		background-color:#00ff00;
		border:2px solid #000000;
		border-radius:15px; //Rounding the corners on the box.
		-moz-border-radius:15px; /*Firefox*/

		display:none; /*Hide from page so that it will only be shown on hover.*/

		}

	.tooltip03{
		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/
		z-index:2;
		width:auto;
		padding:5px;
		background-color:#5f9ea0;
		border:2px solid #000000;
		border-radius:15px; //Rounding the corners on the box.
		-moz-border-radius:15px; /*Firefox*/

		display:none; /*Hide from page so that it will only be shown on hover.*/

		}

	td.thetip0{
		background-color:#c0c0c0;
		border:2px solid #e0e0e0;
	}

	table,td,th
	{
		border:1px solid black;
	}

	table
	{
		width:50%;
		border-collapse:collapse;
	}

	th
	{
		height:50px;
	}

	#redthis
	{
		color:red;
	}

	</style>
</head>

<body>
<br />
<div><a href='tooltiptest1.php'>Toggle</a></div>
<table border='1' align='left'>
<caption class='thetip3'><b>Formatted Hover Data Displayed From a Hidden DIV.<br />All code for this page is inline.</b></caption>
<tr>
	<th>Header1</th>
	<th>Header2</th>
	<th>Header3</th>
	<th>Header4</th>
	<th>Header5</th>
</tr>
<tr>
	<td class='thetip0'>Data 1</td>
	<td>Data 1</td>
	<td>Data 1</td>
	<td>Data 1</td>
	<td class='thetip0'>Data 1</td>
</tr>
<tr>
	<td class='thetip0'>Data 2</td>
	<td class='thetip2'>Data 2</td>
	<td>Data 2</td>
	<td>Data 2</td>
	<td class='thetip0'>Data 2</td>
</tr>
<tr>
	<td class='thetip0'>Data 3</td>
	<td>Data 3</td>
	<td class='thetip2'>Data 3</td>
	<td>Data 3</td>
	<td class='thetip0'>Data 3</td>
	</tr>
<tr>
	<td class='thetip0'>Data 4</td>
	<td>Data 4</td>
	<td>Data 4</td>
	<td class='thetip2'>Data 4</td>
	<td class='thetip0'>Data 4</td>
	</tr>
<tr>
	<td class='thetip2'>Data 5</td>
	<td class='thetip1'>Data 5</td>
	<td class='thetip0'>Data 5</td>
	<td>Data 5</td>
	<td class='thetip0' id='postop' title='Hello'>Data 5</td>
</tr>
</table>

	<div class='tooltip00'>
		1. RT conducts patient evaluation following <b id='redthis'>Eval & Treat Algorithm</b>.<br />
		2. Level of Patients Asthma Control and current medications determined by RT.<br />
		3. If Indicated, follow <b id='redthis'>Aerosolized medication Algorithm</b>.<br />
		4. Plan constructed for therapy Pre-Op / Post-Op. If poorly controlled, advised or adminster step up in therapy (glucocorticoids).
	</div>
	<div class='tooltip01'>
		1. Refer to surgeon or anesthesia provider about risks and potential orders.<br />
		2. If recently identified, recommend follow-up for sleep study evaluation.<br />
		3. If treated, bring CPAP/Bi-PAP from home.
	</div>
	<div class='tooltip02'>
		1.  If not acutely symptomatic, contact referring provider to determine level of awareness.<br />
		2. Proceed with clearance & notify anesthesia.
	</div>
	<div class='tooltip03'>
		<table border='1'><caption>".$fromphp."</caption>
		<tr><th>Header1</th><th>Header2</th><th>Header3</th><th>Header4</th></tr>
		<tr><td>C1R1</td><td>C2R1</td><td>C3R1</td><td>C4R1</td></tr>
		<tr><td>C1R2</td><td>C2R2</td><td>C3R2</td><td>C4R2</td></tr>
		<tr><td>C1R3</td><td>C2R3</td><td>C3R3</td><td>C4R3</td></tr>
		</table>
	</div>
</body>
</html>
";
?>
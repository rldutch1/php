$(document).ready(function(){
	$('.thetip0').hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$('#tooltip00').css('display','block');
	},function(){
		//mouse leaves
			$('#tooltip00').css('display','none');
	});

	$('.thetip1').hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$('#tooltip01').css('display','block');
	},function(){
		//mouse leaves
			$('#tooltip01').css('display','none');
	});

	$('.thetip2').hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$('#tooltip02').css('display','block');
	},function(){
		//mouse leaves
			$('#tooltip02').css('display','none');
	});

	$('.thetip3').hover(function(){//Hover on the class. This works on all classes in the document.
		//mouse enters
			$('#tooltip03').css('display','block');
	},function(){
		//mouse leaves
			$('#tooltip03').css('display','none');
	});

	$(document).mousemove(function(event){
		var mx = event.pageX+15;
		var my = event.pageY+15;
		$('#tooltip00').css('left',mx+'px').css('top',my+'px');
		$('#tooltip01').css('left',mx+'px').css('top',my+'px');
		$('#tooltip02').css('left',mx+'px').css('top',my+'px');
		$('#tooltip03').css('left',mx+'px').css('top',my+'px');
	});
});


var hvrinfo = [];
hvrinfo.push("<style type='text/css'>");
hvrinfo.push("	.thetip0{");
hvrinfo.push("		margin-left:auto;");
hvrinfo.push("		margin-right:auto;");
hvrinfo.push("		margin-top:auto;");
hvrinfo.push("		/*width:250px; */");
hvrinfo.push("		background-color:#ffffff;");
hvrinfo.push("		color:#000000;");
hvrinfo.push("		padding:auto;");
hvrinfo.push("		text-align:left;");
hvrinfo.push("		}");

hvrinfo.push("	.thetip1{");
hvrinfo.push("		margin-left:auto;");
hvrinfo.push("		margin-right:auto;");
hvrinfo.push("		margin-top:auto;");
hvrinfo.push("		/*width:250px;*/");
hvrinfo.push("		background-color:#ffffff;");
hvrinfo.push("		color:#000000;");
hvrinfo.push("		padding:auto;");
hvrinfo.push("		text-align:left;");
hvrinfo.push("		}");

hvrinfo.push("	.thetip2{");
hvrinfo.push("		margin-left:auto;");
hvrinfo.push("		margin-right:auto;");
hvrinfo.push("		margin-top:auto;");
hvrinfo.push("		/*width:250px;*/");
hvrinfo.push("		background-color:#ffffff;");
hvrinfo.push("		color:#000000;");
hvrinfo.push("		padding:auto;");
hvrinfo.push("		text-align:left;");
hvrinfo.push("		}");

hvrinfo.push("	.thetip3{");
hvrinfo.push("		margin-left:auto;");
hvrinfo.push("		margin-right:auto;");
hvrinfo.push("		margin-top:auto;");
hvrinfo.push("		/*width:250px;*/");
hvrinfo.push("		background-color:#ffffff;");
hvrinfo.push("		color:#000000;");
hvrinfo.push("		padding:auto;");
hvrinfo.push("		text-align:center;");
hvrinfo.push("		}");

hvrinfo.push("	#thetip{");
hvrinfo.push("		margin-left:auto;");
hvrinfo.push("		margin-right:auto;");
hvrinfo.push("		margin-top:100px;");
hvrinfo.push("		/*width:250px;*/");
hvrinfo.push("		background-color:#ffffff;");
hvrinfo.push("		color:#000000;");
hvrinfo.push("		padding:auto;");
hvrinfo.push("		text-align:left;");
hvrinfo.push("		}");

hvrinfo.push("	#tooltip00{");
hvrinfo.push("		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/");
hvrinfo.push("		z-index:2;");
hvrinfo.push("		width:auto;");
hvrinfo.push("		padding:5px;");
hvrinfo.push("		background-color:#ffff00;");
hvrinfo.push("		border:2px solid #000000;");
hvrinfo.push("		border-radius:15px; //Rounding the corners on the box.");
hvrinfo.push("		-moz-border-radius:15px; /*Firefox*/");

hvrinfo.push("		display:none; /*Hide from page so that it will only be shown on hover.*/");

hvrinfo.push("		}");

hvrinfo.push("	#tooltip01{");
hvrinfo.push("		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/");
hvrinfo.push("		z-index:2;");
hvrinfo.push("		width:auto;");
hvrinfo.push("		padding:5px;");
hvrinfo.push("		background-color:#ff0000;");
hvrinfo.push("		border:2px solid #000000;");
hvrinfo.push("		border-radius:15px; //Rounding the corners on the box.");
hvrinfo.push("		-moz-border-radius:15px; /*Firefox*/");

hvrinfo.push("		display:none; /*Hide from page so that it will only be shown on hover.*/");

hvrinfo.push("		}");

hvrinfo.push("	#tooltip02{");
hvrinfo.push("		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/");
hvrinfo.push("		z-index:2;");
hvrinfo.push("		width:auto;");
hvrinfo.push("		padding:5px;");
hvrinfo.push("		background-color:#00ff00;");
hvrinfo.push("		border:2px solid #000000;");
hvrinfo.push("		border-radius:15px; //Rounding the corners on the box.");
hvrinfo.push("		-moz-border-radius:15px; /*Firefox*/");

hvrinfo.push("		display:none; /*Hide from page so that it will only be shown on hover.*/");

hvrinfo.push("		}");

hvrinfo.push("	#tooltip03{");
hvrinfo.push("		position:absolute; /*Allows it to be anywhere on the page without interrupting any other elements on the page.*/");
hvrinfo.push("		z-index:2;");
hvrinfo.push("		width:auto;");
hvrinfo.push("		padding:5px;");
hvrinfo.push("		background-color:#5f9ea0;");
hvrinfo.push("		border:2px solid #000000;");
hvrinfo.push("		border-radius:15px; //Rounding the corners on the box.");
hvrinfo.push("		-moz-border-radius:15px; /*Firefox*/");

hvrinfo.push("		display:none; /*Hide from page so that it will only be shown on hover.*/");

hvrinfo.push("		}");

hvrinfo.push("	td.thetip0{");
hvrinfo.push("		background-color:#c0c0c0;");
hvrinfo.push("		border:2px solid #e0e0e0;");
hvrinfo.push("	}");

hvrinfo.push("	table,td,th");
hvrinfo.push("	{");
hvrinfo.push("		border:1px solid black;");
hvrinfo.push("	}");

hvrinfo.push("	table");
hvrinfo.push("	{");
hvrinfo.push("		width:50%;");
hvrinfo.push("		border-collapse:collapse;");
hvrinfo.push("	}");

hvrinfo.push("	th");
hvrinfo.push("	{");
hvrinfo.push("		height:50px;");
hvrinfo.push("	}");

hvrinfo.push("	#redthis");
hvrinfo.push("	{");
hvrinfo.push("		color:red;");
hvrinfo.push("	}");
hvrinfo.push("</style>");

hvrinfo.push("<table border='1' align='left'>");
hvrinfo.push("<caption class='thetip3'><b>Formatted Hover Data Displayed From a Hidden DIV.<br />The .html and .css are being pushed to the page by .js.</b></caption>");
hvrinfo.push("<tr>");
hvrinfo.push("	<th>Header1</th>");
hvrinfo.push("	<th>Header2</th>");
hvrinfo.push("	<th>Header3</th>");
hvrinfo.push("	<th>Header4</th>");
hvrinfo.push("	<th>Header5</th>");
hvrinfo.push("</tr>");
hvrinfo.push("<tr>");
hvrinfo.push("	<td class='thetip0'>Data 1</td>");
hvrinfo.push("	<td>Data 1</td>");
hvrinfo.push("	<td>Data 1</td>");
hvrinfo.push("	<td>Data 1</td>");
hvrinfo.push("	<td class='thetip0'>Data 1</td>");
hvrinfo.push("</tr>");
hvrinfo.push("<tr>");
hvrinfo.push("	<td class='thetip0'>Data 2</td>");
hvrinfo.push("	<td class='thetip2'>Data 2</td>");
hvrinfo.push("	<td>Data 2</td>");
hvrinfo.push("	<td>Data 2</td>");
hvrinfo.push("	<td class='thetip0'>Data 2</td>");
hvrinfo.push("</tr>");
hvrinfo.push("<tr>");
hvrinfo.push("	<td class='thetip0'>Data 3</td>");
hvrinfo.push("	<td>Data 3</td>");
hvrinfo.push("	<td class='thetip2'>Data 3</td>");
hvrinfo.push("	<td>Data 3</td>");
hvrinfo.push("	<td class='thetip0'>Data 3</td>");
hvrinfo.push("	</tr>");
hvrinfo.push("<tr>");
hvrinfo.push("	<td class='thetip0'>Data 4</td>");
hvrinfo.push("	<td>Data 4</td>");
hvrinfo.push("	<td>Data 4</td>");
hvrinfo.push("	<td class='thetip2'>Data 4</td>");
hvrinfo.push("	<td class='thetip0'>Data 4</td>");
hvrinfo.push("	</tr>");
hvrinfo.push("<tr>");
hvrinfo.push("	<td class='thetip2'>Data 5</td>");
hvrinfo.push("	<td class='thetip1'>Data 5</td>");
hvrinfo.push("	<td class='thetip0'>Data 5</td>");
hvrinfo.push("	<td>Data 5</td>");
hvrinfo.push("	<td class='thetip0' id='postop' title='Hello'>Data 5</td>");
hvrinfo.push("</tr>");
hvrinfo.push("</table>");

hvrinfo.push("	<div id='tooltip00'>");
hvrinfo.push("		1. RT conducts patient evaluation following <b id='redthis'>Eval & Treat Algorithm</b>.<br />");
hvrinfo.push("		2. Level of Patients Asthma Control and current medications determined by RT.<br />");
hvrinfo.push("		3. If Indicated, follow <b id='redthis'>Aerosolized medication Algorithm</b>.<br />");
hvrinfo.push("		4. Plan constructed for therapy Pre-Op / Post-Op. If poorly controlled, advised or adminster step up in therapy (glucocorticoids).");
hvrinfo.push("	</div>");
hvrinfo.push("	<div id='tooltip01'>");
hvrinfo.push("		1. Refer to surgeon or anesthesia provider about risks and potential orders.<br />");
hvrinfo.push("		2. If recently identified, recommend follow-up for sleep study evaluation.<br />");
hvrinfo.push("		3. If treated, bring CPAP/Bi-PAP from home.");
hvrinfo.push("	</div>");
hvrinfo.push("	<div id='tooltip02'>");
hvrinfo.push("		1.  If not acutely symptomatic, contact referring provider to determine level of awareness.<br />");
hvrinfo.push("		2. Proceed with clearance & notify anesthesia.");
hvrinfo.push("	</div>");
hvrinfo.push("	<div id='tooltip03'>");
hvrinfo.push("		<table border='1'><caption>Table Title</caption>");
hvrinfo.push("		<tr><th>Header1</th><th>Header2</th><th>Header3</th><th>Header4</th></tr>");
hvrinfo.push("		<tr><td>C1R1</td><td>C2R1</td><td>C3R1</td><td>C4R1</td></tr>");
hvrinfo.push("		<tr><td>C1R2</td><td>C2R2</td><td>C3R2</td><td>C4R2</td></tr>");
hvrinfo.push("		<tr><td>C1R3</td><td>C2R3</td><td>C3R3</td><td>C4R3</td></tr>");
hvrinfo.push("		</table>");
hvrinfo.push("	</div>");

var hvrjoin = hvrinfo.join("");
document.getElementById("data_here").innerHTML = hvrjoin;

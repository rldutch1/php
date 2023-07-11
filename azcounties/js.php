<script language='JavaScript' type='text/javascript'>

    function check_value(fieldvalue)
    {
        switch(fieldvalue)
        {
            case 1:

                document.getElementById("imagedest").innerHTML = "<img src='Mohave County.png' width='550' height='600'>";
                    break;

            case 2:

                document.getElementById("imagedest").innerHTML = "<img src='Coconino County.png' width='550' height='600'>";
                    break;

            case 3:

                document.getElementById("imagedest").innerHTML = "<img src='Navajo County.png' width='550' height='600'>";
                    break;

            case 4:

                document.getElementById("imagedest").innerHTML = "<img src='Apache County.png' width='550' height='600'>";
                    break;

            case 5:

                document.getElementById("imagedest").innerHTML = "<img src='Yavapai County.png' width='550' height='600'>";
                    break;

            case 6:

                document.getElementById("imagedest").innerHTML = "<img src='La Paz County.png' width='550' height='600'>";
                    break;

            case 7:

                document.getElementById("imagedest").innerHTML = "<img src='Maricopa County.png' width='550' height='600'>";
                    break;

            case 8:

                document.getElementById("imagedest").innerHTML = "<img src='Gila County.png' width='550' height='600'>";
                    break;

            case 9:

                document.getElementById("imagedest").innerHTML = "<img src='Graham County.png' width='550' height='600'>";
                    break;

            case 10:

                document.getElementById("imagedest").innerHTML = "<img src='Greenlee County.png' width='550' height='600'>";
                    break;

            case 11:

                document.getElementById("imagedest").innerHTML = "<img src='Yuma County.png' width='550' height='600'>";
                    break;

            case 12:

                document.getElementById("imagedest").innerHTML = "<img src='Pima County.png' width='550' height='600'>";
                    break;

            case 13:

                document.getElementById("imagedest").innerHTML = "<img src='Pinal County.png' width='550' height='600'>";
                    break;

            case 14:

                document.getElementById("imagedest").innerHTML = "<img src='Santa Cruz County.png' width='550' height='600'>";
                    break;

            case 15:

                document.getElementById("imagedest").innerHTML = "<img src='Cochise County.png' width='550' height='600'>";
                    break;
        }
    }

</script>

<style>
.fnt {
	//text-align: center;
	color: red;
	}
table
	{
	//border:1px solid black;
	border: none;
	border-collapse: collapse;
	width: 99%;
	}
tr, td
	{
	//border:1px solid black;
	border: none;
	}
caption
	{
	text-align:left
	}
</style>

<!-- Two column table. First column radio buttons, second column images. -->
<form name='test'>
<table class='fnt'><caption class='fnt'><h2>Arizona Counties</h2></caption>
    <tr><td><input type="radio" name="field" value="one" onclick='check_value(1)'>Mohave</td><td rowspan='15'><div id='imagedest'></div></td></tr>
    <tr><td><input type="radio" name="field" value="two" onclick='check_value(2)'>Coconino</td></tr>
    <tr><td><input type="radio" name="field" value="three" onclick='check_value(3)'>Navajo</td></tr>
    <tr><td><input type="radio" name="field" value="four" onclick='check_value(4)'>Apache</td></tr>
    <tr><td><input type="radio" name="field" value="five" onclick='check_value(5)'>Yavapai</td></tr>
    <tr><td><input type="radio" name="field" value="six" onclick='check_value(6)'>La Paz</td></tr>
    <tr><td><input type="radio" name="field" value="seven" onclick='check_value(7)'>Maricopa</td></tr>
    <tr><td><input type="radio" name="field" value="eight" onclick='check_value(8)'>Gila</td></tr>
    <tr><td><input type="radio" name="field" value="nine" onclick='check_value(9)'>Graham</td></tr>
    <tr><td><input type="radio" name="field" value="ten" onclick='check_value(10)'>Greenlee</td></tr>
    <tr><td><input type="radio" name="field" value="eleven" onclick='check_value(11)'>Yuma</td></tr>
    <tr><td><input type="radio" name="field" value="twelve" onclick='check_value(12)'>Pima</td></tr>
    <tr><td><input type="radio" name="field" value="thirteen" onclick='check_value(13)'>Pinal</td></tr>
    <tr><td><input type="radio" name="field" value="fourteen" onclick='check_value(14)'>Santa Cruz</td></tr>
    <tr><td><input type="radio" name="field" value="fifteen" onclick='check_value(15)'>Cochise</td></tr>
</table>
</form>
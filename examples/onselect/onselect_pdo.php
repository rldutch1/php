<?php include('onselect_connect_pdo.php'); ?>
<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
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
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","onselect_db.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div><h2>Display information from a database table when selection list option is selected.</h2></div>

<?php
//********************************************************************
$statement = $handler->prepare("select * from onselect order by id;");
$statement->execute(); //Run the prepared query. Prevents MySQL injection.

$RowCount = $statement->rowCount(); //Count the number of rows returned.
echo "<form><select name='users' onchange='showUser(this.value)'>
  <option value=''>Select a person:</option>";
			while($r = $statement->fetch(PDO::FETCH_OBJ)){
    echo "<option value='" . $r->id . "'>" . $r->firstname . " " . $r->lastname . "</option>";
			}
		echo "  </select></form>";
//********************************************************************
?>

<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>


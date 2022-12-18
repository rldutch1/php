<?php include('onselect_connect_pdo.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>MySQL PDO</title>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "<b class='wrongselection'>Please select a person from the list or <a href='onselectadd_pdo.php' class='wrongselection'>add more names.</a></b>";
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
        xmlhttp.open("POST","onselect_db_pdo.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<style>
.wrongselection {color: red;}
</style>
</head>
<body>
<div><h2>Display information from a database table when selection list option is selected.</h2></div>

<?php
//*******************Drop-down selection Begin************************
$statement = $handler->prepare("select id, firstname, lastname from onselect order by lastname, firstname;");
$statement->execute(); //Run the prepared query. Prevents MySQL injection.

$RowCount = $statement->rowCount(); //Count the number of rows returned.
echo "<form><select name='users' onchange='showUser(this.value)'>
  <option value=''>Select a person:</option>";
			while($r = $statement->fetch(PDO::FETCH_OBJ)){
    echo "<option value='" . $r->id . "'>" . $r->lastname . " " . $r->firstname . "</option>";
			}
		echo "  </select></form>";
//*******************Drop-down selection End**************************
?>

<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<br /><br /><a href='onselectadd_pdo.php'>Add another person.</a>
</body>
</html>

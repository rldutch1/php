<?php include('onselect_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>MySQLi</title>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "<b class='wrongselection'>Please select a person from the list or <a href='onselectadd.php' class='wrongselection'>add more names.</a></b>";
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
        xmlhttp.open("POST","onselect_db.php?q="+str,true);
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
$sql="SELECT id, firstname, lastname FROM onselect order by lastname, firstname;";
$result = mysqli_query($con,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
echo "<form><select name='users' onchange='showUser(this.value)'>
  <option value=''>Select a person:</option>";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['id'] . "'>" . $row['firstname'] . " " . $row['lastname'] . "</option>";
}
echo "  </select></form>";
mysqli_close($con);
?>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<br /><br /><a href='onselectadd.php'>Add another person.</a>

</body>
</html>


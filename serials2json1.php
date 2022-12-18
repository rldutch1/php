<?php 
//To run this from the command line: php -f example.php
/*/ ---- UPDATE ---- //

mysql_to_json now executes the query inside of the class so you simply pass the query string to the class when
you set the query. Please make sure you have filtered the query strings before hand to protect yourself from 
injection as this class has no such features at this current time.

// ---- Update ---- /*/

//include the mysql_to_json class 
include('mysql_to_json.class.php'); //This class was used in PHP versions that didn't have the PHP convert to JSON function. I got it from Luke Santos. 

//Mysql stuff. 
mysql_connect('dbname.db.2627262.hostedresource.com', 'dbuser', 'dbpassword'); 
mysql_select_db('dbname');

$q=$_POST["Serials"];
echo $q;
//create a query string to use 
//$query = 'SELECT * FROM weapons order by serial'; 

//$query = "select FFLBook.Inventory_Number, transaction_number.serial, FFLBook.Manufacturer_importer, FFLBook.Model, FFLBook.Caliber_Gauge, transaction_number.customer_name_full, transaction_number.4473_document ". 
//"from FFLBook, transaction_number ". 
//"where FFLBook.Serial_Number = transaction_number.serial";

/*
$query = "select serials.* ".
"from serials ".
"order by software, license";
*/

$query="select * from serials where software like '".$q."';";


//Now mysql_to_json supports many methods of getting from your query to the json output, I will show you 2 methods 

///////////////////////////////////// 
// METHOD 1 - Using constructor   // 
/////////////////////////////////// 

//create a new instance of mysql_to_json
$mtj = new mysql_to_json($query); 

//show the json output 
echo $mtj->get_json(); 

/////////////////////////////////////// 
// METHOD 2 - Using method chaining // 
///////////////////////////////////// 

//create a new blank instance of mysql_to_json 
//Icommentedthisout $mtj = new mysql_to_json(); 

//show the json output through method chain 
//Icommentedthisout echo $mtj->set_query($query)->set_cbfunc('CoolFuctionName')->get_json(); 

?>


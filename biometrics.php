<?php 

include('pw.php');
include('mysql_to_json.class.php'); 

$query = "select 
		d.serial 
		, d.device
		, l.pri_location
		, s.sub_location
		, o.status
		, i.name

from bio_device d
		
						join bio_location l on (d.loc_id = l.id)
						join bio_sublocation s on (d.subloc_id = s.id)
						join bio_operable o on (d.operable_id = o.id)
						join bio_inventory i on (d.inv_id = i.id)
						order by serial";

/*
if (!mysql_query($query,$con))
   {
   die('Error: ' . mysql_error());
   }
*/

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


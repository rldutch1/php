<?php
//This file works with files.html and page2.php.
include('includes/pw5.php');
include('includes/functions.php');

//$query = mysql_query( "select filename, filetype, filesize, filecontents from files where ID='$ID'" );
$query = mysql_query( "select filename, filetype, filesize, filecontents from files where id in (4);" );

# perform an error check
if( mysql_num_rows( $query ) == 1 )

{

     $filename = mysql_result( $query, 0, 0 );
     $fileType = mysql_result( $query, 0, 1 );
     $fileSize = mysql_result( $query, 0, 2 );
     $fileContents = mysql_result( $query, 0, 3 );

     header( "Content-type: $fileType" ); // to tell the browser what type of file this is
     header( "Content-length: $fileSize" ); // to tell the browser how big the file is
     header( "Content-Disposition: attachment; filename=$filename" ); // add this if you want to force the user to download the file, rather than view it in the browser
     header( "Content-Description: From Glodev.com" ); // completely optional field
     echo $filecontents; // the meat of the file

}

else

{

     echo "File not found";

}

?>
<?php
if(!session_id()) session_start(); //If session has not been started, start it.

if($_POST['stibbard']=='1')
{
     @header('location:lesson1.php');
}
else if($_POST['stibbard']=='2')
{
     @header('location:lesson2.php');
}
else if($_POST['stibbard']=='3')
{
     @header('location:lesson3.php');
}
else if($_POST['stibbard']=='4')
{
     @header('location:lesson4.php');
}
else if($_POST['stibbard']=='5')
{
     @header('location:lesson5.php');
}
else if($_POST['stibbard']=='6')
{
     @header('location:lesson6.php');
}
else if($_POST['stibbard']=='7')
{
     @header('location:lesson7.php');
}
else if($_POST['stibbard']=='8')
{
     @header('location:lesson8.php');
}

?>

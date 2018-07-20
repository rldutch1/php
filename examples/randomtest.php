<?php
$code = rand(1000,9999);
$task_num = rand(1,3);
$ct = $code . $task_num;
echo $code . "-" . $task_num . "\r\n";
echo $ct . "\r\n";;

$code1 = mt_rand(1000,9999); //mt_rand() is supposedly quicker than rand();
$task_num1 = rand(1,3);
$ct1 = $code1 . $task_num1;
echo $code1 . "-" . $task_num1 . "\r\n";
echo $ct1 . "\r\n";;
?>

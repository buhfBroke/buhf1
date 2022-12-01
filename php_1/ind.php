<?php
$sec = 60;
$hour = 60;
$sec_hour = $sec * $hour;
echo  $sec_hour; 
echo '<br>';
$day = 24;
$day_sec_hour = $sec_hour * $day;
echo $day_sec_hour;
echo '<br>';
$month = 30;
$all = $day_sec_hour * $month;
echo $all;
echo '<br>';
?>


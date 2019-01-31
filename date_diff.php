<?php
$date1=date_create("2013-03-1");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);


$diffs=$diff->format("%R%a");

$color = "#000000";

if ($diffs<=5)
   $color = "blue";
else 
   $color = "red";

echo "<span style=\"color: $color\">Text</span>";
?>
<?php 

// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = "$_SERVER[REQUEST_URI]";
// echo $actual_link;
$thing_link = "https://capetownhikingspots.pory.app" . $actual_link;
// echo $thing_link;
echo file_get_contents($thing_link);


?>
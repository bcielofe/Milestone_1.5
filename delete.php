<?php

$key = $_GET['key'];
//JSON FILE
$string = file_get_contents("services.json");
$services = json_decode($string, true);

//to delete
unset($services[$key]);

//to show again the new array
$fp = fopen('services.json', 'w');
fwrite($fp, json_encode($services, JSON_PRETTY_PRINT));
fclose($fp);

//no need to refresh
header('Location: contentarea.php');

?>

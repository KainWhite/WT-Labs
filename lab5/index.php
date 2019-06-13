<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'wt_events';
$tableName = 'events';

$link = mysqli_connect($host, $user, $password, $dbName);
if(!$link)
{
    echo "mysqli_connect was unsuccessfull. Errno: ".mysqli_connect_errno().". Error: ".mysqli_connect_error();
    exit;
}
$requestResult = mysqli_query($link, "SELECT * FROM $tableName") or die ( mysqli_error($link) );
$i = 0;
while($event = mysqli_fetch_assoc($requestResult)) {
    $contentList[$i] = $event;
    $i++;
}
require "sample.phtml";

mysqli_close($link);

?>

<?php

$logFile = fopen("log.txt", "a+b") or die("unable to open log.txt");
$timeNow = time();
fwrite($logFile, $timeNow.PHP_EOL);
fseek($logFile, 0);
$contentList["visitorsToday"] = 0;
$contentList["visitorsWeek"] = 0;
$contentList["visitorsMonth"] = 0;
$contentList["visitorsYear"] = 0;
while(!feof($logFile))
{
    $date = fgets($logFile);
    $date = (int)$date;
    if($timeNow - $date < 60*60*24) {
        $contentList["visitorsToday"]++;
    }
    if($timeNow - $date < 60*60*24*7) {
        $contentList["visitorsWeek"]++;
    }
    if($timeNow - $date < 60*60*24*30) {
        $contentList["visitorsMonth"]++;
    }
    if($timeNow - $date < 60*60*24*365) {
        $contentList["visitorsYear"]++;
    }
}
fclose($logFile);
require "sample.phtml";

?>

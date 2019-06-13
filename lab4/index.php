<?php

$emailRegExp = "/(\w+@\w+\.\w+)/u";
$emailReplace = "";
$sample = file_get_contents("sample.html");
$sample = preg_replace($emailRegExp, "<a href=\"mailto:$1\">$1</a>", $sample);
echo $sample;

?>

<?php

$contentItemCount = 3;
$cookieFieldNames = array("cookieName", "cookieValue", "cookieTime");
$cookieFieldCaptions = array("Cookie name", "Cookie value", "Cookie time");
for ($i = 0; $i < $contentItemCount; $i++) {
    $contentList[$i] = [
        "cookieFieldName" => $cookieFieldNames[$i],
        "cookieFieldCaption" => $cookieFieldCaptions[$i]
    ];
}
require "sample.phtml";

?>

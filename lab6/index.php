<?php

$contentItemCount = 2;
$orderFieldNames = array("productName", "productColor");
$orderFieldCaptions = array("Product name", "Product color");
for ($i = 0; $i < $contentItemCount; $i++) {
    $contentList[$i] = [
        "orderFieldName" => $orderFieldNames[$i],
        "orderFieldCaption" => $orderFieldCaptions[$i]
    ];
}
require "sample.phtml";

?>

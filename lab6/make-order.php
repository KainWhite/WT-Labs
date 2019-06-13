<?php

$data = $_POST;
echo "Order successfull!<br>";
foreach ($data as $orderField => $fieldValue) {
    echo "$orderField: $fieldValue<br>";
}

?>

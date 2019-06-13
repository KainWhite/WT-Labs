<?php

$data = $_POST;
$success = setcookie($data["cookieName"], $data["cookieValue"], time() + $data["cookieTime"]);
if($success) {
    echo "Cookie created!<br>";
    echo print_r($_COOKIE)."<br>";
    foreach ($data as $cookieField => $fieldValue) {
        echo "$cookieField: $fieldValue<br>";
    }
} else {
    echo "Cookie was not created.<br>";
}

?>

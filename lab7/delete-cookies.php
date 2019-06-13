<?php

foreach ($_COOKIE as $key => $value) {
    setcookie( $key, $value, time() - 3600);
}
echo "Cookies deleted!<br>";

?>

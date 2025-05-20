<?php
define('SERVER', 'sql308.infinityfree.com');
define('USERNAME', 'if0_38877711');
define('PASSWORD', 'gajahduduk88');
define('DATABASE', 'if0_38877711_db_blog');

function dbkonek() {
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    return $mysqli->connect_errno ? false : $mysqli;
}
?>

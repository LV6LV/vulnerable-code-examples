<?php

$url = $_GET['pfpurl'];
$pfp = file_get_contents($url);
header("content-type: image/png");
print $pfp;

?>

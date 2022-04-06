<?php

// log ip and user agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
file_put_contents("/tmp/log.txt", $ip . " " . $userAgent, FILE_APPEND);

// router
include("./pages/" . $_GET['page']);

?>

<?php

$ip = $_GET['ip'];
echo shell_exec("ping -c 1 " . $ip);

?>

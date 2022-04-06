<?php

$pfp = file_get_contents("./images/" . $_GET['image']);
header("content-type: image/png");
print($pfp);

?>

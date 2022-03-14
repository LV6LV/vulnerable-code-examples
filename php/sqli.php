<?php

$db = new SQLite3('test.db');
$result = $db->query("SELECT name FROM users WHERE id = " . $_GET['userid']);
while ($row = $result->fetchArray()) {
    echo "Hello, " . $row['name'] . "!\n";
}

// python3 ~/tools/sqlmap-dev/sqlmap.py -u "http://localhost:1234/sqli.php?userid=1" --dbms=sqlite -T users --dump

?>

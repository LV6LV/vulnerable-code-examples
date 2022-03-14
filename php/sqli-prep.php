<?php

$db = new SQLite3('test.db');

$db->exec("CREATE TABLE users(id INTEGER PRIMARY KEY, name TEXT, password TEXT)");
$db->exec("INSERT INTO users(name, password) VALUES('Tim', 'Password1')");
$db->exec("INSERT INTO users(name, password) VALUES('Carol', 'Summer1')");
$db->exec("INSERT INTO users(name, password) VALUES('Michael', '123456')");
$db->exec("INSERT INTO users(name, password) VALUES('Patricia', 'Winter2019!')");
$db->exec("INSERT INTO users(name, password) VALUES('Darren', 'Dazza!')");
$db->exec("INSERT INTO users(name, password) VALUES('Jenny', 'Jendogz')");

?>

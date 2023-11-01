<?php
$servername = "mariadb";
$username = "exampleuser";
$password = "examplepass";
$dbname = "products";

$connection = new mysqli($servername, $username, $password, $dbname);
$query      = 'SELECT * FROM appleProducts ORDER BY id';
$result     = $connection->query($query);
$item       = $result->fetch_assoc();

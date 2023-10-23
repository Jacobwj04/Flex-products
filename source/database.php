<?php
$servername = "mariadb";
$user = "exampleuser";
$password = "examplepass";
$db = "products";

$dateTime = new DateTime();
$dateNow = $dateTime->format('Y-m-d H:i:s');

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$db", $user, $password);
    $statement = $conn->prepare("INSERT INTO users(name, email, date, active) VALUES(:name, :email, :date, :active)");
    $statement->execute([
        "name" => $name,
        "email" => $email,
        "date" => $dateNow,
        "active" => 0,
    ]);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
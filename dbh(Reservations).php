<?php

$dsn = "mysql:host=localhost;dbname=n.j luxury";
$dbusername = "dwhitaker";
$dbpassword = "";


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    echo '<p>You are connected to the database!</p>';
} catch(Exception $e) {
    $error_message = $e->getMessage();
echo '<p>An error occurred while connecting to
the database: ' $error_message </p>;
}



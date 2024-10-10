<?php
$dsn = 'mysql:host=localhost;dbname=n.j luxury';
$username = 'root';
$password = '';
// creates PDO object
$db = new PDO($dsn, $username, $password);

try {
    $db = new PDO($dsn, $username, $password);
    echo 'You are connected to the database!';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>

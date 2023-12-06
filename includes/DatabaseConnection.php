<?php
try {
    $pdo = new PDO('mysql:host=localhost; dbname=forum; charset=utf8mb4','root', '');

    $sql = 'SELECT * FROM user';
    $users = $pdo->query($sql);
    $sql = 'SELECT * FROM post';
    $posts = $pdo->query($sql);

} catch (PDOException $e){
    $error = "Unable to connect to the database server: " . $e;
}
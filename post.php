<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DataBaseFunctions.php';

    //$posts = allPosts($pdo);
    $title = 'Student Forums';
    //$totalPosts = totalPosts($pdo);

    ob_start();
    include 'templates/posts.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output= 'Database error: ' . $e->getMessage();
}
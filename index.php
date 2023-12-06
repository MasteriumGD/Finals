<?php
$title = 'Wish version of Quora';
ob_start();
include 'templates/mainpage.html.php';
$mainpage = ob_get_clean();
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
include 'templates/layout.html.php';
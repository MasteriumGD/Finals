<?php
include 'includes/DatabaseConnection.php';
$repeater=1;
if(isset($_POST["login"]) and !empty($_POST['email']) and !empty($_POST['password'])){
    foreach($users as $user):
        if($_POST['email']!=$user['email']):
            $repeater = 0;
        endif;
        if($_POST['password']!=$user['password']):
            $repeater = 0;
        endif;
    endforeach;
}else{
    $repeater = 0;
}
if($repeater==1){
    include 'index.php';
}else{
    $title = "Log In";
    ob_start();
    include 'templates/login.html.php';
    $mainpage = ob_get_clean();
    include 'templates/layout.html.php';
}
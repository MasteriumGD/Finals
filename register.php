<?php
include 'includes/DatabaseConnection.php';
include 'includes/DataBaseFunctions.php';
$repeater=1;
if(isset($_POST["login"]) and !empty($_POST['username']) and !empty($_POST['email']) and !empty($_POST['password'])){
    foreach($users as $user):
        if($_POST['email']==$user['email']):
            $repeater = 0;
        endif;
        if($_POST['username']==$user['username']):
            $repeater = 0;
        endif;
    endforeach;
}else{
    $repeater = 0;
}
if($repeater==1){
    insertUser($pdo, $_POST['username'], $_POST['email'], $_POST['password']);
    include 'index.php';
}else{
    $title = "Register";
    ob_start();
    include 'templates/register.html.php';
    $mainpage = ob_get_clean();
    include 'templates/layout.html.php';
}
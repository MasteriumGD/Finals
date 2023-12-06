<?php
include 'includes/DatabaseConnection.php';
foreach($users as $user):
    if($id==$user['id']):
        $username = $user['username'];
        break;
    endif;
endforeach;
?>
<a><?=$username?></a>
<a> | </a>
<a href="index.php">Log Out</a>
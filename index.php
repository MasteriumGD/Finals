<?php
$title = 'Wish version of Quora';
ob_start();
include 'templates/mainpage.html.php';
$mainpage = ob_get_clean();
include 'templates/layout.html.php';
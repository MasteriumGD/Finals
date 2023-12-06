<?php
//source for code is from https://www.w3schools.com/php/php_file_upload.asp
$uploadOk = 1;
if(isset($_POST["submit"])and $_POST['submit']=="Post" and empty($_POST["title"]) and empty($_POST["fileToUpload"]) and isset($_POST["fileToUpload"])) {
    $target_dir = "images/";
    $temp_name = htmlspecialchars(time());
    $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . $temp_name . "." . $imageFileType;

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    $output = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
    } else {
        $output = "File is not an image.";
    $uploadOk = 0;
    }


    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $output = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $output = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $output = "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $output = "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            $output = "Sorry, there was an error uploading your file.";
        }
    }
    
}else{
    ob_start();
    include 'templates/addpost.html.php';
    $output = ob_get_clean();
}
include 'templates/addpost.html.php';
?>
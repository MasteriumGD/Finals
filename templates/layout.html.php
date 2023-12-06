<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="wishquora.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header>
            <div class="headerLeft"><h1><a href="index.php">Wish version of Quora</a></h1></div>
            <div class="headerRight"><h1><?php
                                        if(!isset($id) or $id==""){
                                            include 'templates/registerlogin.html.php';
                                        }else{
                                            include 'templates/username.html.php';
                                        }?>
                                    </h1></div>
        </header>

        <main>
            <?=$mainpage?>
        </main>

        <footer>&copy; WVoQ 2023</footer>
    </body>
</html>
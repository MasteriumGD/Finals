<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="wishquora.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header>
            <div class="headerLeft"><h1>Wish version of Quora</h1></div>
            <div class="headerRight"><h1><a href="login.php">Login</a></h1></div>
        </header>

        <main>
            <div class="form">
                <?php include 'addpost.html.php'?>

                <div class="formCenter">
                    <div class="dropDown">
                        <form action="" method="post">
                            <label for="class">Specify which class to look at:</label>
                            <?php include 'dropdown.html.php'?>
                            <input type="submit" name="submit" value="Submit"/>
                        </form>
                    </div>

                    <div class="formPost">
                        <form action="/comment.php">
                            <div class="postDetails">
                                <?php include 'post.php'?>
                                <?=$output?>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="formRight">
                    <h2>Welcome</h2><br>
                    Ask and answer questions of your fellow students
                </div>
            </div>
        </main>

        <footer>&copy; WVoQ 2023</footer>
    </body>
</html>
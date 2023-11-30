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
                <div class="formLeft">
                    <form action="/newpost.php">
                        <input type="text" id="title" name="title" placeholder="Title"><br>
                        <textarea id="content" name="content" cols="50" rows="5" placeholder="Content"></textarea><br>
                        <input type="file" id="img" name="img" accept="image/*"><br>
                        <input type="Submit" value="Post"><br>
                    </form>
                </div>

                <div class="formCenter">
                    <div class="dropDown">
                        <form action="" method="post">
                            <label for="cars">Specify which class to look at:</label>
                            <select id="classes" name="classes" onchange="selectedClass()">
                                <option value="1">1770</option>
                                <option value="2">1773</option>
                                <option value="3">1840</option>
                            </select>
                        </form> <br>
                    </div>

                    <?php include 'post.php'?>
                    <div class="formPost">
                        <form action="/comment.php">
                            <div class="postDetails">
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
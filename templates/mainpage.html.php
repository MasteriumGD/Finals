<div class="form">
    <?php include 'addpost.php'?>

    <div class="formCenter">
        <div class="dropDown">
            <form action="" method="post">
                <label for="class">Specify which class to look at:</label>
                <?php include 'templates/dropdown.html.php'?>
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
        <?php include 'templates/home.html.php'?>
    </div>
</div>
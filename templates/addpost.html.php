<div class="formLeft">
    <form action="" method="post">
        <h2>Create new post</h2>
        <input type="text" id="title" name="title" placeholder="Title"><br>
        <textarea id="content" name="content" cols="50" rows="5" placeholder="Content"></textarea><br>
        <input type="file" id="img" name="img" accept="image"><br>
        <label for="class">Class: </label>
        <?php include'dropdown.html.php'?><br>
        <input type="submit" name="submit" value="Post"><br>
    </form>
</div>
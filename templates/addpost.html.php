<div class="formLeft">
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Create new post</h2>
        <input type="text" id="title" name="title" placeholder="Title"><br>
        <textarea id="content" name="content" cols="50" rows="5" placeholder="Content"></textarea><br>
        <input type="file" id="fileToUpload" name="fileToUpload"><br>
        <label for="class">Class: </label>
        <?php include'dropdown.html.php'?><br>
        <input type="submit" name="addpost" value="Post"><br>
    </form>
</div>
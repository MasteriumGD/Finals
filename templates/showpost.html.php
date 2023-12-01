<blockquote>
    <p><h2><?=htmlspecialchars($fpost['title'], ENT_QUOTES, 'UTF-8')?></h2>
    <u>posted by <?=htmlspecialchars($fpost['username'], ENT_QUOTES, 'UTF-8')?> 
    in class <?=htmlspecialchars($fpost['category'], ENT_QUOTES, 'UTF-8')?></u></p><br></br>

    <?=htmlspecialchars($fpost['content'], ENT_QUOTES, 'UTF-8')?><br></br>
    <img src="images/<?=$fpost['filename']?>"/><br>

    <?php $postid = htmlspecialchars($fpost['id'], ENT_QUOTES, 'UTF-8')?><br>
    <textarea id="<?=$postid?>" name="content" cols="50" rows="5" placeholder="Comment"></textarea>
    <input type="file" id="img" name="img" accept="image/*">
    <br></br><input type="Submit" value="Reply">
</blockquote><br>
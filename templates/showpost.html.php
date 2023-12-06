<blockquote>
    <p><h2><?=htmlspecialchars($fpost['title'], ENT_QUOTES, 'UTF-8')?></h2>
    <u>posted by <?=htmlspecialchars($fpost['username'], ENT_QUOTES, 'UTF-8')?> 
    in class <?=htmlspecialchars($fpost['category'], ENT_QUOTES, 'UTF-8')?></u></p><br></br>

    <?=htmlspecialchars($fpost['content'], ENT_QUOTES, 'UTF-8')?><br></br>
    <?php if($fpost['imagename']!=NULL): ?>
    <img src="images/<?=$fpost['imagename']?>"/><br>
    <?php endif; ?>

    <?php $postid = htmlspecialchars($fpost['id'], ENT_QUOTES, 'UTF-8')?>
    <textarea id="<?=$postid?>" name="content" cols="50" rows="5" placeholder="Comment"></textarea>
    <input type="Submit" name="Submit" value="Reply">
</blockquote><br>
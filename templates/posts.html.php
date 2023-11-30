<?php if(isset($error)): ?>
    <p> <?=$error ?> </p>
<?php else:
    foreach($posts as $post): ?>
    <blockquote>
        <h2><?=htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8')?></h2>
        <?=htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8')?><br>
        <?php $postid = htmlspecialchars($post['id'], ENT_QUOTES, 'UTF-8')?>
        <textarea id="<?=$postid?>" name="content" cols="50" rows="5" placeholder="Comment"></textarea>
        <input type="file" id="img" name="img" accept="image/*">
        <input type="Submit" value="Reply">
    </blockquote>
<?php endforeach;
    endif;
?>
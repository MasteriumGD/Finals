<?php if(isset($error)): ?>
    <p> <?=$error ?> </p>
<?php else:
    if(!isset($_POST['classes'])):
        $classes=0;
    else:
        $classes=$_POST['classes'];
    endif;
    foreach($posts as $fpost):
        if($classes==$fpost['categoryid'] and $_POST['submit']=="Submit"):
            include 'templates/showpost.html.php';
        elseif($classes==0):
            include 'templates/showpost.html.php';
        endif;
    endforeach;
    endif;
?>
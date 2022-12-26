<?php require('ini.php'); ?>
<?php require('inc/layout/header.php'); ?>
<?php

$apost = new post;
$all_posts = $apost->get_all_posts();
    if (isset($_GET['pid'])){
        $all_posts = [$apost->get()];
    }
foreach ($all_posts as $post): 
    ?>
    <div class='post'>
        <h3><a href="?pid=<?php echo $post['pid'] ?>"> 
            <?php echo $post['title'] ?>
        </a></h3>
        <?php if (isset($_GET['pid'])): ?>
            <p><?php echo $post['content']?></p>
        <?php else: ?>
            <p><?php echo $post['excerpt']?></p>
        <?php endif ?>    
        <span>
            Published on:
                <?php echo $post['published_on']; ?>
        </span>
    </div>
<?php endforeach; ?>
<?php require( 'inc/layout/footer.php'); ?>
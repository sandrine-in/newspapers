<?php
global $post_data;

?>

<!-- article -->
<article class="clearfix">

    <figure>
        <div class="la-img post-id-<?php echo $post_data['id'] ?>" id="<?php echo $post_data['id'] ?>">
            <a class="la-anchor" href="single.php"></a>
        </div>
    </figure>

    <style>
        .post-id-<?php echo $post_data['id'] ?> {
            background: url('<?php echo $post_data['image'] ?>') no-repeat center center / cover;
        }
    </style>
    
    <!-- entry-header -->
    <header class="entry-header">
        <a class="la-category" href="category.php">
            <span><?php echo $post_data['category'] ?></span>
        </a>
        
        <h2>
            <a href="single.php"><?php echo $post_data['title'] ?></a>
        </h2>
    </header>
    <!-- ./entry-header -->

</article>
<!-- ./article -->

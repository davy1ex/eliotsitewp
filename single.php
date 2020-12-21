<?php get_header() ?>

<div class="container single-post">
    <div class="post-title">
        <h2><?php the_title() ?></h2>
    </div>

    <div class="post-body">
        <?php the_content() ?>
    </div>
</div>

<?php get_footer(); ?>
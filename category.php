<?php get_header() ?>

<!-- <div id="page-title">
    <div class="row">
        <div class="ten columns centered text-center">
            <p>efdsfsdffssdfsdjf ksjgkldjfdlk;jgd;flgjrio gujeiorgjrlke gjk;ldfjg;df</p>
        </div>    
    </div>
</div> -->

<div class="container">
    <div class="posts">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
            <article class="post">
                <h1><?php the_title() ?></h1>

                <?php the_content() ?>
            </article>

                <?
                    }
                }
                
                ?>
    </div>
</div>

    
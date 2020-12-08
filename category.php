<?php get_header() ?>

<div id="page-title">
    <div class="row">
        <div class="ten columns centered text-center">
            <p>efdsfsdffssdfsdjf ksjgkldjfdlk;jgd;flgjrio gujeiorgjrlke gjk;ldfjg;df</p>
        </div>    
    </div>
</div>


<div class="content-outer">
    <div id="page-content" class="row">
        <div id="primary" class="eight columns">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();s
                }
            }
            
            ?>
        </div>
    </div>
</div>
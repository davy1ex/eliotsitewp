<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
    <div class="posts container">
        <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>            
        <?php if( have_posts() ): ?>
            <?php while( have_posts() ): the_post(); ?>
                <div id="post-<?php get_the_ID(); ?>" class="post" <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>
                    <div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                    
                    <div class="meta">
                        <?php //author_profile_avatar_link(); ?> 
                        <div class="meta-date meta-child">date: <?php the_time('F jS, Y'); ?></div> 
                        <!-- <div class="meta-category meta-child"><?php //the_category(  ) ?></div>/ -->
                        <!-- <strong><//?php the_author_link(); ?></strong> /  -->
                        <!-- <div class="meta-comments meta-child"><?php //comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('% comments','example')); ?></div> -->
                    </div>
                    <div class="post-text-preview">
                        <?php the_excerpt(); ?>
                    </div>
                </div><!-- /#post-<?php //get_the_ID(); ?> -->

            <?php endwhile; ?>

            <div class="navigation">
                <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
            </div><!-- /.navigation -->

        <?php else: ?>

            <div id="post-404" class="noposts">

                <p><?php _e('None found.','example'); ?></p>

            </div><!-- /#post-404 -->

        <?php endif; wp_reset_query(); ?>

        </div><!-- /#content -->
    </div>
    
        

<?php get_footer(); ?>

<!-- (-1+2*exp(-s*@tau)-2*exp(-2*s*@tau)-2*exp(-7*s*@tau)+2*exp(-9*s*@tau)-2*exp(-10*s*@tau)+exp(-11*s*@tau))/s -->
<!-- (-1+2*exp(-s*@tau)-2*exp(-2*s*@tau)+2*exp(-4*s*@tau)-2*exp(-5*s*@tau)+2*exp(-8*s*@tau)-exp(-11*s*@tau))/s -->

<!-- (−1+2*exp(−s*@tau)−2*exp(−2*s*@tau)+2*exp(−4*@tau*s)−2*exp(−5*@tau*s)+2*exp(−8*@tau*s)−exp(−11*@tau*s))/s -->
 
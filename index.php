<?php get_header(); ?>
    <?php if ( is_front_page() ) : ?>
		<div class="wraper-swiper container">
            <div class="swiper-container">
                <?php
                    echo do_shortcode("[smartslider3 slider='2']");
                ?>
            </div>            
        </div>   

        <div class="wraper-swiper container">
            <div class="swiper-container">
                <?php
                    echo do_shortcode("[smartslider3 slider='3']");
                ?>
            </div>
        </div>
        </div>

        <div class="schedule container">
            <img src="<?php the_field('schedule') ?>" alt="">
        </div>
	<?php else : ?>
        <header class="page-header">
            <h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
        </header>
	<?php endif; ?>


     

<?php get_footer() ?>
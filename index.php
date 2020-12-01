<?php get_header(); ?>
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
        <img src="<?php echo get_template_directory_uri() . "/assets/images/schedule.png "?>" alt="">
    </div> 

<?php get_footer() ?>
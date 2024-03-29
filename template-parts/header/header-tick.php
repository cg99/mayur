<div class="trending">
    <div class="heading"> <i class="fa fa-bolt"></i> Trending</div>
    <ul class="content" id="trendTitle">
    <?php 
    // pull 5 posts for trending
    $trend_posts = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => '5',
    ));
    while ($trend_posts->have_posts()) {
            $trend_posts->the_post(); 
            if(!is_sticky()) { ?>
            <li>
                <a class="hidden" href="<?php esc_url(the_permalink()); ?>">
                    <span><?php the_title() ?></span>
                </a>
            </li>
    <?php } } ?>
    <?php wp_reset_postdata(); ?>
    </ul>
    <div class="switch-button">
        <span id="btnPrev"><i class="ri-arrow-left-s-line"></i></span>
        <span id="btnNext"><i class="ri-arrow-right-s-line"></i></span>
    </div>
</div>
<!-- featured post group 1 -->
<div class="post-group" id="group1">
    <?php 
    // pull 5 posts 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => '4'
        );
        $query = new WP_Query( $args );
    ?>
    
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php get_template_part('template-parts/posts/post', 'article'); ?>

    <?php endwhile; wp_reset_postdata(); else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>
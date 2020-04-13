<!-- post group 6 -->

<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>International News</h3>
        </div>
        <div class="post-group" id="group6">
            <?php 
            // pull 5 posts 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '5'
                );
                $query = new WP_Query( $args );
            ?>
            
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/posts/post', 'article'); ?>

            <?php endwhile; wp_reset_postdata(); else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    
    <div class="group-sidebar">
        <div class="group-heading">
            <h3>More Posts</h3>
        </div>
        <div class="sidebar">
            <div class="group6-sidebar">
                <div class="post-group" id="sideGroup6">
                    <?php 
                    // pull 3 posts 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '3'
                        );
                        $query = new WP_Query( $args );
                    ?>
                    
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                        <?php get_template_part('template-parts/posts/post', 'article'); ?>

                    <?php endwhile; wp_reset_postdata(); else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="bigyapan">
                <figure>
                    <figcaption class="">- widget area -</figcaption>     
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/img/post_img.png" alt="Bigyapan">
                </figure>
           </div>
        </div>
    </div>
</div>
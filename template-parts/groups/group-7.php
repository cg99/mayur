<!-- post group 7 -->

<div class="group-container">
    <div class="group">
        <div class="group-heading" style="width: 350px;">
            <h3>First</h3>
        </div>
        <div class="post-group g7-a" id="group7">
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

    <div class="group">
        <div class="group-heading" style="width: 350px;">
            <h3>Second</h3>
        </div>
        <div class="post-group g7-b" id="group7">
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
    
    <div class="group-sidebar">
        <div class="group-heading">
            <h3>Post Links</h3>
        </div>
        <div class="sidebar">
            <div class="post-group" id="group-text-only">
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
            
            <div class="bigyapan">
                <figure>
                    <figcaption class="">- Advertisement -</figcaption>     
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/img/post_img.png" alt="Bigyapan">
                </figure>
           </div>
        </div>
    </div>
</div>
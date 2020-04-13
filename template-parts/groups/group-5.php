<!-- post group 5 -->

<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>Don't Miss</h3>
        </div>
        <div class="post-group" id="group5">
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
            <h3>One Post</h3>
        </div>
        <div class="sidebar">
            <div class="one-post">
                <div class="post-group" id="group5">
                    <?php 
                    // pull 1 posts 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '1'
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
        </div>
    </div>
</div>

<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>
            <?php 
                $cat = get_theme_mod('category_3');
                $cat = get_category($cat);
                $cat_post = $cat->name;  
                echo $cat_post;
            ?>
            </h3>
        </div>
        <div class="post-group" id="group3">
            <?php 
            // pull 6 posts                                                                                      
                $args = array(
                    'post_type' => 'post',
                    'category_name' => $cat_post,
                    'posts_per_page' => '6'
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
            <h3>Make it Modern</h3>
        </div>
        <div class="sidebar">
            <div class="post-block-container">
                <div class="post-block">
                    <?php 
                    // pull 4 posts 
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
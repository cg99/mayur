
<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>
            <?php 
                $cat = get_theme_mod('category_5');
                $cat = get_category($cat);
                $cat_post = $cat->name;  
                echo $cat_post;
            ?>
            </h3>
        </div>
        <div class="post-group" id="group5">
            <?php 
            // pull 5 posts                                                                                        
                $args = array(
                    'post_type' => 'post',
                    'category_name' => $cat_post,   
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
            <h3>
            <?php 
                $cat = get_theme_mod('side_category_2');
                $cat = get_category($cat);
                $cat_post = $cat->name;  
                echo $cat_post;
            ?>
            </h3>
        </div>
        <div class="sidebar">
            <div class="one-post">
                <div class="post-group" id="group5">
                    <?php 
                    // pull 1 posts 
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $cat_post,
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
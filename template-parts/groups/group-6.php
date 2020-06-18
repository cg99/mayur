
<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3>
            <?php 
                $cat = get_theme_mod('category_6');
                $cat = get_category($cat);
                $cat_post = $cat->name;  

                if (empty($cat_post)) { //check if category is set
                    $cat_post = 'uncategorized';
                }
                
                echo $cat_post;
            ?>
            </h3>
        </div>
        <div class="post-group" id="group6">
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
                $cat = get_theme_mod('side_category_3');
                $cat = get_category($cat);
                $cat_post = $cat->name;  

                if (empty($cat_post)) { //check if category is set
                    $cat_post = 'uncategorized';
                }

                echo $cat_post;
            ?>
            </h3>
        </div>
        <div class="sidebar">
            <div class="group6-sidebar">
                <div class="post-group" id="sideGroup6">
                    <?php 
                    // pull 3 posts 
                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $cat_post,
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
            <?php
                $getExpiryDate = get_theme_mod('ad_expiry_date_24', 'default');
				$expire = strtotime($getExpiryDate);
				$today = strtotime(date("Y-m-d"));
				if($expire > $today) { ?>
                <div class="bigyapan">
                    <figure>
                        <figcaption class="">- Advertisement -</figcaption>     
                        <img src="<?php echo get_theme_mod('home_ad_24', 'default');?>" alt="Bigyapan">
                    </figure>
                </div>
           <?php } ?>
        </div>
    </div>
</div>
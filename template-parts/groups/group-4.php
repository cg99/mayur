
<div class="group-container">
    <div class="group">
        <?php 	
            $colors = array("#00b9eb", "#f44", "#ff8922", "#ee6f00", "#d00", "#008b8b", "#444", "#00ff7f");
            $color_num = rand(0, 7);
        ?>
        <div class="group-heading" style="border-bottom-color: <?php echo $colors[$color_num]; ?>">
            <h3 style="background-color: <?php echo $colors[$color_num]; ?>">
            <?php 
                $cat = get_theme_mod('category_4');
                $cat = get_category($cat);
                $cat_post = $cat->slug;  

                if (empty($cat_post)) { //check if category is set
                    $cat_post = 'uncategorized';
                }

                echo $cat->name;
            ?>
            </h3>
        </div>
        <div class="post-group" id="group4">
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
    
    <div class="group-sidebar">
        <div class="group-heading">
            <h3 style="padding: 0;margin-top: 55px;"></h3>
        </div>
        <div class="sidebar">
            <div></div>
            <?php
                $getExpiryDate = get_theme_mod('ad_expiry_date_26', 'default');
				$expire = strtotime($getExpiryDate);
				$today = strtotime(date("Y-m-d"));
				if($expire > $today) { ?>
                <div class="bigyapan">
                    <figure>
                        <figcaption class="">- Advertisement -</figcaption>     
                        <img src="<?php echo get_theme_mod('home_ad_26', 'default');?>" alt="Bigyapan">
                    </figure>
                </div>
           <?php } ?>
        </div>
    </div>
</div>
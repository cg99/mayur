<div class="group-container">
    <div class="group">
        <?php
        $colors = array("#00b9eb", "#f44", "#ff8922", "#ee6f00", "#d00", "#008b8b", "#444", "#00ff7f");
        $color_num = rand(0, 7);
        ?>
        <div class="group-heading" style="border-bottom-color: <?php echo $colors[$color_num]; ?>">
            <h3 style="background-color: <?php echo $colors[$color_num]; ?>">More News</h3>
        </div>
        <div class="post-group" id="group8">
            <?php
            // pull 6 posts                                                                                       
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '8',
                'post_status' => 'publish'
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                    <?php get_template_part('template-parts/posts/post', 'article'); ?>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="group-sidebar">
        <div class="group-heading">
            <h3>
                <?php
                $cat = get_theme_mod('side_category_5');
                $cat = get_category($cat);
                $cat_post = '';
                if (is_wp_error($cat)) { // category is not set
                    $cat_post = 'uncategorized';
                } else {
                    $cat_post = $cat->slug;
                    echo $cat->name;
                }

                ?>
                <!-- Popular Post -->
            </h3>
        </div>
        <div class="sidebar">
            <div class="popular-post-container">
                <div class="post-group popular-post">
                    <?php
                    // pull 4 posts 
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => $cat_post,
                        'posts_per_page' => '4'
                    );
                    $query = new WP_Query($args);
                    ?>

                    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                            <?php
                            if (!is_sticky()) {
                                get_template_part('template-parts/posts/post', 'article');
                            }
                            ?>

                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            $getExpiryDate = get_theme_mod('ad_expiry_date_29', 'default');
            $expire = strtotime($getExpiryDate);
            $today = strtotime(date("Y-m-d"));
            if ($expire > $today) { ?>
                <div class="bigyapan">
                    <figure>
                        <figcaption class="">- Advertisement -</figcaption>
                        <img src="<?php echo get_theme_mod('home_ad_29', 'default'); ?>" alt="Bigyapan">
                    </figure>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
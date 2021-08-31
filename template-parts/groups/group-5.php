<div class="group-container">
    <div class="group">
        <?php
        $colors = array("#00b9eb", "#f44", "#ff8922", "#ee6f00", "#d00", "#008b8b", "#444", "#00ff7f");
        $color_num = rand(0, 7);
        ?>
        <div class="group-heading" style="border-bottom-color: <?php echo $colors[$color_num]; ?>">
            <h3 style="background-color: <?php echo $colors[$color_num]; ?>">
                <?php
                $cat = get_theme_mod('category_5');
                $cat = get_category($cat);
                $cat_post = '';
                if (is_wp_error($cat)) { // category is not set
                    $cat_post = 'uncategorized';
                } else {
                    $cat_post = $cat->slug;
                    echo $cat->name;
                }

                if (empty($cat_post)) { //check if category is set
                    $cat_post = 'uncategorized';
                }

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
            <!-- no heading title -->
            <h3 style="padding: 0;margin-top: 55px;"></h3>
        </div>
        <div class="sidebar">
            <div class="one-post">
                <div class="post-group" id="group5">
                    <?php
                    // pull 1 posts 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '1',
                        'orderby'        => 'rand',
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
        </div>
    </div>
</div>
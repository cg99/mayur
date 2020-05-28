
<div class="group-container">
    <div class="group">
        <div class="post-group" id="group1">
            <?php 
            // pull 5 posts 
                $cat = get_theme_mod('category_1');
                $cat = get_category($cat);
                $cat_post = $cat->name;
                $args = array(
                    'post_type' => 'post',
                    'category_name' => $cat_post,
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
</div>
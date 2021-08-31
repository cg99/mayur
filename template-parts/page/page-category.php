<div class="group-container">
    <div class="group">
        <div class="group-heading">
            <h3><?php single_cat_title(); ?></h3>
        </div>
        <div class="post-group" id="group8">
            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part('template-parts/posts/post', 'article'); ?>

            <?php endwhile; wp_reset_postdata(); else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php 
      echo "<div class='pagination'>".paginate_links()."</div>"; 
    ?>
</div>

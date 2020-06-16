<!-- home page -->
<?php get_header() ?>
    <div id="app">
        <div class="middle">
            <main class="main">
                <!-- banner advertisement -->
                <?php // get_template_part('template-parts/ads/ads', 'banner');?>

                <section class="main-content">
                    <div class="container-archive">
                        <?php 
                        while (have_posts()) {
                            the_post(); ?>

                            <article class="archive-post">
                                <figure>
                                    <img src="<?php 
                                        $pic = get_the_post_thumbnail_url();
                                        if(!$pic) {
                                            $site = get_template_directory_uri();
                                            $pic = $site . '/dist/img/post_img.png';
                                        }
                                        echo $pic; 
                                    ?>" alt="thumbnail">
                                </figure>

                                <div>
                                    <h3 class="post-title">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_title() ?>
                                        </a>
                                    </h3>

                                    <div class="post-date">
                                        <span>
                                            <time class="timeago" datetime="<?php echo get_the_date('c') ?>"></time>
                                        </span>
                                    </div> 

                                    <div class="post-category">
                                        
                                        <?php 
                                        $categories = get_the_category();
                                        if($categories[0]->name !== 'Uncategorized'){ 
                                            foreach($categories as $category){ ?>
                                            <span>
                                                <?php echo $category->name; ?>
                                            </span>
                                        <?php } } ?>
                                        
                                    </div>
                                    
                                    <div class="post-excerpt">
                                        <?php the_excerpt() ?>
                                    </div>
                                </div>
                            </article>

                        <?php  } 
                        echo "<hr>";
                        echo "<div>".paginate_links()."</div>"; 
                        ?>
                    </div>
                </section>

            </main>
        </div>
    </div>
    <?php get_sidebar() ?>
    <?php get_footer() ?>
	
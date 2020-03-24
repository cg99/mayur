<!-- home page -->
    <?php get_header() ?>
    <div id="app">
        <div class="middle">
            <main class="main">
                <!-- banner advertisement -->
                <?php get_template_part('template-parts/ads/ads', 'banner');?>

                <section class="main-content">
                <?php get_template_part('template-parts/page/page', 'category');?>
                </section>

            </main>
        </div>
    </div>
    <?php get_sidebar() ?>
    <?php get_footer() ?>
	
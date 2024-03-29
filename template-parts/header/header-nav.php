<nav id="navbar" class="header_nav">
    <a href="<?php echo esc_url(site_url()); ?>" class="home"> <i class="ri-home-2-line"></i> </a>
    <a href="#" class="ham-btn"> <i class="ri-menu-fill"></i> </a>

    <a class="mobile-logo" href="<?php echo site_url(); ?>">
        <img src="<?php echo esc_url(get_theme_mod('logo', 'default')); ?>">
    </a>

    <?php 
        wp_nav_menu(
            array(
            'menu' => 'primary',
            'theme_location' => 'header-menu',
            'container' => '',
            'link_before' => '',
            'link_after' => '',
            )
        );
    ?>
    <a class="search search-trigger"> <i class="ri-search-line"></i> </a>
</nav>

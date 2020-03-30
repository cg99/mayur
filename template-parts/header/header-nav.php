<nav id="navbar" class="header_nav">
    <a href="<?php echo site_url(); ?>" class="home"><i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="#" class="ham-btn"><i class="fa fa-th-list"></i></a>

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
    <a class="search search-trigger"> <i class="fa fa-search"></i></a>
</nav>

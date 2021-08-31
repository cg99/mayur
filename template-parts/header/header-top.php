<div class="top-bar">
    <div class="social-link">
        <a href="<?php echo esc_url(get_theme_mod('socialFacebook')); ?>" class="facebook"><i class="ri-facebook-fill"></i></a>
        <a href="<?php echo esc_url(get_theme_mod('socialYoutube')); ?>" class="youtube"><i class="ri-youtube-fill"></i></a>
        <a href="<?php echo esc_url(get_theme_mod('socialTwitter')); ?>" class="twitter"><i class="ri-twitter-fill"></i></a>
    </div>
    <div class="date" id="topDate">
        <span><?php echo date(get_option('date_format')); ?></span>
    </div>
    <div class="link-right">
        <div class="login-link">
        <?php if ( is_user_logged_in() ) { ?>
            <a href="<?php echo esc_url(wp_logout_url()); ?>" title="logout"><i class="ri-user-fill"></i></a>
        <?php } else { ?>
            <a href="<?php echo esc_url(wp_login_url()); ?>" title="login"><i class="ri-user-line"></i></a>
        <?php } ?>
        </div>
    </div>
</div>
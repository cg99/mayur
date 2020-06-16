	<footer class="footer">
		<div class="footer-top">
			<div class="col">
				<div class="wrapper">
				<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) { ?>
					<ul id="footer-sidebar-one">
						<?php dynamic_sidebar('footer-sidebar-1'); ?>
					</ul>
				<?php } ?>
				</div>
			</div>
			<div class="col">
				<div class="wrapper">
					<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
						<ul id="footer-sidebar-two">
							<?php dynamic_sidebar('footer-sidebar-2'); ?>
						</ul>
					<?php } ?>
				
					<h2>Follow Us</h2>
					<div class="social-links">
						<a href="<?php echo get_theme_mod('socialInstagram', 'https://www.instagram.com/um_es/'); ?>" id="socialInstagram">
						<i class="ri-instagram-line"></i></a>
						<a href="<?php echo get_theme_mod('socialFacebook'); ?>" id="socialFacebook">
						<i class="ri-facebook-box-line"></i></a>
						<a href="<?php echo get_theme_mod('socialYoutube'); ?>" id="socialYoutube">
						<i class="ri-youtube-line"></i></a>
						<a href="<?php echo get_theme_mod('socialTwitter'); ?>" id="socialTwitter">
						<i class="ri-twitter-line"></i></a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="wrapper">
				<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) { ?>
					<ul id="footer-sidebar-three">
						<?php dynamic_sidebar('footer-sidebar-3'); ?>
					</ul>
				<?php } ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div><p>Developed by: Umesh GM</p></div>
			<div><p>mayurtheme.com.np | All rights reserved &copy; 2020</p></div>

			<button id="topBtn" title="Go to top">
				<img src="<?php echo get_theme_file_uri('/dist/img/scroll to top.png'); ?>">
			</button>
			
		</div>
	</footer>
</div>


<div class="search-overlay hidden">
	<div class="search-overlay_top">
		<div class="container">
			<input type="text" placeholder="find a post..." id="searchTerm">
			<i class="fa fa-search search-btn" aria-hidden="true"></i>
		</div>
		<div class="search-close">
			<img class="search-overlay_close" src="<?php echo get_theme_file_uri(); ?>/dist/img/close.png">	
		</div>
	</div>

	<div class="container">
		<div id="searchResults"></div>
	</div>
</div>
	<!-- footer tags -->
	<?php wp_footer() ?>
	
	<script defer type="text/javascript">
		jQuery("time.timeago").timeago();
	</script>
</body>
</html>
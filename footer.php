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
				
					<h2>Find Us</h2>
					<div class="social-links">
						<a href="<?php echo get_theme_mod('socialInstagram', 'https://www.instagram.com/um_es/'); ?>" id="socialInstagram">
							<img src="<?php echo get_theme_file_uri('/dist/img/icons/instagram.svg'); ?>">
						</a>
						<a href="<?php echo get_theme_mod('socialFacebook'); ?>" id="socialFacebook">
							<img src="<?php echo get_theme_file_uri('/dist/img/icons/facebook.svg'); ?>">
						</a>
						<a href="<?php echo get_theme_mod('socialYoutube'); ?>" id="socialYoutube">
							<img src="<?php echo get_theme_file_uri('/dist/img/icons/youtube.svg'); ?>">
						</a>
						<a href="<?php echo get_theme_mod('socialTwitter'); ?>" id="socialTwitter">
							<img src="<?php echo get_theme_file_uri('/dist/img/icons/twitter.svg'); ?>">
						</a>
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
			<div class="developer"><p>Developed by - <a href="https://www.facebook.com/Lafa.umes/">Umesh GM</a></p></div>
			<div class="info"><p>Mayur WordPress Theme | All rights reserved &copy; <?php echo date("Y"); ?></p></div>

			<button id="topBtn" title="Go to top">
				<img src="<?php echo get_theme_file_uri('/dist/img/icons/scroll to top.png'); ?>">
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
			<img class="search-overlay_close" src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/close.png">	
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
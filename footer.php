	<footer class="footer">
		<div class="footer-top">
			<div class="col-1">
				<h2>Popular News</h2>
				<p><a href="#">ELECTION 2020</a></p>
				<p><a href="#">NEPAL EARTHQUAKE 2072</a></p>
				<p><a href="#">FIFA WORLD CUP 2014</a></p>
				<p><a href="#">ICC CRICKET WORLD CUP 2019</a></p>
				<p><a href="#">SEVENTH NATIONAL GAME 2076</a></p>
			</div>
			<div class="col-2">
				<div>
					<h2>Our Team</h2>
					<p><a href="#">About Us</a></p>
					<p><a href="#">Privacy</a></p>
				</div>
				<div>
					<h2>Follow Us</h2>
					<div class="social-links">
						<a href="<?php echo get_theme_mod('socialInstagram', 'https://www.instagram.com/um_es/'); ?>" id="socialInstagram">
							<img src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/instagram.svg"></a>
						<a href="<?php echo get_theme_mod('socialFacebook'); ?>" id="socialFacebook">
							<img src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/facebook.svg"></a>
						<a href="<?php echo get_theme_mod('socialYoutube'); ?>" id="socialYoutube">
							<img src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/youtube.svg"></a>
						<a href="<?php echo get_theme_mod('socialTwitter'); ?>" id="socialTwitter">
							<img src="<?php echo get_theme_file_uri(); ?>/dist/img/icons/twitter.svg"></a>
					</div>
				</div>
			</div>
			<div class="col-3">
				<h2>Contact</h2>
				<div>
					<address id="optionAddress1">Address - <?php echo get_theme_mod('address1', 'Pokhara, NP'); ?></address>
					<address id="optionAddress2">Street - <?php echo get_theme_mod('address2', 'Rambazar - 10'); ?></address>
				</div>
				<div>
					<p id="optionContact">Phone - <?php echo get_theme_mod('contact', '+977 9806632774'); ?></p>
					<p id="optionEmail">Email - <?php echo get_theme_mod('email', 'info@danphe.com'); ?></p>
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

		<?php get_header() ?>
		<div id="app">
			<div class="middle">
			    <main class="main">
		      		<section class="main-content" style="justify-content: space-between;">
                        <div>
                            <h2>404 Error</h2>
                            <p>Sorry,</p>
                            <p>There is no page available here.</p>
                            <p>Go to the <a href="<?php echo site_url(); ?>"> <b>home</b></a> page.</p>
                            <p>Or, navigate to any other posts and pages.</p>
                        </div>

                        <?php get_sidebar() ?>

                    </section> 
			    </main>
			</div>
		</div>
		<?php get_footer() ?>
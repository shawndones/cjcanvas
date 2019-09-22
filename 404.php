<?php get_header(); ?>
<div class="c-section c-section--404">
	<img src="/wp-content/uploads/2019/06/404-background.jpg" alt="">
	<div class="c-section--404__inner col-xs-11 col-sm-8 col-md-6 col-lg-4">
		<h1 class="c-section--404__title">Page Not Found</h1>
		<p>The page you are looking for no longer exists.You can return back to the site's homepage or use the links below to find what you’re looking for. </p>
		<nav class="c-404-nav">
			<?php 
			wp_nav_menu( array(
				'theme_location' => '404-nav',
				'container' => false
			)); 
			?>
		</nav>
	</div>
</div>
<?php get_footer(); ?>
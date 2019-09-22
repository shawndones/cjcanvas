<?php get_header(); ?>
<div class="l l--two-col">

	<div class="l-main">
		<?php while (have_posts()) : the_post(); ?>
		<section>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<?php foreach((get_the_category()) as $category) { 
			    		$category_raw = $category->category_nicename . ' '; 
			    		$category_name = str_replace('-', ' ', $category_raw);
			    		$category_title = ucfirst($category_name);
					}
					$url = get_the_permalink($the_pages->ID);
					$excerpt = get_the_excerpt($the_pages->ID);
					$trim = array(" [", "]");
					$excerpt_trimmed = str_replace($trim, '', $excerpt); 
					 ?>
			<p class="details"><span class="date"><?php the_time('F jS, Y') ?></span> | <span class="category"><?php echo $category_title; ?></span></p>
			<p class="excerpt"><?php echo $excerpt_trimmed; ?><a class="btn-more" href="<?php echo $url; ?>"> Read More</a></p>
		</section>
		<?php endwhile;?>
	</div><!-- .l-main -->
	<aside class="l-sidebar">
	  <?php
	  $categories = wp_list_categories('title_li=&show_count=1&echo=0');
	  $categories = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">[\\1]</span></a>', $categories); ?>
	  <h2 class="l-sidebar__title">Categories</h2>
	  <nav class="l-sidebar__nav">
	  	<ul class="list--categories">
	  		<?php echo $categories; ?>
	  	</ul>
	  </nav>
	</aside>
	<?php include("pagination.php"); ?>
</div><!-- .l -->
<?php get_footer(); ?>
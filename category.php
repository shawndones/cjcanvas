<?php get_header(); ?>
<div class="c-page-header c-page-header--blog">
		<div class="c-page-header__inner l-frame">
			<h2 class='c-page-header__title'>Blog</h2>
			<?php
	  		$categories = wp_list_categories('title_li=&show_count=1&echo=0');
	  		$categories = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">[\\1]</span></a>', $categories); ?>
	  <a  href="#" class="c-page-header__title c-categories-toggle">Categories<i class="icon-chevron"><?php include(CJ_THEME_DIR . "/icons/chevron.svg"); ?></i></a>
	  <nav class="c-nav-categories">
	  	<ul class="c-list--categories">
	  		<?php echo $categories; ?>
	  	</ul>
	  </nav>
		</div>
	</div>
<?php if (have_posts()) : ?>

<section class="c-all-articles l-frame">
<?php 
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
$cat_count = get_category( $category_id );


?>
				<h1><?php echo single_cat_title(); ?>(<?php echo $cat_count->count;  ?>)</h1>
<ul class="c-media-list row l-frame">
		<?php
		
		while (have_posts()) : the_post(); 
		foreach((get_the_category()) as $category) { 
						$category_raw = $category->category_nicename . ' '; 
						$category_name = str_replace('-', ' ', $category_raw);
						$category_title = ucwords($category_name);
						$category_title = rtrim($category_title);
				}
				$term_id = get_cat_ID( $category_name );
				$term = 'term_' . $term_id;
				$default_image = get_field('category_image', $term);


				// thumbnail
				$size = 'thumbnail';
				$thumb = $default_image['sizes'][ $size ];


				$post_thumb = get_the_post_thumbnail_url($the_pages->ID, 'thumbnail');
				if(empty($post_thumb)) {
					$post_thumb = $thumb;
				}

				$url = get_the_permalink($the_pages->ID);
				$excerpt = get_the_excerpt($the_pages->ID);
				$trim = array(" [", "]");
				$excerpt_trimmed = str_replace($trim, '', $excerpt); 
				 ?>
		
<li class="c-media-list__item  col-xs-6">
	<a href="<?php echo $url; ?>" class="c-block-media">
		<div class="c-block-media__media">
			<img src="<?php  echo $post_thumb; 	?>" alt="<?php  echo $cat_title; 	?>" class="c-block-media__img">
		</div>
		<div class="c-block-media__body">
		<span class="c-block-media__category"><?php echo $category_title; ?></span>
			<h3 class="c-block-media__headline"><?php the_title(); ?></h3>
			<!-- <p class="c-block-media__excerpt"><?php // echo $excerpt_trimmed; ?></p> -->
		</div><!-- end c-block-media__body -->
	</a><!-- end c-block-media -->
</li>


	<?php endwhile;?>
	</ul>
	</section>
			<?php endif;?>
			<section class="c-pagination l-frame">
			<?php include("pagination.php"); ?>
			</section>

<?php get_footer(); ?>
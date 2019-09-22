<?php get_header(); ?>
	<div class="c-page-header c-page-header--blog">
		<div class="c-page-header__inner l-frame">
			<h1 class='c-page-header__title'>Blog</h1>
			<?php
	  		$categories = wp_list_categories('title_li=&show_count=1&echo=0');
	  		$categories = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">(\\1)</span></a>', $categories); ?>
	 		<a href="#" class="c-page-header__title c-categories-toggle">Categories<i class="icon-chevron"><?php include(CJ_THEME_DIR . "/icons/chevron.svg"); ?></i></a>
			<nav class="c-nav-categories">
				<ul class="c-list--categories">
					<?php echo $categories; ?>
				</ul>
			</nav>
		</div>
	</div>
<?php
	// get current page we are on. If not set we can assume we are on page 1.
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// are we on page one?
if(1 == $paged) { ?>
	<section class="c-latest-posts">
	<div class="c-latest-posts__inner l-frame">
	<h2 class="c-latest-posts__headline">Recent Articles</h2>
	<div class="row">
	<?php
	$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 5, 
			'post_status' => 'publish'
	));
	$i = 0;
	foreach($recent_posts as $post) : 
		foreach((get_the_category($post['ID'])) as $category) { 
			$category_raw = $category->category_nicename . ' '; 
			$category_name = str_replace('-', ' ', $category_raw);
			$category_title = ucwords($category_name);
			$category_title = rtrim($category_title);
		}
	$term_id = get_cat_ID( $category_name );
	$term = 'term_' . $term_id;
	$default_image = get_field('category_image', $term);


	// thumbnail
	$size = 'large';
	$thumb = $default_image['sizes'][ $size ];


	$post_thumb = get_the_post_thumbnail_url($post['ID'], 'large');
	if(empty($post_thumb)) {
		$post_thumb = $thumb;
	}

	$url = get_the_permalink($post['ID']);
	$excerpt = get_the_excerpt($post['ID']);
	$title = get_the_title($post['ID']);
	$trim = array(" [", "]");
	$excerpt_trimmed = str_replace($trim, '', $excerpt); 
	 ?>
	 <?php if($i == 0) {?>
			<div class="c-latest-posts__hero col-md-6">
			 <?php } else { 
				 if($i == 1) { ?>
			<ul class="c-media-list row col-md-6">
				 <?php }
				 ?>
			<li class="c-media-list__item col-xs-6 col-md-12">
	<?php } ?>

				 <a href="<?php echo $url; ?>"<?php if($i != 0) {?> class="c-block-media"<?php } ?>>
		<div class="c-block-media__media">
			<img src="<?php  echo $post_thumb; 	?>" alt="<?php  echo $cat_title; 	?>" class="c-block-media__img">
		</div>
		<div class="c-block-media__body">
		<span class="c-block-media__category"><?php echo $category_title; ?></span>
			<h3 class="c-block-media__headline"><?php  echo $title; ?></h3>
			
		</div><!-- end c-block-media__body -->
		</a><!-- end c-block-media -->

	<?php if($i == 0) {?>
		<p class="c-featured-article__excerpt"><?php  echo $excerpt_trimmed; ?></p>
	</div>
	<?php } else { ?>
			</li>
		<?php if($i == 4) { ?>
			</ul>
		<?php } ?>
	
	<?php } ?>

	
	<?php $i++; endforeach; wp_reset_query(); ?>
	</div>
	</div>
	</section>







<?php
	$featured_post = get_field('featured_article', get_option('page_for_posts'));
	if( $featured_post ): ?>
		<section class="c-featured-article">
			<div class="c-featured-article__inner l-frame">
			<div class="c-featured-article__body">
			<h2 class="c-featured-article__headline">Featured Article</h2>
			<?php foreach( $featured_post as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post);
					foreach((get_the_category()) as $category) { 
						$category_raw = $category->category_nicename . ' '; 
						$category_name = str_replace('-', ' ', $category_raw);
						$category_title = ucwords($category_name);
						$category_title = rtrim($category_title);
					}
					$excerpt = get_the_excerpt();
					$trim = array(" [", "]");
					$excerpt_trimmed = str_replace($trim, '', $excerpt); 
					
					$idObj = get_category_by_slug($category_raw );

					if ( $idObj instanceof WP_Term ) {
						$term_id = $idObj->term_id;
					}
					$term = 'term_' . $term_id;

					$default_image = get_field('category_image', $term);
					// thumbnail
					$size = 'large';
					$thumb = $default_image['sizes'][ $size ];


					$post_thumb = get_the_post_thumbnail_url(get_the_ID(),'large');
					if(empty($post_thumb)) {
						$post_thumb = $thumb;
					}
				?>
				
					<span class="c-featured-article__category"><?php echo $category_title; ?></span>
					<a class="c-featured-article__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<p class="c-featured-article__excerpt"><?php  echo $excerpt_trimmed; ?></p>
				</div>
				<div class="c-featured-article__media">
					<img src="<?php  echo $post_thumb; 	?>" alt="<?php  echo $cat_title; 	?>" class="c-featured-article__img">
				</div>
			<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
		</div>
		</section>
	<?php endif; 	?>
<?php }



?>
	
	
	
	<?php if (have_posts()) : ?>

	<section class="c-all-articles l-frame">
					<h2 class="all-articles__headline">All Articles</h2>
	<ul class="c-media-list row">
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
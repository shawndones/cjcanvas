<?php
/*
Template Name: 2 Column Layout
*/
?>
<?php get_header(); ?>
<div class="c-page-header">
		 <div class="c-page-header__inner l-frame">
<?php
	 if($post->post_parent) {

      $parent_title = get_the_title($post->post_parent);
			$parent_url = get_the_permalink($post->post_parent);
			
			$page_heading = "";
			$page_heading .= "<h2 class='c-page-header__title'>";
			$page_heading .= "<a href='$parent_url'>";
			$page_heading .= "<i class='icon-chevron icon-chevron'>";
			$page_heading .= file_get_contents(CJ_THEME_DIR . "/icons/chevron.svg");
			$page_heading .= "</i>$parent_title </a></h2>";
					
			echo $page_heading;
					
   }
   else {
		echo 	"<h2 class='c-page-header__title'>" . get_the_title($post->ID) . "</h2>"; 
   }
?>
</div></div>



	<div class="l l--two-col">

		<div class="l-main">

			<!-- <div class="c-breadcrumbs">
				<div class="c-breadcrumbs__inner l">
				<?php // echo do_shortcode('[wpseo_breadcrumb]'); ?>
				</div>
			</div> -->

			<?php while (have_posts()) : the_post(); 
						if ( !empty( get_the_content() ) ){ ?>
				<section class="c-section c-section--wp-content">
					<?php the_content(); ?>
				</section>
						<?php	} ?>
			<?php  endwhile; ?>

		</div>
		
		<aside class="l-sidebar">
			<section class="c-cta-form c-cta-form--sidebar">
			<?php 
				$source = get_field('source_id');
				if(empty($source)) {
					global $post; 
					$parent_id = $post->post_parent;
					$source = get_field('source_id', $parent_id);
				}
				echo do_shortcode('[cta_form source='. $source .']'); 
				
			?>
			</section>
			<section class="c-sidebar-testimonials">
				<?php echo do_shortcode('[testimonials_slider]'); ?>
			</section>
		</aside>

	</div>

<?php get_footer(); ?>
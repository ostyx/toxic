<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>

<div id="container" class="page_container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		
<?php include get_theme_file_path( 'partials/blue-intro.php' ); ?>
	





<section>
	<div class="container flex">
		
		<div class="filters"></div>
	

		<div class="article_grid">	

					 <?php query_posts( 'cat=5&showposts=6' );
					while (have_posts()) : the_post();?>

						<?php
					$category = get_the_category();
					$firstCategory = $category[0]->cat_name;?>	
									<div class="resources_grid-item box-4 <?php echo $firstCategory ?>">		
									   <?php the_post_thumbnail('large'); ?>
									    <div>
										    <a href="<?php the_permalink(); ?>">
												<p class="date"><?php echo $firstCategory ?></p>
												<h4 class="article_grid-item-title"><?php the_title(); ?></h4>
										    </a>
									    </div>
								    </div>
	
					<?php endwhile; ?>	
					<?php wp_reset_query();?> 
	
	
<!-- 			 <?php  //echo do_shortcode('[ajax_load_more id="9594553425" loading_style="blue" repeater="template_1" no_results_text="No posts in this category" post_type="post" progress_bar="true" container_type="div" post_type="post" posts_per_page="6" category="reports,case-studies,infographics,letters,policy-briefings,factsheets" transition_container_classes="article_grid" scroll="false" progress_bar_color="#15326"]'); ?> -->
	
	
	
		</div>	
					   		   		
	</div>
</section>




















		
		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>	
<?php get_footer(); ?>

<?php /* Template Name: News */ ?>
<?php get_header(); ?>

<div id="container" class="page_container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<?php include get_theme_file_path( 'partials/blue-intro.php' ); ?>


	<?php if( have_rows('core_organizations') ): ?>
    <?php while( have_rows('core_organizations') ): the_row();?>	
        
	<section class="" style="overflow: hidden;">			
		
		<div class="container flex">	
			<div class="box-2 flex flow-column">
				<div class="">
					<h2><?php the_sub_field('title'); ?></h2>				
					<blockquote><?php the_sub_field('quote'); ?></blockquote>	
				</div>
			</div>
			
			<div class="box-2 flex logo-slider-arrows-container">
				<div class="logo-slider-arrows"></div>
			</div>
		</div>	

		<div class="container flex">		
			<div class="news-slider">
				<div class="news-slider_container">
					
					
					<div class="news-slider_container-slider owl-loaded owl-carousel">
					<?php query_posts('post_type=post&cat=5&post_status=publish&posts_per_page=-1'. get_query_var('paged')); ?>
					<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="newsletter-slide">
						   <?php  the_post_thumbnail('large'); ?>
									    <div style="width: 100%;">
										    <a href="<?php the_permalink(); ?>">
												<p class="white">Food For Thought</p>
												<h3 class="white"><?php the_title(); ?></h3>
										    </a>
									    </div>


								    </div>
					
					
					
					<?php endwhile; ?>
					<?php endif; ?>	
					<?php wp_reset_query(); ?>	
					</div>
				
				</div>
			</div>
		</div>
	</section>
    <?php endwhile; ?>
	<?php endif; ?>						
				


<section>
	<div class="container flex">
		
		<div class="newsletter-form blue-content">
			
			<div class="blue_form-container">
				<div class="box-2 flex centered">
					<svg width="50" height="42" viewBox="0 0 50 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.9">
<path d="M48.7571 12.5292L48.7579 12.5234L48.7414 12.5127L48.7385 12.5098L48.7352 12.509L41.9335 8.21389V1.23347C41.9339 0.906003 41.8038 0.592169 41.5726 0.360919C41.3413 0.129669 41.0275 0 40.7005 0H8.63309C8.30603 0 7.99219 0.129669 7.76094 0.360919C7.52969 0.592169 7.39961 0.906003 7.40002 1.23347V8.21389L0.597943 12.5094L0.59464 12.5102L0.591749 12.5131L0.575231 12.5238L0.576883 12.5288H0.577296C0.219686 12.753 0.00206241 13.1445 9.80556e-07 13.5665V40.7002C-0.000412045 41.0273 0.12967 41.3411 0.36092 41.5723C0.59217 41.804 0.906004 41.9337 1.23306 41.9337H48.1004C48.4275 41.9337 48.7413 41.804 48.9726 41.5723C49.2038 41.3411 49.3339 41.0273 49.3335 40.7002V13.5665C49.3314 13.1449 49.1138 12.7538 48.757 12.5292L48.7571 12.5292ZM45.6376 13.4699L41.9335 15.4194V11.131L45.6376 13.4699ZM39.467 2.46608V16.7164L24.667 24.5054L9.867 16.7164V2.46608H39.467ZM7.40068 15.4192L3.69656 13.4698L7.40068 11.1308V15.4192ZM46.867 39.4661H2.467V15.6085L24.093 26.9907C24.4514 27.1811 24.8813 27.1811 25.2398 26.9907L46.8668 15.6085L46.867 39.4661Z" fill="#9CED73"/>
<path d="M16.0338 9.86692H33.3012C33.9822 9.86692 34.5343 9.3148 34.5343 8.63386C34.5343 7.9525 33.9822 7.40039 33.3012 7.40039H16.0338C15.3529 7.40039 14.8008 7.9525 14.8008 8.63386C14.8008 9.31481 15.3529 9.86692 16.0338 9.86692Z" fill="#9CED73"/>
<path d="M16.0338 14.8005H33.3012C33.9822 14.8005 34.5343 14.2484 34.5343 13.567C34.5343 12.8861 33.9822 12.334 33.3012 12.334H16.0338C15.3529 12.334 14.8008 12.8861 14.8008 13.567C14.8008 14.2484 15.3529 14.8005 16.0338 14.8005Z" fill="#9CED73"/>
</g>
</svg>

					<div class="form-action-text">
					<h3>Subscribe <br>to our Newsletter!</h3>
					<p>lorem ipsum</p>
					</div>
					
				</div>
				<div class="box-2">
					
				</div>				
				
			</div>
		</div>
		
		
		
		
	</div>
</section>


<section>
	<div class="container flex">
		<h2>Related Articles</h2>
	
		<?php echo do_shortcode('[ajax_load_more id="9594553425" loading_style="blue" repeater="template_1" no_results_text="No posts in this category" post_type="post" progress_bar="true" container_type="div" post_type="post" posts_per_page="6" category="newsletter" transition_container_classes="article_grid" scroll="false" progress_bar_color="#15326"]'); ?>
				   		   
		
	</div>
</section>




















		
		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>	
<?php get_footer(); ?>

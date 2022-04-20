<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div id="container" class="page_container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		
	<?php include get_theme_file_path( 'partials/blue-intro.php' ); ?>



		<section class="side-by-side contactBlock">
			<div class="container flex sixty-forty">
						
							
					<div class="box-2 flex flow-column">
						<?php  echo do_shortcode('[contact-form-7 id="354" title="Contact form 1"]'); ?> 
					</div>
		
		
		
					<div class="box-2 flex flow-column">
						<div class="paddedBox contactImage">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/envelopes.png"/>								
						</div>
					</div>
					
										
			</div>			
		</section>	
		





<?php if( have_rows('core_organizations') ): ?>
	<?php while( have_rows('core_organizations') ): the_row();?>

		<section class="gray-content">
			<div class="container flex">
			    
		
				<div class="box-3 centered flex">
					<h2 class="blue"><?php the_sub_field('title'); ?></h2>
				</div>
				<div class="box-2-3 centered flex">
					<blockquote><?php the_sub_field('quote'); ?></blockquote>
		
				</div>
			</div>
			
				<div class="container flex">
					<div class="icon-row">
						<?php if( have_rows('logos') ): ?>
							    <?php while( have_rows('logos') ): the_row(); ?>
							    						    
							    <div class="">
							    <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>"><img class="" loading="lazy"  alt="<?php the_sub_field('name'); ?>" src="<?php the_sub_field('image'); ?>"/></a>
							    
							    <p class=""><?php the_sub_field('description'); ?></p>
							    </div>
							    
							    <?php endwhile; ?>
						<?php endif; ?>		
						
					</div>
				</div>
		</section>
    <?php endwhile; ?>
<?php endif; ?>	



<?php if( have_rows('supporting_organizations') ): ?>
    <?php while( have_rows('supporting_organizations') ): the_row();?>	    
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
					
			<div class="logo-slider">
				<div class="logo-slider_container">
					<div class="logo-slider_container-slider">
						<?php if( have_rows('logos') ): ?>
							<?php while( have_rows('logos') ): the_row(); ?>
							    
							    <div class="logo-slide">
							    <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>"><img class="" loading="lazy"  alt="<?php the_sub_field('name'); ?>" src="<?php the_sub_field('image'); ?>"/></a>
							    
							    </div>
							    
							<?php endwhile; ?>
						<?php endif; ?>				
					</div>
			</div>
		</div>

		</section>
    <?php endwhile; ?>
<?php endif; ?>						
				



<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row();?>
<div class="roadblock">
	<div class="roadblock-bakground"><img class="" src="<?php the_sub_field('background'); ?>"/></div>
	
	<div class="roadblock-inner">
		<div class="roadblock-container">
			
			<div class="roadblock-icon">
				<img src="<?php the_sub_field('icon'); ?>"/>
			</div>
			
			<div class="roadblock-content">
				<h2><?php the_sub_field('heading'); ?></h2>
				<p class="xtrlarge"><?php the_sub_field('text'); ?></p>
				<a class="take-action-head green-button coolBeans" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>				
			</div>
			
		</div>
		
	</div>		
</div>			
    <?php endwhile; ?>
<?php endif; ?>	

		

		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>



	
<?php get_footer(); ?>
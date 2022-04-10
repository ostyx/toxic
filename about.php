<?php /* Template Name: About us */ ?>
<?php get_header(); ?>

<div id="container" class="home-container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
<section class="blue-content top_section">
	
	<div class="container flex">
		
		<div class="box-2">
			
			<p class="xtrlarge"><?php the_field('pre_title');?></p>
			<h1><?php the_field('title');?></h1>
			
		</div>
		
		<div class="box-2">
			<?php the_field('quote');?>
		</div>
	</div>
	
</section>




<?php if( have_rows('side_by_side') ): ?>
    <?php while( have_rows('side_by_side') ): the_row();?>		

		<section class="side-by-side big">
			<div class="container flex">
							
					<div class="box-2 flex flow-column">
						<div class="paddedBox">
							
						<h2><?php the_sub_field('title'); ?></h2>	
									
						<blockquote>
							<?php the_sub_field('quote'); ?>
						</blockquote>
						
						<p><?php the_sub_field('text'); ?></p>
						
						
						<?php $name = get_sub_field('side_by_side');
							if (get_sub_field('button_text')) { ?>
						
						
						
						<a class="take-action-head green-button coolBeans" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
						
						 <?php 
} else {
  echo $name;
} ?>
						</div>
					</div>
		
					<div class="box-2 flex flow-column"></div>
										
			</div>
			
			<div class="half-scren-right"><img src="<?php the_sub_field('image'); ?>"/></div>
		</section>	
		
	    <?php endwhile; ?>
<?php endif; ?>	




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
		<section class="">
			<div class="container flex">
					
					<div class="box-2 flex flow-column">
						<div class="paddedBox">
												
							<h2><?php the_sub_field('title'); ?></h2>				
							
							<blockquote><?php the_sub_field('quote'); ?></blockquote>	
											
						</div>
					</div>
				
					<div class="box-2 flex flow-column">
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
<section>    
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
</section>

    <?php endwhile; ?>
<?php endif; ?>	

		

		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>	
<?php get_footer(); ?>
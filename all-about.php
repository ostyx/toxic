<?php /* Template Name: All About */ ?>
<?php get_header(); ?>

<div id="container" class="page_container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<?php include get_theme_file_path( 'partials/blue-intro.php' ); ?>




	<?php if( have_rows('switcher') ): ?>
	<?php while( have_rows('switcher') ): the_row();?>	
	<section>
		<div class="container">
			<h2><?php the_sub_field('title'); ?></h2>	
			
			<div class="side-tab-container">
				<div class="side-tab">
					
			<?php if( have_rows('blocks') ): $count = 0; ?>
			    <?php while( have_rows('blocks') ): the_row(); ?>
			    			
				  <button class="tablinks" onclick="openCity(event, '<?php the_sub_field('block_title'); ?>')" <?php  if (!$count) {?>id="defaultOpen"<?php }?>><?php the_sub_field('block_title'); ?></button>
			
			<?php $count++; endwhile; endif; ?>
				
		</div>
		
			
			
			<div class="tabcontent__container">
			<?php if( have_rows('blocks') ): $count = 0; ?>
			<?php while( have_rows('blocks') ): the_row(); ?>
			    	
				<div id="<?php the_sub_field('block_title'); ?>" class="tabcontent">
				  <?php the_sub_field('content'); ?>
				</div>
				
			<?php $count++; endwhile; endif; ?>
			</div>
</div>	


	
	
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<!-- Tabs https://www.w3schools.com/howto/howto_js_vertical_tabs.asp	-->

	</div>
</section>
	    <?php endwhile; ?>
<?php endif; ?>	






<?php 
	$count = 0;
	if( have_rows('side_by_side') ):  
	while( have_rows('side_by_side') ): the_row();
    ?>		

		<section class="side-by-side big <?php  if ($count % 2 === 0) {?>oddsider<?php }?>">
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
		
		

		
		
		
		
		
		
	
		
		
		
		
		
		
	
		
	    <?php $count++; endwhile; ?>
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
				



		
	<?php include get_theme_file_path( 'partials/hero.php' ); ?>
		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>	
<?php get_footer(); ?>
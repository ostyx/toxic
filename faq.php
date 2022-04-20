<?php /* Template Name: FAQ */ ?>
<?php get_header(); ?>

<div id="container" class="page_container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
<section class="">
	<div class="container flex">
		<h2> <?php the_title(); ?> </h2>
		<div class="intro-text"><p><?php the_sub_field('text'); ?></p></div>	
	
	</div>
	
	<div class="faq-accordion-container container flex">	
		<?php if( have_rows('bluesection') ): ?>
	    	<?php while( have_rows('bluesection') ): the_row();?>
		
			<div class="container-short faq-acordion">
						
			<?php if( have_rows('accordion') ): ?>
			<?php while( have_rows('accordion') ): the_row();?>						
	
				<div class="accordion-container">
				  
				 
				  <div class="accordion-inner">
				    <div class="accordion">
				      
				      <h3 class="blue"><?php the_sub_field('title'); ?></h3>
				      
				      <div class="accordion-toggle">
					    
					      <svg width="100%" height="100%" viewBox="0 0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"><g><g transform="matrix(0.932917,0,0,0.932917,-581.286,-279.005)"><circle cx="650.314" cy="326.387" r="25.467" style="fill:none;stroke:black;stroke-width:3.22px;"/></g><g transform="matrix(1,0,0,1,-612.664,-301.848)"><rect x="637.963" y="319.307" width="0.209" height="16.055" style="fill:none;stroke:black;stroke-width:3px;"/></g><g transform="matrix(2.77556e-16,-1,1,2.77556e-16,-301.931,663.555)"><rect x="637.963" y="319.307" width="0.209" height="16.055" style="fill:none;stroke:black;stroke-width:3px;"/></g></g></svg>
					      
					    </div>
				    </div>			  
				    <div class="panel">
				     <?php the_sub_field('text'); ?>
				    </div>
				  </div>
				</div>				  
						
			<?php endwhile; ?>
			<?php endif; ?>							
									
		    <?php endwhile; ?>
		<?php endif; ?>		
	</div>	
</section>





		<section class="gray-content">
			<div class="container flex">
				<h2> Glossary </h2>
			</div>	
			
			<div class="container flex">	
				<div class="glossary-container container-short">
					
					
					
				
					
					
					
<?php if( have_rows('glossary') ): ?>
    <?php while( have_rows('glossary') ): the_row();?>						
					
					<div class="word">
						
						<div class="term"> <?php the_sub_field('word'); ?></div>
						<div class="definition"> <?php the_sub_field('definition'); ?></div>	
						
					</div>
				
					
					
		    <?php endwhile; ?>
<?php endif; ?>					
					
															
					
					
				</div>
				
			
					
			</div>
			
		</section>	
		
			
		
		
		
		






	<?php include get_theme_file_path( 'partials/hero.php' ); ?>

		

		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>	






	<script>
			
		function accordionworks() {			
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.parentNode.parentNode.classList.toggle("active");
			    
			    
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    } 
			  });
			}			
		};
			
		function accordionheight() {		
		
	        let box = document.querySelector('.accordion-container');
	        let height = box.offsetHeight;
	        
	        if (height > 90) {
		        box.classList.add("bordered");
	        }
	        	        
	        console.log({ height });
	        	
		};		
						
		accordionheight();
		accordionworks();
		
	</script>
<?php get_footer(); ?>
<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div id="container" class="home-container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<div class="home-fold">
		<div class="home-slider">

		<?php if( have_rows('slides') ): ?>
		    <?php while( have_rows('slides') ): the_row();?>
								
					<div class="home-slide">
						<img class="slide-background" src="<?php the_sub_field('background'); ?>"/>
						<div class="slide-overlay"></div>
		
						<div class="slide-inner">
							<div class="slide-inner-content">
								<h1><?php the_sub_field('title'); ?></h1>
								<?php the_sub_field('text'); ?>
								<a class="take-action-head green-button coolBeans" href="<?php the_sub_field('button_url'); ?>"><?php the_sub_field('button_text'); ?></a>
							</div>
						</div>
					</div>	
			<?php endwhile; ?>
		<?php endif; ?>	
		
		</div>	

		<div class="slider-controls-container">	
			<div class="slider-controls-container-inner">
				<div class="slider-controls">
					<div class="slider-dots"></div>
					<div class="slider-arrows"></div>
				</div>			
			</div>
		</div>
</div>	

		<?php if( have_rows('core_organizations') ): ?>
		    <?php while( have_rows('core_organizations') ): the_row();?>	    
				<section class="side-by-side">
					<div class="container flex">
							
							<div class="box-2 flex flow-column">
								<div class="paddedBox">
														
									<h2><?php the_sub_field('title'); ?></h2>				
									
									<blockquote><?php the_sub_field('blockquote'); ?></blockquote>					
									<?php the_sub_field('intro_texter'); ?>
								</div>
							</div>
						
							<div class="box-2 flex flow-column">
								<div class="imagegrid">
			
								<?php if( have_rows('logos') ): ?>
								    <?php while( have_rows('logos') ): the_row(); ?>						    
								        <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>"><img class="zoom" loading="lazy"  alt="<?php the_sub_field('name'); ?>" src="<?php the_sub_field('image'); ?>"/></a>
								    <?php endwhile; ?>
								<?php endif; ?>				
																
								</div>
							</div>					
							
					</div>
				</section>
		    <?php endwhile; ?>
		<?php endif; ?>						

				
		<?php if( have_rows('bluesection') ): ?>
		    <?php while( have_rows('bluesection') ): the_row();?>
			<section class="blue-content">
				<div class="container-short flex">
					
					<h2><?php the_sub_field('title'); ?></h2>
					
					<blockquote><?php the_sub_field('quote'); ?></blockquote>
					
					<div class="intro-text"><p><?php the_sub_field('text'); ?></p></div>		
				</div>
				
				<div class="container-short">
									
				<?php if( have_rows('accordion') ): ?>
				    <?php while( have_rows('accordion') ): the_row();?>						
				
							<div class="accordion-container">
							  
								  <div class="accordion-icon"><img src="<?php the_sub_field('icon'); ?>"/></div>
							 
							  <div class="accordion-inner">
							    <div class="accordion">
							      <h3 class="blue"><?php the_sub_field('title'); ?></h3>
							      <div class="accordion-toggle"><svg width="100%" height="100%" viewBox="0 0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;"><g><g transform="matrix(0.932917,0,0,0.932917,-581.286,-279.005)"><circle cx="650.314" cy="326.387" r="25.467" style="fill:none;stroke:black;stroke-width:3.22px;"/></g><g transform="matrix(1,0,0,1,-612.664,-301.848)"><rect x="637.963" y="319.307" width="0.209" height="16.055" style="fill:none;stroke:black;stroke-width:3px;"/></g><g transform="matrix(2.77556e-16,-1,1,2.77556e-16,-301.931,663.555)"><rect x="637.963" y="319.307" width="0.209" height="16.055" style="fill:none;stroke:black;stroke-width:3px;"/></g></g></svg></div>
							    </div>			  
							    <div class="panel">
							     <?php the_sub_field('text'); ?>
							    </div>
							  </div>
							</div>				  
									
					<?php endwhile; ?>
				<?php endif; ?>							
					
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
		


		<?php if( have_rows('side_by_side') ): ?>
		    <?php while( have_rows('side_by_side') ): the_row();?>		
		
				<section class="side-by-side big">
					<div class="container flex">
									
							<div class="box-2 flex flow-column">
								<div class="paddedBox">
									
								<h2><?php the_sub_field('heading'); ?></h2>				
								<blockquote>
									<?php the_sub_field('quote'); ?>
								</blockquote>
								
								<p><?php the_sub_field('text'); ?></p>
								
								<a class="take-action-head green-button coolBeans" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
				
								</div>
							</div>
				
							<div class="box-2 flex flow-column"></div>
												
					</div>
					
					<div class="half-scren-right"><img src="<?php the_sub_field('background'); ?>"/></div>
				</section>	
				
			    <?php endwhile; ?>
		<?php endif; ?>		

	<?php endwhile; endif; ?>
	</main>
</div>	







<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/slick.min.js"></script>

<script>

	// Homapege slider
		
	$('.home-slider').slick({
		dots:true,
		arrows:true,
		infinite: true,
		speed: 300,
		fade: true,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 8000,
		cssEase: 'ease-in-out',
		appendArrows: '.slider-arrows',
		appendDots: '.slider-dots'
	});

	
	// Accordion main script			
	function accordionworks() {			
		var acc = document.getElementsByClassName("accordion");
		var i;
		
		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight) {
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    } 
		  });
		}
	};
	
	// Accordion, on planel opened add a class		
	function accordionheight() {		
	
        let box = document.querySelector('.accordion-container');
        let height = box.offsetHeight;
        
        if (height > 25) {
	        box.classList.add("bordered");
        }
                
        console.log({ height });
	};		
				
	accordionheight();
	accordionworks();
			
			
	 // Header on scroll add class			
	var className = "blue-head";
	var scrollTrigger = 60;
	
	window.onscroll = function() {
	  // We add pageYOffset for compatibility with IE.
	  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
	    document.getElementsByTagName("header")[0].classList.add(className);
	  } else {
	    document.getElementsByTagName("header")[0].classList.remove(className);
	  }
	};
			
</script>

<?php get_footer(); ?>

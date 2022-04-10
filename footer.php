<footer id="footer" class="footer" role="contentinfo">
			
			
			
			
			<div class="footer-container">
				
				<div class="footer-content">
					
					
					<div class="footer-logo box-3">
						<div class="footer-name">
							<h3>Toxic Free<br>
							<span>Food Packaging</span></h3>
							
							<a class="hashtag xtrlarge" href="#">#toxicfreefoodpackaging</a>
							
						</div>

						<div class="footer-social">
							<div class=""><a href=""><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/></svg></a></div>
							
							<div class=""><a href=""><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 56.7 56.7" enable-background="new 0 0 56.7 56.7" xml:space="preserve">
<g>
	<path d="M28.2,16.7c-7,0-12.8,5.7-12.8,12.8s5.7,12.8,12.8,12.8S41,36.5,41,29.5S35.2,16.7,28.2,16.7z M28.2,37.7
		c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2S32.7,37.7,28.2,37.7z"/>
	<circle cx="41.5" cy="16.4" r="2.9"/>
	<path d="M49,8.9c-2.6-2.7-6.3-4.1-10.5-4.1H17.9c-8.7,0-14.5,5.8-14.5,14.5v20.5c0,4.3,1.4,8,4.2,10.7c2.7,2.6,6.3,3.9,10.4,3.9
		h20.4c4.3,0,7.9-1.4,10.5-3.9c2.7-2.6,4.1-6.3,4.1-10.6V19.3C53,15.1,51.6,11.5,49,8.9z M48.6,39.9c0,3.1-1.1,5.6-2.9,7.3
		s-4.3,2.6-7.3,2.6H18c-3,0-5.5-0.9-7.3-2.6C8.9,45.4,8,42.9,8,39.8V19.3c0-3,0.9-5.5,2.7-7.3c1.7-1.7,4.3-2.6,7.3-2.6h20.6
		c3,0,5.5,0.9,7.3,2.7c1.7,1.8,2.7,4.3,2.7,7.2V39.9L48.6,39.9z"/>
</g>
</svg></a></div>
							
						</div>

					</div>
					
					
					<div class="footer-menu box-3">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
					</div>	
		
				
					<div class="footer-logos-grid box-3">
						<?php if( have_rows('core_organizations', 2) ): ?>
						    <?php while( have_rows('core_organizations', 2) ): the_row();?>	    
							
												<?php if( have_rows('logos') ): ?>
												    <?php while( have_rows('logos') ): the_row(); ?>						    
												        <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>"><img class="zoom" loading="lazy"  alt="<?php the_sub_field('name'); ?>" src="<?php the_sub_field('image'); ?>"/></a>
												    <?php endwhile; ?>
												<?php endif; ?>				
																				
						    <?php endwhile; ?>
						<?php endif; ?>									
					</div>
													
				</div>					

				<div class="footer-form">
					
					
					
				</div>	
				
		</div>
			
		<?php if( have_rows('footer', 2) ): ?>
			<?php while( have_rows('footer', 2) ): the_row();?>	 		
		<div class="sub-footer">
			<div class="container flex centered">
			
			<div class="footer-links flex centered">

				<div id="copyright">
				&copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php the_sub_field('copyright', 2); ?>
				</div>
			
			
			
		<?php if( have_rows('links', 2) ): ?>
			<?php while( have_rows('links', 2) ): the_row();?>			
			
				<a href="<?php the_sub_field('link_url', 2); ?>"><?php the_sub_field('link_text', 2); ?></a>
			
				<?php endwhile; ?>
		<?php endif; ?>				
				
			</div>	
			
			<div class="footer-credit flex centered">
				<p>Website by</p> <img src="http://localhost:8888/toxic/wp-content/uploads/2022/04/onebigZero.png"/>
			</div>
        </div>
		</div>	
						    <?php endwhile; ?>
						<?php endif; ?>	
</footer>
		
		
		
		
	</div>
<?php wp_footer(); ?>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/slick.min.js"></script>

<script>


$('.logo-slider_container-slider').slick({
	  infinite: true,
	  appendArrows: '.logo-slider-arrows',
	  dots:false,
	  slidesToShow: 6,
	  slidesToScroll: 2,
	  useCSS: false
});


</script>




</body>
</html>
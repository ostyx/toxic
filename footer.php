		<footer id="footer" role="contentinfo">
			<div id="copyright">
				
			&copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			
			</div>
		</footer>
	</div>
<?php wp_footer(); ?>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$('.home-slider').slick({
	  infinite: false,
	  speed: 300,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  appendArrows: '.slider-arrows',
	  appendDots: '.slider-dots',
	  dots:true,
});
</script>




</body>
</html>
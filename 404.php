<?php get_header(); ?>
<div class="fullpage-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/food-boxs.jpg')">

<div class="background-image"></div>

<div class="error-content">
<h1 class="entry-title title_404" itemprop="name">404</h1>

<p class="xtrlarge"><?php esc_html_e( 'Page not found. Try a search instead?', 'generic' ); ?></p>

<a href="<?php echo site_url(); ?>" class="green-button coolBeans">GO HOME</a>


</div>



</div>
<?php get_footer(); ?>
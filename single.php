<?php get_header(); ?>
<div class="container page_container post_content">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
			<?php include get_theme_file_path( 'entry-meta.php' ); ?>
			
		
			
			<div class="entry-content" itemprop="mainContentOfPage">
				
			<?php the_content(); ?>
		
			<div class="entry-links"><?php wp_link_pages(); ?></div>
			</div>
				<?php //if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>

		</article>
	<?php endwhile; endif; ?>
	
	
		<?php include get_theme_file_path( 'sidebar.php' ); ?>

	
	
</div>
<?php get_footer(); ?>










		
		














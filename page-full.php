<?php /* Template Name: Page Full */ ?>

<?php get_header(); ?>
<div class="container page_container">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>

	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		


			
			<div class="entry-content" itemprop="mainContentOfPage">
		
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
		
			<?php the_content(); ?>
		
			<div class="entry-links"><?php wp_link_pages(); ?></div>
			</div>
		
		</article>
		<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
	<?php endwhile; endif; ?>
	

	
	
	
</div>
<?php get_footer(); ?>
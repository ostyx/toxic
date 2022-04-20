<?php get_header(); ?>

<div class="container search-container">
<?php if ( have_posts() ) : ?>

<h2 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Search Results for: %s', 'generic' ), get_search_query() ); ?></h2>
<?php while ( have_posts() ) : the_post(); ?>



<?php get_template_part( 'entry' ); ?>

<?php endwhile; ?>

<?php get_template_part( 'nav', 'below' ); ?>

<?php else : ?>


<article id="post-0" class="post no-results not-found">

<iv>
<h2 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'generic' ); ?></h2>
<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'generic' ); ?></p>
</iv>


</article>

<?php endif; ?>

</div>
<?php get_footer(); ?>
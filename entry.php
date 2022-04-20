<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail() ) {
the_post_thumbnail('large');
} else { ?>
<img src="<?php bloginfo('template_directory'); ?>/images/food-boxs.jpg" alt="<?php the_title(); ?>" />
<?php } ?>

<div>
<header>
<?php if ( is_singular() ) { echo '<h3 class="entry-title" itemprop="headline">'; } else { echo '<h3 class="entry-title">'; } ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
<?php if ( is_singular() ) { echo '</h3>'; } else { echo '</h2>'; } ?>
<?php edit_post_link(); ?>
<?php if ( !is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
</header>

<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</div>
</article>
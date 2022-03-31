<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php if ( is_single() ) { echo wp_strip_all_tags( get_the_excerpt(), true ); } else { bloginfo( 'description' ); } ?>" />
<meta name="keywords" content="<?php echo implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ); ?>" />
<meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo get_site_icon_url(); } ?>" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
<meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
<meta name="twitter:description" content="<?php if ( is_single() ) { echo wp_strip_all_tags( get_the_excerpt(), true ); } else { bloginfo( 'description' ); } ?>" />
<meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo get_site_icon_url(); } ?>" />
<meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
<meta name="twitter:widgets:theme" content="light" />
<meta name="twitter:widgets:link-color" content="blue" />
<meta name="twitter:widgets:border-color" content="#fff" />
<link rel="canonical" href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ); ?>" />
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "WebSite",
"name": "<?php bloginfo( 'name' ); ?>",
"url": "<?php echo esc_url( home_url() ); ?>/"
}
</script>
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "Organization",
"name": "<?php bloginfo( 'name' ); ?>",
"url": "<?php echo esc_url( home_url() ); ?>/",
"logo": "<?php if ( has_custom_logo() ) { $custom_logo_id = get_theme_mod( 'custom_logo' ); $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo esc_url( $logo[0] ); } ?>",
"image": "<?php if ( has_site_icon() ) { echo get_site_icon_url(); } ?>",
"description": "<?php bloginfo( 'description' ); ?>"
}
</script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!-- // Add the new slick-theme.css if you want the default styling -->
<!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
				
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/boxes.css"/>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="wrapper" class="hfeed">

<header id="header" role="banner" class="header <?php
	if ( is_front_page() || is_home() || is_front_page() && is_home() ) {echo 'homepage-header';} ?>">
	<div class="container">
		
		<div class="logo">
			<div class="logo_light"><span>Toxic Free</span> Food Packaging</div>
		</div>
		
		<div class="header-right">
			<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
				
			</nav>
			
			<div class="lang-search">
				
				<div class="lang-switch"><a href="#">EN</a></div>
				<div class="searchtrigger"><div id="search"><?php get_search_form(); ?></div></div>
			
			</div>
		
			<div class="take-action-head">
				<a href="/take-action">TAKE ACTION</a>
			</div>
			
			<div class="mobile-menu">
				<button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e( ' Menu', 'generic' ); ?></span></button>
			</div>
		</div>
	</div>	
</header>




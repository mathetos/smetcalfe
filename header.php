<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Editor
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site container">

	<!-- Get sidebar color option (Appearance -> Customize -> Theme Options) -->
	<?php $editor_sidebar_color = get_option( 'editor_customizer_sidebar_color' ); ?>
	<header id="masthead" class="site-header <?php echo $editor_sidebar_color; ?>" role="banner">
		<!-- Tab navigation -->
		<ul class="toggle-bar">
		    <!-- Main navigation -->
		    <li>
		    	<a href="#tabs-1" class="current nav-toggle" data-tab="tab-1"><i class="fa fa-bars"></i> Menu</a>
		    </li>

		    <!-- Featured Posts navigation -->
		    <?php if ( get_theme_mod( 'editor_featured_cat' ) ) { ?>
				<li>
					<a href="#tab-2" data-tab="tab-2"><i class="fa fa-thumb-tack"></i> Posts</a>
				</li>
		    <?php } ?>

		    <!-- Sidebar widgets navigation -->
		    <li>
		    	<a href="#tab-3" class="folder-toggle" data-tab="tab-3"><i class="fa fa-pencil"></i> Writings</a>
		    </li>
		</ul>

		<div id="tabs" class="toggle-tabs">
			<div class="site-header-inside">
				<!-- Logo, description and main navigation -->
				<div id="tab-1" class="tab-content current animated fadeIn">
					<div class="site-branding">
						<!-- Get the site branding -->
							<h1 class="site-logo wide">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri() . '/images/sm-fireplace.jpg' ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
							</h1>
							<h1 class="site-logo narrow">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri() . '/images/sm-logo.png' ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
							</h1>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #tab-1 -->

				<!-- Featured Posts template (template-featured-posts.php) -->
				<?php get_template_part( 'template-featured-posts' ); ?>

				<!-- Sidebar widgets -->
				<div id="tab-3" class="tab-content animated fadeIn">
					<?php get_sidebar(); ?>
				</div><!-- #tab-3 -->
			</div><!-- .site-header-inside -->
		</div><!-- #tabs -->
	</header><!-- #masthead -->

	<div id="content" class="site-content animated-faster fadeIn">

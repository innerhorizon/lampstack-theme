<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lampstack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( has_nav_menu('menu-top') ) { ?>
    <nav id="top-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Top Menu', 'lampstack' ); ?></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-top',
			'menu_id'        => 'top-menu',
			'menu_class' => 'menu-items-alignment menu-items-size',
			'container_class'    => 'w3-bar',
			'before' => '<span class="w3-bar-item w3-button w3-hover-black">',
			'after' => '</span>',
		) );
		?>
    </nav><!-- #site-navigation -->
<?php } ?>

<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lampstack' ); ?></button>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-primary',
		'menu_id'        => 'primary-menu',
		'menu_class' => 'menu-items-alignment',
		'container_class'    => 'w3-bar',
        'before' => '<span class="w3-bar-item w3-button w3-hover-black">',
        'after' => '</span>',
	) );
	?>
</nav><!-- #site-navigation -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lampstack' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding w3-container w3-margin">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$lampstack_description = get_bloginfo( 'description', 'display' );
			if ( $lampstack_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lampstack_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content w3-container">

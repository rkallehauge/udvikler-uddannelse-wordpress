<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPGang
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <!-- My custom css -->
	<?php 
            wp_enqueue_style('custom', '/wp-content/themes/wpgang/custom.css');
            wp_head(); 
        ?>
        
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wpgang' ); ?></a>

	<header id="masthead" class="site-header">


		<nav id="site-navigation" class="main-navigation">
                    <button id="hamburger-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <!-- Hamburger menu stolen from w3schools website -->
                        <div id="hamburger-bar1"></div>
                        <div id="hamburger-bar2"></div>
                        <div id="hamburger-bar3"></div>
                    </button>
                    <script>
                        // Hamburger menu animation
                        document.getElementById('hamburger-menu').addEventListener('click', (e) => {
                            document.getElementById('hamburger-menu').classList.toggle('hamburger-open');
                        });
                    </script>
                    
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package amora
 */
?>
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amora' ); ?></a>
    <header>
            <div class="content-width">
                <div class="cell-row">
                    <h1 class="cell l6 s12 cell-middle">
                        <a href="<?= get_bloginfo('wpurl') ?>">
                            <img width="45" height="45" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?= get_bloginfo('name') ?>">
                        </a>
                    </h1>
                    <div class="cell l6 s12 cell-middle">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>
                    </div>
                </div>
            </div>
        </header>
        <div class="heading">
            <div class="content-width">
                <div class="cell-row">
                    <h1 class="cell l6 s12 cell-middle"><?php the_title(); ?></h1>
                    <div class="cell l6 s12 cell-middle text-right">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
	
	<div class="mega-container">
        <?php get_template_part('framework/featured-components/featured', 'posts' ); ?>
		<div id="content" class="site-content container">
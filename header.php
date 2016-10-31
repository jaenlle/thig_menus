<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tower_Hill_-_Cat_5
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:700,700i,900|Open+Sans:600" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thig_cat_5' ); ?></a>

    <header id="masthead" class="site-header" role="banner">

<!-- ~~~~~~~~~~~~~~ Top Menu Start ~~~~~~~~~~~~~~ -->

    <div id="topmargin">
        <div class="topbackground">
            <div class="container">
                <div id="top-navigation">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'Top Menu',
                                'theme_location'    => 'top_menu	',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-inverse navbar-collapse',
                                'container_id'      => 'topmenu',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ~~~~~~~~~~~~~~ Top Menu End ~~~~~~~~~~~~~~ -->


<!-- ~~~~~~~~~~~~~~ Global Menu Start ~~~~~~~~~~~~~~ -->

        <div class="container">
            <nav id="site-navigation" class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#globalmenu">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a href="http://www.julioaenlle.net/thig/"><img id="logoimg" src="http://julioaenlle.net/thig/wp-content/uploads/2016/10/thig_horizontal.png" alt="Tower Hill Insurance | Florida Homeowners Insurance">
                    </a>
                </div>
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'globalmenu',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            </nav><!-- #site-navigation -->
        </div>


<!-- ~~~~~~~~~~~~~~ Global Menu End ~~~~~~~~~~~~~~ -->

        </header><!-- #masthead -->

    <div id="content" class="site-content">

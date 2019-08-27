<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @subpackage HTTP
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Magzter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="//akcdn.magzter.com/web/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="//akcdn.magzter.com/web/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Magzter">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <div id="preloader"><img src="<?php echo THEME_IMG_PATH; ?>/balls.svg" width="90" alt=""> </div>
        <!--Wrapper Starts-->
        <section class="wrapper">
            <header>
                <!--<section class="container">
                    <a href="javascript:;"><img src="<?php echo THEME_IMG_PATH; ?>/mag-logo.png"></a>
                    
                    <span class="srzLogin"><a href="https://srz.magzter.com/login"><i class="fa fa-user" aria-hidden="true"></i>Login</a> </span>
                </section>-->
                <div class="grid grid-pad oveseen">
                        <div class="site-branding col-lg-4">
                        <a href="javascript:;"><img src="<?php echo THEME_IMG_PATH; ?>/mag-logo.png"></a>
                        </div><!-- .site-branding -->

                        <div class="col-lg-8">
                            <?php   
                            if (  has_nav_menu( 'primary' ) ) {
                                wp_nav_menu(array(
                                    'menu' => 'Main Navigation',
                                    'container_id' => 'cssmenu',
                                    'theme_location' => 'primary',
                                    'walker' => new Magazeen_CSS_Menu_Walker()
                                ));

                            }?>

                        </div><!-- .site-header-menu -->
                 </div>
            </header>
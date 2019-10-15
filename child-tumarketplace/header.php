<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header>
            <div class="header-top d-lg-block d-md-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="top-menu">
                                <ul class="language">
                                    <?php
                                    $get_site_list = get_sites();
                                    foreach ($get_site_list as $siteInfo)
                                        ?>
                                    <li><a href="<?php echo $siteInfo->path; ?>"><img class="right-5 site-icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/tump.png'; ?>" alt="#"><?php echo get_bloginfo("language"); ?></a></li>
                                    <?php
                                    ?>
                                </ul>
                                <ul class="currency">
                                    <li><a href="#"><strong> <?php global  $woocommerce;
                                                                echo get_woocommerce_currency_symbol(); ?></a></strong></li>
                                </ul>
                                <?php
                                if (is_user_logged_in()) {
                                    $current_user = wp_get_current_user();
                                    ?>
                                    <p class="welcome-msg">welcome <?php echo $current_user->user_email; ?>!</p>
                                <?php
                                } else {
                                    ?>
                                    <p class="welcome-msg">Default welcome msg!</p>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="top-link">
                                <ul class="link">
                                    <li><a href="/my-account"><i class="fa fa-user"></i> My Account</a></li>
                                    <?php
                                    if (is_user_logged_in()) {
                                        ?><li><a href="#"><i class="fa fa-heart"></i> <?php echo do_shortcode('[alg_wc_wl]'); ?>Wish List (0)</a></li><?php
                                                                                                                                                        }
                                                                                                                                                        ?>
                                    <li><a href="/checkout"><i class="fa fa-share"></i> Checkout</a></li>
                                    <li>
                                        <?php
                                        if (is_user_logged_in()) {
                                            ?>
                                            <a href="<?php echo wp_logout_url(home_url()); ?>" title="logout"><i class="fa fa-unlock-alt"></i>Logout</a>
                                        <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo wp_login_url(home_url()); ?>" title="login"><i class="fa fa-lock"></i>Login</a>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                            <div class="logo center-md">
                                <?php get_template_part('template-parts/header/site', 'branding'); ?>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                            <div class="quick-access">
                                <div class="search-by-category">
                                    <div class="search-container">
                                        <?php wp_dropdown_categories(); ?>
                                    </div>
                                    <div class="header-search">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                                <div class="top-cart">
                                    <ul>
                                        <li>
                                            <!--Custom cart start-->
                                            <?php global $woocommerce; ?>
                                            <a class="your-class-name" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Cart View', 'woothemes'); ?>">
                                                <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                                <span class="cart-total">
                                                    <?php echo sprintf(
                                                        _n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
                                                        $woocommerce->cart->cart_contents_count
                                                    ); ?> -
                                                    <?php echo $woocommerce->cart->get_cart_total(); ?>
                                                </span>
                                            </a>
                                            <!--Custom cart end-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="site-branding-container">
                                <?php get_template_part( 'template-parts/header/site', 'main-navigation' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="content" class="site-content">
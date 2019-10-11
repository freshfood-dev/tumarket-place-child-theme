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
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="top-menu">
                            <ul class="language">
                                <li><a href="#"><img class="right-5" src="assets/images/gb.png" alt="#"> English<i
                                            class="fa fa-caret-down left-5"></i></a>
                                    <ul>
                                        <li><a href="#"><img class="right-5" src="assets/images/fr.png" alt="#">
                                                French</a></li>
                                        <li><a href="#"><img class="right-5" src="assets/images/gb.png" alt="#">
                                                English</a></li>
                                        <li><a href="#"> <img class="right-5" src="assets/images/fr.png"
                                                    alt="#">English</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="currency">
                                <li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
                                    <ul>
                                        <li><a href="#">$ EUR</a></li>
                                        <li><a href="#">$ GBP</a></li>
                                        <li><a href="#">$ USD</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <p class="welcome-msg">Default welcome msg!</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="top-link">
                            <ul class="link">
                                <li><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a></li>
                                <li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
                                <li><a href="account.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <div class="logo">
                            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <div class="quick-access">
                            <div class="search-by-category">
                                <div class="search-container">
                                    <?php wp_dropdown_categories(); ?>
                                </div>
                                <div class="header-search">
                                    <?php get_search_form();?>
                                </div>
                            </div>
                            <div class="top-cart">
                                <ul>
                                    <li>
                                        <a href="cart.html">
                                            <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                            <span class="cart-total">
                                                <span class="cart-title">shopping cart</span>
                                                <span class="cart-item">2 item(s)- </span>
                                                <span class="top-cart-price">$365.00</span>
                                            </span>
                                        </a>
                                        <div class="mini-cart-content">
                                            <div class="cart-img-details">
                                                <div class="cart-img-photo">
                                                    <a href="#"><img src="img/product/total-cart.jpg" alt="#"></a>
                                                </div>
                                                <div class="cart-img-content">
                                                    <a href="#"><h4>Prod Aldults</h4></a>
                                                    <span>
                                                        <strong class="text-right">1 x</strong>
                                                        <strong class="cart-price text-right">$180.00</strong>
                                                    </span>
                                                </div>
                                                <div class="pro-del">
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="cart-img-details">
                                                <div class="cart-img-photo">
                                                    <a href="#"><img src="img/product/total-cart2.jpg" alt="#"></a>
                                                </div>
                                                <div class="cart-img-content">
                                                    <a href="#"><h4>Fact Prone</h4></a>
                                                    <span>
                                                        <strong class="text-right">1 x</strong>
                                                        <strong class="cart-price text-right">$185.00</strong>
                                                    </span>
                                                </div>
                                                <div class="pro-del">
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart-inner-bottom">
                                                <span class="total">
                                                    Total:
                                                    <span class="amount">$550.00</span>
                                                </span>
                                                <span class="cart-button-top">
                                                    <a href="cart.html">View Cart</a>
                                                    <a href="checkout.html">Checkout</a>
                                                </span>
                                            </div>
                                        </div>
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
                        <p class="text-center">Main Menu</p>
                    </div>
                </div>
        </div>
    </header>

	<div id="content" class="site-content">

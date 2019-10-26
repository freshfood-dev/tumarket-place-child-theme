<?php 
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage child-tumarketplace
 * @since 1.0.0
 */
?>
</div><!-- #content -->
	<footer id="colophon" class="mini-footer">
		<div class="footer__support__navigation">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<p class="footer__support__navigation__caption"><i class="fa fa-clock-o fa-lg"></i>WORKING TIME</p>
						<p class="footer__support__navigation__sub__caption">Mon- Sun: 8.00 - 18.00</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<p class="footer__support__navigation__caption"><i class="fa fa-truck fa-lg"></i>FREE SHIPPING</p>
						<p class="footer__support__navigation__sub__caption">On order over $199</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<p class="footer__support__navigation__caption"><i class="fa fa-money fa-lg"></i>MONEY BACK 100%</p>
						<p class="footer__support__navigation__sub__caption">Within 30 Days after delivery</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<p class="footer__support__navigation__caption"><i class="fa fa-phone-square fa-lg"></i>PHONE: 0123456789</p>
						<p class="footer__support__navigation__sub__caption">Order Online Now !</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div>
                </div>
            </div>
        </div>
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<span>Copyright ©</span>
						<?php $blog_info = get_bloginfo( 'name' ); ?>
						<?php if ( ! empty( $blog_info ) ) : ?>
							<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    	<img src="<?php echo get_stylesheet_directory_uri().'/assets/images/payment.png'; ?>" alt="payment" class="float-lg-right float-md-right float-sm-right float-xs-left"/>
                	</div>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

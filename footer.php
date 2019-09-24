<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Logix
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content">
			<div class="site-info">
				<div class="site-branding">
					<?php if ( get_theme_mod( 'logix_logo' ) ) : ?>
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logix_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					<?php else : ?>
						<hgroup>
							<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
						</hgroup>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="logix-contact-info">
					<div><a href="mailto:<?php echo get_theme_mod( 'email_icon' ); ?>"><i class="mdi mdi-email"></i> <?php echo get_theme_mod( 'email_icon' ); ?></a></div>
					<div><a href="tel:<?php echo get_theme_mod( 'phone_icon' ); ?>"><i class="mdi mdi-phone"></i><?php echo get_theme_mod( 'phone_icon' ); ?></a></div>
					<div class="address"><?php echo get_theme_mod( 'street_address' ); ?><br><?php echo get_theme_mod( 'city_state_zip' ); ?></div>
				</div>
			</div><!-- .site-info -->
			<div class="site-footer-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

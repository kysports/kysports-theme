<?php
/**
 * Site footer.
 *
 * @package KySportsFoundation
 */
?>
<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="site-footer__brand">
			<a class="site-footer__name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<p><?php esc_html_e( 'Empowering Kentucky youth through sports-media education, mentorship, and opportunity.', 'kysports-foundation' ); ?></p>
		</div>

		<nav class="site-footer__navigation" aria-label="<?php esc_attr_e( 'Footer navigation', 'kysports-foundation' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => 'site-footer__menu',
					'fallback_cb'    => 'wp_page_menu',
				)
			);
			?>
		</nav>
	</div>
	<div class="site-footer__legal">
		<p>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

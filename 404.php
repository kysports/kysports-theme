<?php
/**
 * Not found template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main not-found">
	<div class="not-found__inner">
		<p class="section-eyebrow"><?php esc_html_e( 'Page not found', 'kysports-foundation' ); ?></p>
		<h1><?php esc_html_e( 'We could not find that page.', 'kysports-foundation' ); ?></h1>
		<p><?php esc_html_e( 'The link may be out of date, or the page may have moved. Try a search or return to the KySports homepage.', 'kysports-foundation' ); ?></p>
		<?php get_search_form(); ?>
		<a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return home', 'kysports-foundation' ); ?></a>
	</div>
</main>
<?php
get_footer();

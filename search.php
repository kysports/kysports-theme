<?php
/**
 * Search results template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main search-results">
	<header class="archive-header">
		<div class="archive-header__inner">
			<p class="section-eyebrow"><?php esc_html_e( 'Search', 'kysports-foundation' ); ?></p>
			<h1><?php printf( esc_html__( 'Search results for: %s', 'kysports-foundation' ), esc_html( get_search_query() ) ); ?></h1>
		</div>
	</header>

	<div class="search-results__inner">
		<?php if ( have_posts() ) : ?>
			<div class="search-result-list">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result' ); ?>>
						<h2 class="search-result__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="search-result__excerpt"><?php the_excerpt(); ?></div>
						<a class="search-result__link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'View result', 'kysports-foundation' ); ?><span class="screen-reader-text">: <?php the_title(); ?></span></a>
					</article>
				<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<div class="search-empty-state">
				<p><?php esc_html_e( 'We could not find a match. Try a different word or phrase.', 'kysports-foundation' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();

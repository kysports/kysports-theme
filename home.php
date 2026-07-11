<?php
/**
 * Posts page template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main news-archive">
	<header class="archive-header">
		<div class="archive-header__inner">
			<p class="section-eyebrow"><?php esc_html_e( 'KySports community', 'kysports-foundation' ); ?></p>
			<h1><?php single_post_title(); ?></h1>
		</div>
	</header>

	<div class="news-archive__inner">
		<?php if ( have_posts() ) : ?>
			<div class="post-card-list">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php get_template_part( 'parts/post', 'card' ); ?>
				<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<p class="archive-empty-state"><?php esc_html_e( 'News updates will appear here as they are published.', 'kysports-foundation' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();

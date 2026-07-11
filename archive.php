<?php
/**
 * Archive template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main news-archive">
	<header class="archive-header">
		<div class="archive-header__inner">
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-header__description">', '</div>' ); ?>
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
			<p class="archive-empty-state"><?php esc_html_e( 'No updates found.', 'kysports-foundation' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();

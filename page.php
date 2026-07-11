<?php
/**
 * Default page template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main page-main">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-entry' ); ?>>
			<header class="page-entry__header">
				<div class="page-entry__header-inner">
					<h1 class="page-entry__title"><?php the_title(); ?></h1>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="page-entry__featured-image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="page-entry__content">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<nav class="page-entry__pagination" aria-label="' . esc_attr__( 'Page content', 'kysports-foundation' ) . '">',
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();

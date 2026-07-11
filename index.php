<?php
/**
 * Fallback template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header"><h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></header>
				<div class="entry-content"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No content found.', 'kysports-foundation' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer();

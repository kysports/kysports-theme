<?php
/**
 * Individual post template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main single-post">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post__entry' ); ?>>
			<header class="single-post__header">
				<div class="single-post__header-inner">
					<p class="section-eyebrow"><?php esc_html_e( 'News', 'kysports-foundation' ); ?></p>
					<h1><?php the_title(); ?></h1>
					<p class="single-post__date"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>
				</div>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="single-post__featured-image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			<?php endif; ?>

			<div class="single-post__content">
				<?php the_content(); ?>
				<?php
				wp_link_pages(
					array(
						'before' => '<nav class="single-post__pagination" aria-label="' . esc_attr__( 'Post content', 'kysports-foundation' ) . '">',
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
		<?php the_post_navigation(); ?>
	<?php endwhile; ?>
</main>
<?php
get_footer();

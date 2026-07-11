<?php
/**
 * Front page template.
 *
 * @package KySportsFoundation
 */

get_header();
?>
<main id="main-content" class="site-main home-page">
	<section class="home-hero" aria-labelledby="home-hero-title">
		<div class="home-hero__inner">
			<div class="home-hero__content">
				<p class="home-hero__eyebrow"><?php esc_html_e( 'KySports Foundation', 'kysports-foundation' ); ?></p>
				<h1 id="home-hero-title"><?php esc_html_e( 'Youth voices belong in the story.', 'kysports-foundation' ); ?></h1>
				<p class="home-hero__intro"><?php esc_html_e( 'KySports empowers Kentucky youth through sports-media education, mentorship, and career-connected opportunities.', 'kysports-foundation' ); ?></p>
			</div>
			<div class="home-hero__media" role="img" aria-label="<?php esc_attr_e( 'Placeholder for future KySports student media production image or video.', 'kysports-foundation' ); ?>">
				<p><?php esc_html_e( 'Future student production image or video', 'kysports-foundation' ); ?></p>
			</div>
		</div>
	</section>

	<section class="home-mission" aria-labelledby="home-mission-title">
		<div class="home-mission__inner">
			<p class="section-eyebrow"><?php esc_html_e( 'Our mission', 'kysports-foundation' ); ?></p>
			<h2 id="home-mission-title"><?php esc_html_e( 'Opening doors through the power of sports media.', 'kysports-foundation' ); ?></h2>
			<p><?php esc_html_e( 'KySports creates welcoming ways for young people to learn broadcasting, photography, videography, journalism, and the professional skills that carry beyond the game.', 'kysports-foundation' ); ?></p>
		</div>
	</section>

	<section class="home-impact" aria-labelledby="home-impact-title">
		<div class="home-impact__inner">
			<div class="home-impact__intro">
				<p class="section-eyebrow"><?php esc_html_e( 'Why it matters', 'kysports-foundation' ); ?></p>
				<h2 id="home-impact-title"><?php esc_html_e( 'A place to learn, contribute, and grow.', 'kysports-foundation' ); ?></h2>
			</div>
			<ul class="impact-list">
				<li>
					<h3><?php esc_html_e( 'Creative confidence', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Young people have space to develop their own perspective and share it with care.', 'kysports-foundation' ); ?></p>
				</li>
				<li>
					<h3><?php esc_html_e( 'Practical experience', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Hands-on media learning makes room for curiosity, responsibility, and new skills.', 'kysports-foundation' ); ?></p>
				</li>
				<li>
					<h3><?php esc_html_e( 'Connected futures', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Mentorship and exposure to media careers help make future pathways easier to imagine.', 'kysports-foundation' ); ?></p>
				</li>
			</ul>
		</div>
	</section>

	<section class="home-programs" aria-labelledby="home-programs-title">
		<div class="home-programs__inner">
			<div class="home-programs__intro">
				<p class="section-eyebrow"><?php esc_html_e( 'Programs', 'kysports-foundation' ); ?></p>
				<h2 id="home-programs-title"><?php esc_html_e( 'Skills for the next story.', 'kysports-foundation' ); ?></h2>
				<p><?php esc_html_e( 'Young people can explore the tools, teamwork, and storytelling practices behind sports media.', 'kysports-foundation' ); ?></p>
			</div>

			<ul class="program-list">
				<li class="program-card">
					<h3><?php esc_html_e( 'Broadcasting', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Practice preparation, on-air communication, and the building blocks of a live production.', 'kysports-foundation' ); ?></p>
				</li>
				<li class="program-card">
					<h3><?php esc_html_e( 'Photography', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Learn to observe a moment, compose an image, and tell a story through the lens.', 'kysports-foundation' ); ?></p>
				</li>
				<li class="program-card">
					<h3><?php esc_html_e( 'Videography', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Explore planning, camera work, interviews, and the visual language of video.', 'kysports-foundation' ); ?></p>
				</li>
				<li class="program-card">
					<h3><?php esc_html_e( 'Journalism', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Build reporting, interviewing, writing, and ethical storytelling habits.', 'kysports-foundation' ); ?></p>
				</li>
				<li class="program-card">
					<h3><?php esc_html_e( 'Mentorship', 'kysports-foundation' ); ?></h3>
					<p><?php esc_html_e( 'Connect learning with encouragement, guidance, and a wider view of future possibilities.', 'kysports-foundation' ); ?></p>
				</li>
			</ul>
		</div>
	</section>

	<section class="home-spotlight" aria-labelledby="home-spotlight-title">
		<div class="home-spotlight__inner">
			<div class="home-spotlight__media" role="img" aria-label="<?php esc_attr_e( 'Placeholder for a future consented student spotlight photograph or video.', 'kysports-foundation' ); ?>">
				<p><?php esc_html_e( 'Future student spotlight media', 'kysports-foundation' ); ?></p>
			</div>
			<div class="home-spotlight__content">
				<p class="section-eyebrow"><?php esc_html_e( 'Student spotlight', 'kysports-foundation' ); ?></p>
				<h2 id="home-spotlight-title"><?php esc_html_e( 'A story waiting to be shared.', 'kysports-foundation' ); ?></h2>
				<p><?php esc_html_e( 'This space is reserved for a future student story, shared with appropriate consent and in the student’s own words.', 'kysports-foundation' ); ?></p>
				<p class="home-spotlight__note"><?php esc_html_e( 'Content placeholder', 'kysports-foundation' ); ?></p>
			</div>
		</div>
	</section>

	<section class="home-news" aria-labelledby="home-news-title">
		<div class="home-news__inner">
			<div class="home-news__intro">
				<p class="section-eyebrow"><?php esc_html_e( 'Latest news', 'kysports-foundation' ); ?></p>
				<h2 id="home-news-title"><?php esc_html_e( 'From the KySports community.', 'kysports-foundation' ); ?></h2>
			</div>

			<?php
			$kysports_latest_news = new WP_Query(
				array(
					'ignore_sticky_posts' => true,
					'no_found_rows'       => true,
					'posts_per_page'      => 3,
					'post_status'         => 'publish',
				)
			);
			?>

			<?php if ( $kysports_latest_news->have_posts() ) : ?>
				<div class="news-list">
					<?php while ( $kysports_latest_news->have_posts() ) : ?>
						<?php $kysports_latest_news->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'news-card' ); ?>>
							<p class="news-card__date"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>
							<h3 class="news-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="news-card__excerpt">
								<?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?>
							</div>
							<a class="news-card__link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read update', 'kysports-foundation' ); ?><span class="screen-reader-text">: <?php the_title(); ?></span></a>
						</article>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<div class="news-empty-state">
					<p><?php esc_html_e( 'News updates will appear here as they are published.', 'kysports-foundation' ); ?></p>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="home-events" aria-labelledby="home-events-title">
		<div class="home-events__inner">
			<div class="home-events__intro">
				<p class="section-eyebrow"><?php esc_html_e( 'Upcoming events', 'kysports-foundation' ); ?></p>
				<h2 id="home-events-title"><?php esc_html_e( 'Join us on the sidelines and beyond.', 'kysports-foundation' ); ?></h2>
			</div>

			<?php
			$kysports_upcoming_events = false;

			if ( post_type_exists( 'tribe_events' ) ) {
				$kysports_upcoming_events = new WP_Query(
					array(
						'ignore_sticky_posts' => true,
						'meta_key'            => '_EventStartDate',
						'orderby'             => 'meta_value',
						'order'               => 'ASC',
						'posts_per_page'      => 3,
						'post_status'         => 'publish',
						'post_type'           => 'tribe_events',
						'meta_query'          => array(
							array(
								'compare' => '>=',
								'key'     => '_EventEndDate',
								'type'    => 'DATETIME',
								'value'   => current_time( 'mysql' ),
							),
						),
					)
				);
			}
			?>

			<?php if ( $kysports_upcoming_events && $kysports_upcoming_events->have_posts() ) : ?>
				<div class="event-list">
					<?php while ( $kysports_upcoming_events->have_posts() ) : ?>
						<?php $kysports_upcoming_events->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'event-card' ); ?>>
							<p class="event-card__date"><time datetime="<?php echo esc_attr( tribe_get_start_date( get_the_ID(), true, 'c' ) ); ?>"><?php echo esc_html( tribe_get_start_date( get_the_ID(), true, get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ) ); ?></time></p>
							<h3 class="event-card__title"><a href="<?php echo esc_url( tribe_get_event_link() ); ?>"><?php the_title(); ?></a></h3>
							<a class="event-card__link" href="<?php echo esc_url( tribe_get_event_link() ); ?>"><?php esc_html_e( 'Event details', 'kysports-foundation' ); ?><span class="screen-reader-text">: <?php the_title(); ?></span></a>
						</article>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
				<?php if ( function_exists( 'tribe_get_events_link' ) ) : ?>
					<p class="home-events__all"><a href="<?php echo esc_url( tribe_get_events_link() ); ?>"><?php esc_html_e( 'View all events', 'kysports-foundation' ); ?></a></p>
				<?php endif; ?>
			<?php else : ?>
				<div class="events-empty-state">
					<p><?php esc_html_e( 'Upcoming events will appear here as they are added to the calendar.', 'kysports-foundation' ); ?></p>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php if ( '' !== trim( get_the_content() ) ) : ?>
				<section class="home-page__content">
					<div class="home-page__content-inner">
						<?php the_content(); ?>
					</div>
				</section>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php
get_footer();

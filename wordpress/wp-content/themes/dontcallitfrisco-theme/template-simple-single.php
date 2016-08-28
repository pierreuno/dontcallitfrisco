<?php /* Template Name: Simple Single Page */ get_header(); ?>

	<main role="main simple-single-page">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_post_thumbnail() ?>

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
					</div>
				</div>

				<?php edit_post_link(); ?>

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

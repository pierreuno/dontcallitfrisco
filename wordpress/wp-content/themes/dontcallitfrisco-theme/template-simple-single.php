<?php /* Template Name: Simple Single Page */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="simple-single-page bottom-30">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<div class="header">
					<?php the_post_thumbnail() ?>
				</div>
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

<?php /* Template Name: Saison Page */ get_header();
	global $post;
	$page_slug = $post->post_name;
	$args = array(
		'category_name' => $page_slug,
		'order' => 'DESC',
		'orderby' => 'title',
		'post_type' => 'episodes'
	);
	$myposts = get_posts( $args );
?>

	<div class="featured-background bottom-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12 play-video-wrapper">
					<?php
					foreach ( $myposts as $post ) :
						setup_postdata( $post );
						if( get_field('featured_episode', $post->ID)[0] == 1 ){ ?>
							<a href="#" class="play-video" data-youtube-id="<?php the_field('youtube_id'); ?>">
								<?php the_post_thumbnail('featured', array( 'title' => get_the_title() )) ?>
								<span class="glyphicon glyphicon-play play-button"></span>
							</a>
					<?php } endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>

<div class="featured-background bottom-30">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-center text-uppercase main-video-title">
					<?php
						$content = get_the_content();
						echo wp_filter_nohtml_kses( $content );
					?>
				</p>
			</div>
		</div>
	</div>
</div>

<?php if(!empty($myposts)): ?>

	<div class="container" id="episodes">
		<div class="row">
			<div class="col-md-12">
				<h1>Episodes</h1>
				<div class="row video-library">
					<?php
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="col-md-4 video-entity">
								<div class="video-thumbnail">
									<a href="<?php the_permalink(); ?>"
										 class="feature-video"
										 data-youtube-id="<?php the_field('youtube_id'); ?>"
										 data-featured-image="<?php the_post_thumbnail_url('featured'); ?>">
										<span class="glyphicon glyphicon-play play-button"></span>
										<?php the_post_thumbnail('medium', array( 'title' => get_the_title() )) ?>
									</a>
								</div>
								<h2><?php the_title(); ?></h2>
							</div>
					<?php endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>

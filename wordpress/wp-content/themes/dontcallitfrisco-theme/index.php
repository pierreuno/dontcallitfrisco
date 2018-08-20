<?php get_header(); ?>

	<div class="featured-background bottom-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12 play-video-wrapper">
					<?php
					$args = array(
						'order' => 'ASC',
						'orderby' => 'title',
						'post_type' => 'episodes'
					);
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) :
						setup_postdata( $post );
						if( get_field('featured_episode', $post->ID)[0] == 1 ){ ?>
							<a href="#" class="play-video" data-youtube-id="<?php the_field('youtube_id'); ?>">
								<?php the_post_thumbnail('featured', array( 'title' => get_the_title() )) ?>
								<span class="glyphicon glyphicon-play play-button"></span>
							</a>
					<?php
					break;
					} endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>

	<div class="featured-background bottom-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center text-uppercase main-video-title">DCF is a comedy show that follows a Boston transplant while he tries to adjust to his weird new life in San Francisco</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="episodes">
		<div class="row">
			<div class="col-md-12">
				<h1>Episodes</h1>
				<div class="row video-library">
					<?php
					$count = 0;
					$args = array(
						'order' => 'DESC',
						'orderby' => 'title',
						'post_type' => 'episodes',
						'posts_per_page' => -1,
						'numberposts' => -1
					);
					$myposts = get_posts( $args );
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
					<?php
					if ($count==2){
						echo '</div><div class="row video-library">';
						$count=0;
					}else{
						$count++;
					}
					endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>


	<div class="container bottom-30">
		<div class="row">
			<div class="col-md-12">
				<?php
				$args = array( 'order'=> 'ASC' );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) {
					setup_postdata( $post );
					if( get_field('display_on_home_page', $post->ID) ){
						the_content();
					}
				}
				wp_reset_postdata();?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

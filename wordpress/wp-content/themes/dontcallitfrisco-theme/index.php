<?php get_header(); ?>

	<div class="featured-background bottom-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12 play-video-wrapper">
					<?php
					$args = array( 'order'=> 'DESC', 'post_type' => 'episodes', 'posts_per_page' => 1 );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<a href="#" class="play-video" data-youtube-id="<?php the_field('youtube_id'); ?>">
								<?php the_post_thumbnail('featured') ?>
								<span class="glyphicon glyphicon-play play-button"></span>
							</a>


							<!-- LikeBtn.com BEGIN -->
							<span class="likebtn-wrapper" data-theme="transparent" data-white_label="true" data-rich_snippet="true" data-identifier="<?php the_field('youtube_id'); ?>"></span>
							<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
							<!-- LikeBtn.com END -->

					<?php endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 email-list-wrapper">
				<div class="email-list-centered">
					<p class="email-list-title">JOIN OUR EMAIL LIST TO FIND OUT ABOUT NEW EPISODES</p>
					<input type="text" name="signup_email"/>
					<button class="j-o-i-n sign-up">JOIN</button>
					<p class="sign-up-loader">
						<img src="/wp-content/themes/dontcallitfrisco-theme/img/loader.gif"/>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Episodes</h2>
				<div class="row video-library">
					<?php
					$args = array( 'order'=> 'DESC', 'post_type' => 'episodes' );
					$myposts = get_posts( $args );

					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<div class="col-md-4 video-entity">
								<div class="video-thumbnail">
									<a href="<?php the_permalink(); ?>"
										 class="feature-video"
										 data-youtube-id="<?php the_field('youtube_id'); ?>"
										 data-featured-image="<?php the_post_thumbnail_url('featured'); ?>">
										<span class="glyphicon glyphicon-play play-button"></span>
										<?php the_post_thumbnail('medium') ?>
									</a>
								</div>
								<h4><?php the_title(); ?></h4>
								<p class="short-description"><?php the_excerpt(); ?></p>
							</div>
					<?php endforeach;
					wp_reset_postdata();?>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Us</h2>
				<p>The Don't Call it Frisco team is a mighty band of creative weirdos, nerds, and odd-balls from all over (Much like San Francisco). The majority of us are are experienced production professionals in the commercial/corp dorp world. DCF is our pet project.</p>
				<p>The show is written/directed by Matt Barkin but it takes a village!</p>
				<p>Look out for the behind the scenes videos. You just might like them more than the show itself ;)</p>
			</div>
		</div>
	</div>

<?php get_footer(); ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-144x144.png" rel="apple-touch-icon-precomposed">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=0.7, minimum-scale=0.7, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>
	</head>
	<body <?php body_class(); ?>>

		<nav class="navbar featured-background">
	    <div class="container">

				<div class="logo margin-bottom-minus-53">
					<a href="<?php echo home_url(); ?>">
						<div class="header">Don't Call It</div>
						<div class="title">Frisco</div>
					</a>
				</div>

				<?php
				    global $post;
				    $post_slug = $post->post_name;
						$is_home = $post_slug == 'home';
						$is_season_1 = $post_slug == 'season-1';
						$is_season_2 = $post_slug == 'season-2';
						$is_about = $post_slug == 'about-us';
						$is_blog = $post_slug == 'blog';
						$is_press = $post_slug == 'press';

						if(isset($_GET['debug']) && !empty($_GET['debug']) ){
							echo $post_slug;
						}
				?>

	      <div id="navbar">
	        <ul class="nav navbar-nav">
	          <li><a href="/season-1"><span class="header"></span><span class="menu_link  <?= $is_season_1 ? "current_page" : "" ?>">Season 1</span></a></li>
						<li><a href="/season-2"><span class="header"></span><span class="menu_link  <?= $is_season_2 ? "current_page" : "" ?>">Season 2</span></a></li>
						<li class="small-width"><a href="/press"><span class="header"></span><span class="menu_link <?= $is_press ? "current_page" : "" ?>">Press</span></a></li>
	          <li class="small-width"><a href="/blog"><span class="header"></span><span class="menu_link <?= $is_blog ? "current_page" : "" ?>">Blog</span></a></li>
	          <li><a href="/about-us"><span class="header"></span><span class="menu_link <?= $is_about ? "current_page" : "" ?>" >About Us</a></li>
						<li style="margin-top:-4px;">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="8BW3LJ4P954QA">
							<input type="submit" class="support-us" name="submit" value="Support Us" alt="PayPal - The safer, easier way to pay online!">
							<div class="credit-cards">
								<div class="visa"></div>
								<div class="mastercard"></div>
								<div class="amex"></div>
								<div class="unknown"></div>
							</div>
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</li>
	        </ul>
	      </div><!--/.nav-collapse -->

				<div id="navbar-mobile">
					<ul class="nav navbar-nav seasons">
						<li class="small-width">&nbsp</li>
						<li><a href="/season-1"><span class="header"></span><span class="menu_link  <?= $is_season_1 ? "current_page" : "" ?>">Season 1</span></a></li>
						<li><a href="/season-2"><span class="header"></span><span class="menu_link  <?= $is_season_2 ? "current_page" : "" ?>">Season 2</span></a></li>
						<li class="small-width">&nbsp</li>
					</ul>
					<ul class="nav navbar-nav others">
						<li class="small-width"><a href="/press"><span class="header"></span><span class="menu_link <?= $is_press ? "current_page" : "" ?>">Press</span></a></li>
						<li class="small-width"><a href="/blog"><span class="header"></span><span class="menu_link <?= $is_blog ? "current_page" : "" ?>">Blog</span></a></li>
						<li><a href="/about-us"><span class="header"></span><span class="menu_link <?= $is_about ? "current_page" : "" ?>" >About Us</a></li>
						<li style="margin-top:5px;">
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="8BW3LJ4P954QA">
							<input type="submit" class="support-us" name="submit" value="Support Us" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
	    </div>
	  </nav>


		<style>
</style>

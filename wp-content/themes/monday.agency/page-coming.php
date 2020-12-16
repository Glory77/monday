<?php
/**
 * @package WordPress
 * Template Name: Coming
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="Monday">

	<meta name="viewport" content="width=device-width">

	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon-96x96.png">
	<?php wp_head(); ?>
</head>

<body ondragstart="return false;" ondrop="return false;" class="coming-page">
	
	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="logo-wrapper">
					<a href="<?= home_url(); ?>">
						<span class="logo-name">
							<?= get_field('header_logo_name', 'option'); ?>
						</span>
					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="center-wrapper">
		<div class="container">
			<div class="center-text">
				<div class="h1">
					We are coming soon
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	<script src="https://d3js.org/d3.v3.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/simplify.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"crossorigin="anonymous"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.min.js"></script>
</body>
</html>

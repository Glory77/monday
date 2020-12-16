<!DOCTYPE html>
<html lang="ru">

<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PM63D4S');</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="Monday">

	<meta name="viewport" content="width=device-width">

	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon-96x96.png">
	<?php wp_head(); ?>
</head>

<body ondragstart="return false;" ondrop="return false;" class="<?= body_classes(); ?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM63D4S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="logo-wrapper">
					<a href="<?= home_url(); ?>">
						<span class="logo-name">
							<?= get_field('header_logo_name', 'option'); ?>
						</span>
						<span class="logo-description">
							<?= get_field('header_logo_description', 'option'); ?>
						</span>
					</a>
					<div class="mobile-wrapper">
						<div class="page-title">
						</div>
						<div class="menu-btn">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
				<?php $header_menu = get_nav_menu_items_by_location('header'); ?>
				<?php if($header_menu): ?>
					<nav class="menu-wrapper">
						<ul class="main-menu">
							<?php foreach ($header_menu as $menu_item) { ?>
								<li>
									<?php if($menu_item->url == '#getInTouch'): ?>
										<button data-href="<?= $menu_item->url; ?>" class="btn-modal">
											<?= $menu_item->title; ?>
										</button>
									<?php else: ?>
										<a href="<?= $menu_item->url; ?>" <?= $menu_item->target ? 'target="'.$menu_item->target.'"' : '' ?>>
											<?= $menu_item->title; ?>
										</a>
									<?php endif; ?>
								</li>
							<?php } ?>
						</ul>
					</nav>
				<?php endif; ?>
				
				<div class="footer-wrapper">
					<div class="footer-contacts">
						<?php $email = get_field('email', 'option'); ?>
						<?php if($email): ?>
							<a href="mailto:<?= $email; ?>" class="h2">
								<?= $email; ?>
							</a>
							<br>
						<?php endif; ?>
						<?php $phone = get_field('phone', 'option'); ?>
						<?php if($phone): ?>
							<a href="tel:<?= $phone; ?>" class="h2">
								<?= $phone; ?>
							</a>
						<?php endif; ?>					
					</div>
					<div class="copyright-wrapper">
						© Monday <?= date('Y'); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
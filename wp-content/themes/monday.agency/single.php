<?php get_header(); ?>
	<section class="jumbotron">
		<div class="container">
			<div class="jumbotron-wrapper">
				<div class="h1">
					<?= get_the_title(); ?>
					<?php $title = get_field('title'); ?>
					<?php if($title): ?>
						<br><?= $title; ?>
					<?php endif; ?>
				</div>
				<?php $scroll = get_field('scroll'); ?>
				<?php if($scroll): ?>
					<div class="scroll-helper">
						<a href="<?= $scroll['url']; ?>">
							<span class="arrow-first">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrow.svg" alt="">
							</span>
							<span class="arrow-text">
								<?= $scroll['title']; ?>
							</span>
							<span class="arrow-second">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrow.svg" alt="">
							</span>						
						</a>
					</div>
				<?php endif; ?>			
			</div>
		</div>
	</section>

	<?php $information = get_field('information'); ?>
	<?php if($information){
		set_query_var( 'block', $information);
		get_template_part( 'templates/project/information');
	} ?>

	<?php $all_fields = get_field('flexible_fields');
	foreach ($all_fields as $field) {
		set_query_var( 'block', $field);
		get_template_part( 'templates/project/'.$field['acf_fc_layout']);
	} ?>

	<?php get_template_part( 'templates/project/other_projects'); ?>
<?php get_footer(); ?>
<?php
/**
 * @package WordPress
 * Template Name: Projects
 */
get_header(); ?>
	<?php $projects = get_posts( array(
		'numberposts' => -1,
		'orderby'     => 'date',
		'order'       => 'DESC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => 'projects',
		'suppress_filters' => true,
	) ); ?>
	<section class="what projects-rows" id="what">
		<div class="what-wrapper">
			<?php foreach ($projects as $project): ?>
				<div class="what-item">
					<a href="<?= get_post_permalink($project->ID); ?>" data-href="details" class="what-wrapper__inner">
						<div class="container">					
							<?php $text_on_preview = get_field('text_on_preview', $project->ID); ?>
							<span class="h3"><?= $text_on_preview ? $text_on_preview : $project->post_title; ?></span> 		
							<span class="bh1">
								<?= get_field('subtitle', $project->ID); ?>
							</span>		
							<div class="mobile-link">
								<span>
									details
								</span>
							</div>
							<div class="hover-image">
								<img src="<?= get_the_post_thumbnail_url($project->ID, 'medium'); ?>" alt="">
							</div>
						</div>	
					</a>			
				</div>
			<?php endforeach; ?>
		</div>		
	</section>
	<?php $all_fields = get_field('flexible_fields');
	foreach ($all_fields as $field) {
		set_query_var( 'block', $field);
		get_template_part( 'templates/'.$field['acf_fc_layout']);
	} ?>
<?php get_footer(); ?>
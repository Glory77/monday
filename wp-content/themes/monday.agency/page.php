<?php get_header(); ?>
	<?php $all_fields = get_field('flexible_fields');
	foreach ($all_fields as $field) {
		set_query_var( 'block', $field);
		get_template_part( 'templates/'.$field['acf_fc_layout']);
	} ?>
<?php get_footer(); ?>
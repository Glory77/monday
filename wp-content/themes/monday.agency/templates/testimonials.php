<?php $testimonials = get_posts( array(
	'numberposts' => -1,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'testimonials',
	'suppress_filters' => true,
) ); ?>
<section class="testimonials" id="testimonials">
	<div class="container">
		<div class="testimonials-wrapper">
			<div class="testimonials-slider">
				<?php foreach ($testimonials as $review): ?>
					<div class="testimonials-item">
						<div class="testimonials-image">
							<img src="<?= get_field('photo', $review->ID); ?>" alt="">
						</div>
						<div class="testimonials-content">
							<div class="testimonials-header">
								<div class="testimonials-name">
									<?= $review->post_title; ?>
								</div>
								<div class="testimonials-position">
									<?= get_field('position', $review->ID); ?>
								</div>
							</div>
							<div class="testimonials-content">
								<?= get_field('text', $review->ID); ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>																
			</div>
		</div>
	</div>
</section>
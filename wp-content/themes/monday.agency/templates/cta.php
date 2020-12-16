<section class="cta" id="cta">
	<div class="container">
		<div class="cta-wrapper">
			<?php if($block['title']): ?>
				<div class="h2">
					<?= $block['title']; ?>
				</div>
			<?php endif; ?>
			<div class="cta-form">
				<?= do_shortcode('[contact-form-7 id="51" title="CTA form"]'); ?>
			</div>
		</div>
	</div>
</section>
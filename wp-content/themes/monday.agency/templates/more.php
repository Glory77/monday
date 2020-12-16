<section class="more" id="more">
	<div class="container">
		<div class="more-wrapper">
			<?php if($block['title']): ?>
				<div class="bh1">
					<?= $block['title']; ?>
				</div>
			<?php endif; ?>
			<?php if($block['button']): ?>
				<?= get_button_link($block['button']); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
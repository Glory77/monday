<section class="about" id="about">
	<div class="container">
		<div class="about-wrapper">
			<?php if($block['title']): ?>
				<div class="subtitle">
					<?= $block['title']; ?>
				</div>
			<?php endif; ?>
			<?php if($block['description']): ?>
				<div class="bh1">
					<?= $block['description']; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
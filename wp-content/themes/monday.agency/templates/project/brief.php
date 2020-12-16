<section class="brief">
	<div class="container">
		<div class="brief-wrapper">
			<?php if($block['title']): ?>
				<div class="subtitle">
					<?= $block['title']; ?>
				</div>
			<?php endif; ?>
			<?php foreach ($block['text'] as $text): ?>
				<div class="bh1">
					<?= $text['text']; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="industries" id="industries">
	<div class="container">
		<div class="industries-wrapper">
			<?php if($block['title']): ?>
				<div class="subtitle">
					<?= $block['title']; ?>
				</div>
			<?php endif; ?>
			<?php if($block['industries_list']): ?>
				<div class="industries-tags bh1">
					<?php foreach ($block['industries_list'] as $key => $industry): ?>
						<span><?= $industry['industry']['title']; ?></span><?php if($key !== (count($block['industries_list']) - 1)): ?>,<?php endif; ?>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
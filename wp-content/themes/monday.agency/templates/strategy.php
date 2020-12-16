<section class="strategy">
	<div class="container">
		<div class="strategy-wrapper">
			<div class="strategy-col">
				<?php if($block['list']): ?>
					<div class="subtitle">
						<?= $block['title']; ?>
					</div>
				<?php endif; ?>
				<?php if($block['list']): ?>
					<ol>
						<?php foreach ($block['list'] as $item): ?>
							<li class="bh1">
								<?= $item['item']; ?>
							</li>
						<?php endforeach; ?>
					</ol>
				<?php endif; ?>			
			</div>				
		</div>
	</div>
</section>
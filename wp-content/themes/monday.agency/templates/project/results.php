<section class="results">
	<div class="container">
		<?php if($block['title']): ?>
			<div class="subtitle">
				<?= $block['title']; ?>
			</div>
		<?php endif; ?>
		<?php if($block['description']): ?>
			<div class="h2">
				<?= $block['description']; ?>
			</div>
		<?php endif; ?>
		<?php if($block['style'] == 'columns' && $block['columns']): ?>
			<div class="results-wrapper">
				<?php foreach ($block['columns'] as $column): ?>
					<div class="results-col">
						<?php if($column['title']): ?>
							<div class="subtitle">
								<?= $column['title']; ?>
							</div>
						<?php endif; ?>
						<?php foreach ($column['list'] as $item): ?>
							<div class="bh1">
								<?= $item['item'] ?>
							</div>
						<?php endforeach; ?>	
					</div>
				<?php endforeach; ?>							
			</div>
		<?php endif; ?>
		<?php if($block['style'] == 'blocks' && $block['blocks']): ?>
			<div class="results-wrapper">
				<?php foreach ($block['blocks'] as $block_item): ?>
					<div class="bh1">
						<?= $block_item['text'] ?>
					</div>
				<?php endforeach; ?>																										
			</div>
		<?php endif; ?>
		<div class="button-wrapper">
			<button type="submit" data-href="#getInTouch" class="main-btn btn-answer">
				SEND US A MESSAGE
			</button>	
		</div>
	</div>
</section>
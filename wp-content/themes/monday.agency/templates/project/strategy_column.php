<section class="strategy">
	<div class="container">
		<div class="strategy-wrapper">
			<?php foreach ($block['column'] as $column): ?>
				<div class="strategy-col">
					<?php if($column['title']): ?>
						<div class="subtitle">
							<?= $column['title']; ?>
						</div>
					<?php endif; ?>
					<?php if($column['list']): ?>
						<div class="bh1">
							<?php foreach ($column['list'] as $key => $item): ?>
								<span><?= $item['item']; ?><?= $key == (count($column['list']) - 1) ? '' : ','; ?></span> 
							<?php endforeach; ?>
						</div>
					<?php endif; ?>			
				</div>
			<?php endforeach; ?>						
		</div>
	</div>
</section>
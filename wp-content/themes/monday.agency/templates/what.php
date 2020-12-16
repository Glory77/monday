<section class="what" id="what">
	<div class="container">
		<?php if($block['title']): ?>
			<div class="subtitle">
				<?= $block['title']; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php if($block['items']): ?>
		<div class="what-wrapper">
			<?php foreach ($block['items'] as $item): ?>
				<div class="what-item">
					<a href="<?= $item['link']['url']; ?>" target="<?= $item['link']['target']; ?>" data-href="<?= $item['hint']; ?>" class="what-wrapper__inner">
						<div class="container">
							<?php if($item['title']): ?>			
								<span class="h2">
									<?= $item['title']; ?>	
								</span>
							<?php endif; ?>
							<?php if($item['description']): ?>
								<span class="bh2">
									<?= $item['description']; ?>	
								</span>
							<?php endif; ?>	
							<div class="mobile-link">
								<span>
									<?= $item['link']['title']; ?>	
								</span>
							</div>
						</div>	
					</a>			
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>
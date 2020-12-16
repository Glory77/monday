<section class="how" id="how">
	<div class="container">
		<?php if($block['title']): ?>
			<div class="subtitle">
				<?= $block['title']; ?>
			</div>
		<?php endif; ?>
		<div class="how-wrapper">
			<div class="how-wrapper__inner">
				<?php foreach ($block['points'] as $point): ?>
					<a class="how-element" data-width="<?= $point['position']; ?>">
						<?php if($point['title']): ?>
							<div class="how-title">
								<?= $point['title']; ?>
							</div>
						<?php endif; ?>
						<div class="how-dot">

						</div>
						<?php if($point['description']): ?>
							<div class="how-content bh2">
								<?= $point['description']; ?>
							</div>
						<?php endif; ?>
					</a>
				<?php endforeach; ?>	
				<div class="how-line">

				</div>														
			</div>
		</div>
	</div>
</section>
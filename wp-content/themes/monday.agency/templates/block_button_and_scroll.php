<section class="jumbotron">
	<div class="container">
		<div class="jumbotron-wrapper">
			<?php if($block['text']): ?>
				<div class="h1">
					<?= $block['text']; ?>
				</div>
			<?php endif; ?>
			<?php if($block['button']): ?>
				<?= get_button_link($block['button']); ?>
			<?php endif; ?>
			<?php if($block['scroll']): ?>
				<div class="scroll-helper">
					<a href="<?= $block['scroll']['url']; ?>">
						<span class="arrow-first">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrow.svg" alt="">
						</span>
						<span class="arrow-text">
							<?= $block['scroll']['title']; ?>
						</span>
						<span class="arrow-second">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/arrow.svg" alt="">
						</span>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
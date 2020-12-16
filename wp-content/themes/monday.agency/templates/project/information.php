<section class="project-info">
	<div class="container">
		<div class="project-info__wrapper">
			<div class="project-info__col">
				<?php if($block['industry_name']): ?>
					<div class="project-info__element">
						<div class="project-info__title subtitle">
							INDUSTRY
						</div>
						<div class="project-info__name bh1">
							<span>
								<?= $block['industry_name']; ?>
							</span>
						</div>
					</div>
				<?php endif; ?>
				<?php if($block['year']): ?>
					<div class="project-info__element">
						<div class="project-info__title subtitle">
							YEAR
						</div>
						<div class="project-info__name bh1">
							<span>
								<?= $block['year']; ?>
							</span>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php if($block['expertise_list']): ?>
				<div class="project-info__col" id="expertise">
					<div class="project-info__element">
						<div class="project-info__title subtitle">
							EXPERTISE
						</div>
						<div class="project-info__name bh1">
							<?php foreach ($block['expertise_list'] as $expertise_item): ?>
								<span>
									<?= $expertise_item['expertise']; ?>
								</span>
							<?php endforeach; ?>
						</div>
					</div>					
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
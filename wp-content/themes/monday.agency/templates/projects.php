<?php if($block['style_view'] == 'block'): ?>
	<section class="projects" id="projects">
		<div class="container">
			<div class="projects-header">
				<?php if($block['title']): ?>
					<div class="subtitle">
						<?= $block['title']; ?>
					</div>
				<?php endif; ?>
				<a href="/projects" class="projects-link">
					View ALL
				</a>			
			</div>
			<?php if($block['projects']): ?>		
				<div class="projects-wrapper">
					<?php foreach ($block['projects'] as $project): ?>
						<div class="projects-item">
							<a href="<?= get_post_permalink($project->ID); ?>" class="projects-item__inner">
								<div class="projects-item__title">
									<?php $text_on_preview = get_field('text_on_preview', $project->ID); ?>
									<span><?= $text_on_preview ? strip_tags($text_on_preview) : $project->post_title; ?></span> 
									<?= get_field('subtitle', $project->ID); ?>
								</div>
								<?php $information = get_field('information', $project->ID); ?>
								<div class="projects-item__date">
									<?= $information['year']; ?><?php if($information['year'] && $information['industry_name']): ?>,<?php endif; ?><span><?= $information['industry_name']; ?></span>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php if($block['style_view'] == 'list'): ?>
	<section class="what projects-rows" id="what">
		<?php if($block['title']): ?>
			<div class="container">
				<div class="subtitle">
					<?= $block['title']; ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if($block['projects']): ?>		
			<div class="what-wrapper">
				<?php foreach ($block['projects'] as $project): ?>
					<div class="what-item">
						<a href="<?= get_post_permalink($project->ID); ?>" data-href="details" class="what-wrapper__inner">
							<div class="container">
								<?php $text_on_preview = get_field('text_on_preview', $project->ID); ?>
								<span class="h3"><?= $text_on_preview ? $text_on_preview : $project->post_title; ?></span> 
								<span class="bh1"><?= get_field('subtitle', $project->ID); ?></span>
								<div class="mobile-link">
									<span>
										details
									</span>
								</div>
								<div class="hover-image">
									<img src="<?= get_the_post_thumbnail_url($project->ID, 'medium'); ?>" alt="">
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>	
		<div class="link-wrapper container">
			<a href="/projects" class="project-link">
				ALL PROJECTS
			</a>				
		</div>
	</section>
<?php endif; ?>
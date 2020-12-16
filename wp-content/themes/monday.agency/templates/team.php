<section class="team">
	<div class="container">
		<?php if($block['title']): ?>
			<div class="h2">
				<?= $block['title']; ?>
			</div>
		<?php endif; ?>
		<?php if($block['subtitle']): ?>
			<div class="subtitle">
				<?= $block['subtitle']; ?>
			</div>
		<?php endif; ?>
		<div class="team-wrapper">
			<div class="team-image">
				<img src="<?= $block['image']; ?>" alt="">
				<?php $team_list = ''; ?>
				<?php foreach ($block['team'] as $key => $item): ?>
					<div class="svg-circle" id="circle<?= $key+1; ?>" style="left: <?= $item['image_coordinates']['left']; ?>%; top: <?= $item['image_coordinates']['top']; ?>%; width: <?= $item['image_coordinates']['width']; ?>px">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="181.6px" height="239.1px" viewBox="0 0 181.6 239.1" enable-background="new 0 0 181.6 239.1" xml:space="preserve"><defs></defs><path fill="none" stroke="#339C5D" stroke-width="2" stroke-miterlimit="10" d="M150.3,26c0,0-24.5-35-102.5-5s-59,253.5,61.5,212s65.5-212,1.5-232"/></svg>
					</div>
					<?php $team_list .= '<li><div class="team-name"><span>'.$item['name'].'</span></div><div class="team-position">'.$item['position'].'</div></li>'; ?>
				<?php endforeach; ?>														
			</div>
			<div class="team-list">
				<?php if($team_list): ?>
					<ul>
						<?= $team_list; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
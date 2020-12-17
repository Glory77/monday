<footer class="footer">
		<div class="container">
			<div class="footer-wrapper">
				<div class="subtitle">
					<?= get_field('footer_description', 'option'); ?>
				</div>
				<div class="footer-contacts">
					<?php $email = get_field('email', 'option'); ?>
					<?php if($email): ?>
						<a href="mailto:<?= $email; ?>" class="h2">
							<?= $email; ?>
						</a>
					<?php endif; ?>
					<?php $phone = get_field('phone', 'option'); ?>
					<?php if($phone): ?>
						<a href="tel:<?= $phone; ?>" class="h2">
							<?= $phone; ?>
						</a>
					<?php endif; ?>
				</div>
				<div class="copyright-wrapper">
					© Monday <?= date('Y'); ?>
				</div>
			</div>
		</div>
	</footer>
	<!-- getInTouch Modal -->
	<div id="getInTouch" class="fancybox-modal">
		<div class="modal-dialog" role="document">
			<div class="container">
				<div class="modal-content">
					<div class="modal-body">
						<?php $form_settings = get_field('form_settings', 'option'); ?>
						<?php if($form_settings['title']): ?>
							<div class="modal-title h2">
								<?= $form_settings['title']; ?>
							</div>
						<?php endif; ?>
						<?= do_shortcode($form_settings['shortcode']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	<script src="https://d3js.org/d3.v3.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/simplify.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"crossorigin="anonymous"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.min.js"></script>
</body>
</html>

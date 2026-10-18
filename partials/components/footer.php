<?php
$page = 'option';

$btn = get_field('header_btn', $page) ?? get_bloginfo('name');
$descr = get_field('header_descr', $page) ?? get_bloginfo('name');
$copy = get_field('footer_copy', $page) ?? get_bloginfo('name');
$links = get_field('footer_links', $page) ?? '';
?>
<footer class="section-bg footer">
	<div class="footer__container container">
		<div class="footer__top">
			<div class="footer__logo logo">
				<?php mx_logo(); ?>
				<div class="logo__descr descr">
					<?php echo wp_kses_post($descr) ?>
				</div>
			</div>
			<div class="footer__menu footer-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class' => 'footer-menu__list',
						'depth' => 1
					)
				); ?>
				<a class="footer-menu__btn btn" href="<?php echo esc_attr($btn['url']) ?>">
					<?php echo esc_html($btn['title']) ?>
				</a>
			</div>
		</div>
		<div class="footer__bottom">
			<div class="footer__links">
				<?php if ($links): ?>
					<?php foreach ($links as $item): ?>
						<a class="footer__link" href="<?php echo esc_attr($item['footer_links_link']['url']) ?>">
							<?php echo esc_html($item['footer_links_link']['title']) ?>
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
				<small class="footer__copy">
					&copy; <?php echo esc_html($copy) ?> <span> <?php echo date('Y') ?> </span>
				</small>
			</div>
		</div>
	</div>
	<div class="section-bg__bg-box image-box">
		<img class="hidden-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/footer-bg.webp" alt="" />
		<img class="visible-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/footer-bg-mobile.webp" alt="" />
	</div>
</footer>
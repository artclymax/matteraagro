<?php
$page = 'option';

$title = get_field('hero_title', $page) ?? '';
$descr = get_field('hero_descr', $page) ?? '';
$btn = get_field('hero_btn', $page) ?? '';
$image_mobile = get_field('hero_image_mobile', $page)['url'] ?: get_template_directory_uri() . '/assets/images/bg-big.webp';

?>
<section class="hero" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<h1 class="hero__title title-1">
				<?php echo esc_html($title) ?>
			</h1>
			<div class="hero__descr descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<a class="hero__btn btn visible-mobile" href="<?php echo esc_html($btn['url'] ?: '') ?>">
				<?php echo esc_html($btn['title'] ?: '') ?>
			</a>
		</div>
		<a class="hero__arrow-down hidden-mobile" href="#direction">
			<img src="<?= get_template_directory_uri() ?>/assets/images/arrow-down.svg" alt="" />
		</a>
	</div>
	<div class="hero__bg-box image-box">
		<img class="hero__bg-small" src="<?= esc_attr($image_mobile)?>" alt="" />
	</div>
</section>
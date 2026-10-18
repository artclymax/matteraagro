<?php
/*
Template Name: Главная страница
*/
$hero_img = get_field('hero_image', 'options')['url'] ?: get_template_directory_uri() . '/assets/images/bg-big.webp';

?>
<?php get_header() ?>

<div class="section-big">
	<?php get_template_part('partials/hero'); ?>
	<?php get_template_part('partials/direction'); ?>

	<div class="section-big__bg-box image-box" aria-hidden="true">
		<img class="section-big__bg-big" src="<?= esc_attr($hero_img) ?>" alt="" />
	</div>

</div>
<div class="section-bg-mobile">
	<?php get_template_part('partials/why-us'); ?>
	<?php get_template_part('partials/products'); ?>
	<?php get_template_part('partials/frost-berries'); ?>
	<?php get_template_part('partials/trees'); ?>
	<?php get_template_part('partials/frost'); ?>
	<?php get_template_part('partials/gallery'); ?>
	<?php get_template_part('partials/faq'); ?>
	<?php get_template_part('partials/docs'); ?>
	<?php get_template_part('partials/contacts'); ?>

	<div class="section-bg-mobile__bg-box image-box visible-mobile" aria-hidden="true">
		<img class="section-bg-mobile__bg-big" src="<?= get_template_directory_uri()
			?>/assets/images/main-mobile-bg.webp" alt="" />
	</div>
</div>
<?php get_footer() ?>
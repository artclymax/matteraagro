<?php
$page = 'option';

$title = get_field('faq_title', $page) ?? '';
$descr = get_field('faq_descr', $page) ?? '';
$list = get_field('faq_list', $page) ?? '';
?>

<?php if ($list): ?>
	<section class="section-bg faq" id="faq">
		<div class="container faq__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="faq__list">
				<?php foreach ($list as $index => $item): ?>
					<li class="faq-item <?= !$index ? 'spoiler-active' : '' ?>" data-spoiler>
						<button class="faq-item__btn" data-spoiler-title>
							<h3 class="faq-item__title">
								<?php echo esc_html($item['faq_list_title']) ?>
							</h3>
							<span class="faq-item__icon"></span>
						</button>
						<div class="faq-item__content" data-spoiler-content>
							<div class="faq-item__descr descr">
								<?php echo wp_kses_post($item['faq_list_descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="section-bg__bg-box image-box">
			<img class="hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/contacts-bg.webp" alt="" />
		</div>
	</section>
<?php endif; ?>
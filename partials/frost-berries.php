<?php
$page = 'option';

$title = get_field('frost_berries_title', $page) ?? '';
$descr = get_field('frost_berries_descr', $page) ?? '';
$list = get_field('frost_berries_list', $page) ?? '';
$image = get_field('frost_berries_image', $page) ?? '';
$btn = get_field('frost_berries_btn', $page) ?? '';
?>
<?php if ($list): ?>
	<section class="section-bg frost-berries" id="frost-berries">
		<div class="container frost-berries__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<div class="frost-berries__wrapper">
				<ul class="frost-berries__list">
					<?php foreach ($list as $item): ?>
						<li class="frost-berries__item frost-berries-item box">
							<div class="frost-berries-item__image image-box">
								<?php echo wp_get_attachment_image(
									$item['frost_berries_list_image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['frost_berries_list_image']['alt'] ?: $item['frost_berries_list_title']
									)
								); ?>
							</div>
							<p class="frost-berries-item__title">
								<?php echo esc_html($item['frost_berries_list_title']) ?>
							</p>
						</li>
					<?php endforeach; ?>
					<li class="frost-berries-item__btn">
						<a class="btn frost-berries__btn" href="<?php echo esc_attr($btn['url']) ?>">
							<?php echo esc_html($btn['title']) ?>
						</a>
					</li>
				</ul>
				<div class="frost-berries__image image-box">
					<?php echo wp_get_attachment_image(
						$image['ID'],
						'large',
						false,
						array(
							'class' => 'img',
							'alt' => $image['alt'] ?: $title
						)
					); ?>
				</div>
			</div>
		</div>
		<div class="section-bg__bg-box image-box">
			<img class="bg-decor hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/frost-berries-bg-decor.webp" alt="" />
			<img class="bg-decor visible-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/frost-berries-bg-decor-mobile.webp" alt="" />
			<img class="hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/frost-berries-bg.webp" alt="" />
		</div>
	</section>
<?php endif; ?>
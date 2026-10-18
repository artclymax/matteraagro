<?php
$page = 'option';

$title = get_field('frost_title', $page) ?? '';
$descr = get_field('frost_descr', $page) ?? '';
$list = get_field('frost_list', $page) ?? '';
$image = get_field('frost_image', $page) ?? '';
?>
<?php if ($list): ?>
	<section class="section-bg frost" id="frost">
		<div class="container frost__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<div class="frost__wrapper">
				<ul class="frost__list">
					<?php foreach ($list as $item): ?>
						<li class="frost__item frost-item box">
							<div class="frost-item__image image-box">
								<?php echo wp_get_attachment_image(
									$item['frost_list_image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['frost_list_image']['alt'] ?: $item['frost_list_title']
									)
								); ?>
							</div>
							<div class="frost-item__wrapper">
								<h3 class="frost-item__title">
									<?php echo esc_html($item['frost_list_title']) ?>
								</h3>
								<div class="frost-item__descr descr title-3">
									<?php echo wp_kses_post($item['frost_list_descr']) ?>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="frost__image image-box">
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
			<img class="hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/frost-bg-decor.webp" alt="" />
		</div>
	</section>
<?php endif; ?>
<?php
$page = 'option';

$title = get_field('products_title', $page) ?? '';
$descr = get_field('products_descr', $page) ?? '';
$list = get_field('products_list', $page) ?? '';
$note = get_field('products_note', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section-bg products" id="products">
		<div class="container products__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="products__list grid">
				<?php foreach ($list as $item): ?>
					<li class="products__item products-item">
						<div class="products-item__image image-box">
							<?php echo wp_get_attachment_image(
								$item['products_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['products_list_image']['alt'] ?: $item['products_list_title']
								)
							); ?>
							<span class="products-item__label">
								<?php echo esc_html($item['products_list_label']) ?>
							</span>
						</div>
						<div class="products-item__info">
							<h3 class="products-item__title title-4">
								<?php echo esc_html($item['products_list_title']) ?>
							</h3>
							<div class="products-item__descr descr">
								<?php echo wp_kses_post($item['products_list_descr']) ?>
							</div>
							<a class="products-item__btn btn" href="<?php echo esc_html($item['products_list_btn']['url']) ?>">
								<?php echo esc_html($item['products_list_btn']['title']) ?>
							</a>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="products__descr descr icon">
				<?php echo wp_kses_post($note) ?>
			</div>
		</div>
		<div class="section-bg__bg-box image-box">
			<img class="bg-decor hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/products-bg-decor.png" alt="" />
			<img class="bg-decor visible-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/products-bg-decor-mobile.png" alt="" />
			<img class="hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/products-bg.jpg" alt="" />
		</div>
	</section>
<?php endif; ?>
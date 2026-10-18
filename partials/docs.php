<?php
$page = 'option';

$title = get_field('docs_title', $page) ?? '';
$descr = get_field('docs_descr', $page) ?? '';
$list = get_field('docs_list', $page) ?? '';
?>

<?php if ($list): ?>
	<section class="section-bg docs" id="docs">
		<div class="container docs__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<div class="swiper docs-swiper" data-swiper="{'slidesPerView': 'auto', 'spaceBetween': 20}">
				<div class="swiper-wrapper docs-swiper__wrapper">
					<?php foreach ($list as $item): ?>
						<div class="swiper-slide docs-slide">
							<a class="docs-slide__wrapper image-box" href="<?= esc_attr($item['docs_list_image']['url']) ?>"
								data-fancybox>
								<?php echo wp_get_attachment_image(
									$item['docs_list_image']['ID'],
									'large',
									false,
									array(
										'class' => 'img',
										'alt' => $item['docs_list_image']['alt'] ?: ''
									)
								); ?>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="docs__btn-box swiper-btn-box visible-mobile">
				<button class="swiper-btn swiper-btn__prev docs-swiper__btn docs-swiper__btn-prev" type="button"
					aria-label="Назад" data-swiper-btn-prev=".docs-swiper">
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40 22H16M16 10L4 22L16 34" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</button>
				<button class="swiper-btn swiper-btn__next docs-swiper__btn docs-swiper__btn-next" type="button"
					aria-label="Вперёд" data-swiper-btn-next=".docs-swiper">
					<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4 22H28M28 10L40 22L28 34" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</div>
		<div class="section-bg__bg-box image-box">
			<img class="hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/docs-bg.webp" alt="" />
		</div>
	</section>
<?php endif; ?>
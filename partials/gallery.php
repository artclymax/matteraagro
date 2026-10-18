<?php
$page = 'option';

$title = get_field('gallery_title', $page) ?? '';
$descr = get_field('gallery_descr', $page) ?? '';
$list = get_field('gallery_list', $page) ?? '';
?>
<section class="section-bg gallery" id="gallery">
	<div class="container gallery__container">
		<?php get_template_part('partials/section-header', null, [
			'title' => $title,
			'descr' => $descr,
		]); ?>
		<div class="swiper gallery-swiper hidden-mobile" data-swiper="{'slidesPerView': 1, 'spaceBetween': 24 }">
			<div class="swiper-wrapper gallery-swiper__wrapper">
				<?php foreach ($list as $item): ?>
					<div class='swiper-slide gallery-slide'>
						<div class='gallery-slide__grid'>
							<?php foreach ($item as $slide): ?>
								<a class='gallery-slide__item image-box' data-fancybox
									href="<?= esc_attr($slide['gallery_list_slide_link'] ? $slide['gallery_list_slide_link']['url'] : $slide['gallery_list_slide_file']['url']); ?>">
									<?php if ($slide['gallery_list_slide_type'] == 'video'): ?>
										<video src="<?= esc_attr($slide['gallery_list_slide_file']['url']); ?>" controls>
										</video>
									<?php else: ?>
										<img src="<?= esc_attr($slide['gallery_list_slide_file']['url']); ?>" alt="" />
									<?php endif; ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="swiper gallery-swiper visible-mobile" data-swiper="{'slidesPerView': 1, 'spaceBetween': 24 }">
			<div class="swiper-wrapper gallery-swiper__wrapper">
				<?php foreach ($list as $group): ?>
					<?php foreach ($group as $slide): ?>
						<div class='swiper-slide gallery-slide'>
							<a class='gallery-slide__item image-box' data-fancybox
								href="<?= esc_attr($slide['gallery_list_slide_link'] ? $slide['gallery_list_slide_link']['url'] : $slide['gallery_list_slide_file']['url']); ?>">

								<?php if ($slide['gallery_list_slide_type'] == 'video'): ?>
									<video src="<?= esc_attr($slide['gallery_list_slide_file']['url']); ?>" controls>
									</video>
								<?php else: ?>
									<img src="<?= esc_attr($slide['gallery_list_slide_file']['url']); ?>" alt="" />
								<?php endif; ?>

							</a>
						</div>
					<?php endforeach; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="gallery__btn-box swiper-btn-box">
			<button class="swiper-btn swiper-btn__prev gallery-swiper__btn gallery-swiper__btn-prev" type="button"
				aria-label="Назад" data-swiper-btn-prev=".gallery-swiper">
				<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M40 22H16M16 10L4 22L16 34" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round"
						stroke-linejoin="round" />
				</svg>
			</button>
			<button class="swiper-btn swiper-btn__next gallery-swiper__btn gallery-swiper__btn-next" type="button"
				aria-label="Вперёд" data-swiper-btn-next=".gallery-swiper">
				<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M4 22H28M28 10L40 22L28 34" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round"
						stroke-linejoin="round" />
				</svg>
			</button>
		</div>
	</div>
	<div class="section-bg__bg-box image-box">
		<img class="bg-decor hidden-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/gallery-bg-decor.webp" alt="" />
		<img class="bg-decor visible-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/gallery-bg-decor-mobile.webp" alt="" />
		<img class="hidden-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/gallery-bg.webp" alt="" />
	</div>
</section>
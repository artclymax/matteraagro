<?php
$page = 'option';

$title = get_field('direction_title', $page) ?? '';
$descr = get_field('direction_descr', $page) ?? '';
$list = get_field('direction_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="direction" id="direction">
		<div class="container direction__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="direction__list grid">
				<?php foreach ($list as $item): ?>
					<li class="direction__item direction-item">
						<div class="direction-item__icon">
							<?php echo wp_get_attachment_image(
								$item['direction_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['direction_list_image']['alt'] ?: $item['direction_list_title']
								)
							); ?>
						</div>
						<h3 class="direction-item__title title-4">
							<?php echo esc_html($item['direction_list_title']) ?>
						</h3>
						<div class="direction-item__descr descr">
							<?php echo wp_kses_post($item['direction_list_descr']) ?>
						</div>
						<?php if ($item['direction_list_btn']): ?>
							<a class="direction-item__btn btn btn--arrow"
								href="<?php echo esc_html($item['direction_list_btn']['url']) ?>">
								<span><?php echo esc_html($item['direction_list_btn']['title']) ?></span>
							</a>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
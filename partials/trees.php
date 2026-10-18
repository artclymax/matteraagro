<?php
$page = 'option';

$title = get_field('trees_title', $page) ?? '';
$descr = get_field('trees_descr', $page) ?? '';
$list = get_field('trees_list', $page) ?? '';
$note = get_field('trees_note', $page) ?? '';
?>
<?php if ($list): ?>
	<section class="section-bg trees" id="trees">
		<div class="container trees__container">
			<?php get_template_part('partials/section-header', null, [
				'title' => $title,
				'descr' => $descr,
			]); ?>
			<ul class="trees__list grid">
				<?php foreach ($list as $item): ?>
					<li class="trees__item trees-item">
						<div class="trees-item__image image-box">
							<?php echo wp_get_attachment_image(
								$item['trees_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['trees_list_image']['alt'] ?: $item['trees_list_title']
								)
							); ?>
						</div>
						<div class="trees-item__content">
							<h3 class="trees-item__title title-4">
								<?php echo esc_html($item['trees_list_title']) ?>
							</h3>
							<div class="trees-item__descr descr">
								<?php echo wp_kses_post($item['trees_list_descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php if ($note): ?>
				<div class="trees__note note-box box">
					<div class="note-box__content">
						<h3 class="note-box__title title-3">
							<?php echo esc_html($note['trees_note_title']) ?>
						</h3>
						<div class="note-box__descr descr">
							<?php echo wp_kses_post($note['trees_note_descr']) ?>
						</div>
					</div>
					<a class="note-box__btn btn" href="<?php echo esc_html($note['trees_note_link']['url']) ?>">
						<?php echo esc_html($note['trees_note_link']['title']) ?>
					</a>
				</div>
			<?php endif; ?>
		</div>
		<div class="section-bg__bg-box image-box">
			<img class="bg-decor hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/trees-bg-decor.webp" alt="" />
			<img class="bg-decor visible-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/trees-bg-decor-mobile.webp" alt="" />
			<img class="hidden-mobile" src="<?= get_template_directory_uri()
				?>/assets/images/trees-bg.webp" alt="" />
		</div>
	</section>
<?php endif; ?>
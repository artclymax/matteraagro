<?php
$page = 'option';

$title = get_field('why_us_title', $page) ?? '';
$descr = get_field('why_us_descr', $page) ?? '';
$list = get_field('why_us_list', $page) ?? '';

$title_process = get_field('why_us_title_process', $page) ?? '';
$list_process = get_field('why_us_list_process', $page) ?? '';

$numbers = get_field('why_us_numbers', $page) ?? '';

?>
<section class="section-bg why-us" id="why-us">
	<div class="container why-us__container">
		<?php get_template_part('partials/section-header', null, [
			'title' => $title,
			'descr' => $descr,
		]); ?>
		<div class="why-us__content">
			<ul class="why-us__list">
				<?php foreach ($list as $item): ?>
					<li class="why-us__item why-us-item">
						<div class="why-us-item__icon">
							<?php echo wp_get_attachment_image(
								$item['why_us_list_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['why_us_list_image']['alt'] ?: $item['why_us_list_title']
								)
							); ?>
						</div>
						<div class="why-us-item__info">
							<h4 class="why-us-item__title">
								<?php echo esc_html($item['why_us_list_title']) ?>
							</h4>
							<div class="why-us-item__descr descr">
								<?php echo wp_kses_post($item['why_us_list_descr']) ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="why-us__process why-us-process">
				<h3 class="why-us-process__title title-3">
					<?php echo esc_html($title_process) ?>
				</h3>
				<?php if ($list_process): ?>
					<ul class="why-us-process__list">
						<?php foreach ($list_process as $index => $item): ?>
							<li class="why-us-process__item why-us-process-item">
								<div class="why-us-process-item__icon">
									<?php echo wp_get_attachment_image(
										$item['why_us_list_process_image']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['why_us_list_process_image']['alt'] ?: $item['why_us_list_process_title']
										)
									); ?>
								</div>
								<div class="why-us-process-item__info">
									<span class="why-us-process-item__step">Шаг <?= ++$index ?></span>
									<h4 class="why-us-process-item__title">
										<?php echo esc_html($item['why_us_list_process_title']) ?>
									</h4>
									<div class="why-us-process-item__descr descr">
										<?php echo wp_kses_post($item['why_us_list_process_descr']) ?>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<?php if ($numbers): ?>
					<ul class="why-us-process__numbers why-us-process-numbers">
						<?php foreach ($numbers as $item): ?>
							<li class="why-us-process-numbers__item">
								<span
									class="why-us-process-numbers__number title-3"><?php echo esc_html($item['why_us_numbers_title']) ?></span>
								<span
									class="why-us-process-numbers__caption"><?php echo esc_html($item['why_us_numbers_text']) ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="section-bg__bg-box image-box">
		<img class="hidden-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/why-us-bg-big.jpg" alt="" />
	</div>
</section>
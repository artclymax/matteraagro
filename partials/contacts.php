<?php
$page = 'option';

$title = get_field('contacts_title', $page) ?? '';
$descr = get_field('contacts_descr', $page) ?? '';
$address = get_field('contacts_tab_address_list', $page) ?? '';
$emails = get_field('contacts_emails', $page) ?? '';

?>
<section class="section-bg contacts" id="contacts">
	<div class="container contacts__container">
		<?php get_template_part('partials/section-header', null, [
			'title' => $title,
			'descr' => $descr,
		]); ?>
		<div class="contacts__wrapper">
			<div class="contacts__content">
				<?php get_template_part('partials/contacts-phones'); ?>
				<ul class="contacts__list box">
					<?php if ($emails): ?>
						<li class="contacts__item contacts-item icon icon--center icon--email">
							<div class="contacts-item__wrapper">
								<ul class="contacts-item__list">
									<?php foreach ($emails as $item): ?>
										<li class="contacts-item__item">
											<a class="contacts-item__link"
												href="mailto:<?php echo esc_attr($item['contacts_emails_email']) ?>">
												<?php echo esc_html($item['contacts_emails_email']) ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</li>
					<?php endif; ?>
					<?php if ($address): ?>
						<?php foreach ($address as $item): ?>
							<li class="contacts__item contacts-item icon icon--address">
								<div class="contacts-item__wrapper">
									<h3 class="contacts-item__title">
										<?php echo esc_html($item['contacts_address_list_title']) ?>
									</h3>
									<address class="contacts-item__address descr">
										<?php echo wp_kses_post($item['contacts_address_list_descr']) ?>
									</address>
								</div>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="contacts__form">
				
				<?= do_shortcode('[contact-form-7 id="6adbb46" title="Контактная форма"]') ?>
			</div>
		</div>
	</div>
	<div class="section-bg__bg-box image-box">
		<img class="bg-decor visible-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/contacts-descor-bg-mobile.webp" alt="" />
		<img class="bg-decor hidden-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/contacts-descor-bg.webp" alt="" />
		<img class="hidden-mobile" src="<?= get_template_directory_uri()
			?>/assets/images/contacts-bg.webp" alt="" />
	</div>
</section>

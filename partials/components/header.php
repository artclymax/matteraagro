<?php
$page = 'option';
$descr = get_field('header_descr', $page) ?? get_bloginfo('name');
$btn = get_field('header_btn', $page) ?? [];
$phones = get_field('contacts_phones', $page) ?? '';
$socials = get_field('contacts_socials', $page) ?? '';
$emails = get_field('contacts_emails', $page) ?? '';
?>
<header class="header" data-auto-calc="header, height">
	<div class="header__container container">
		<div class="header__top hidden-tablet">
			<?php if ($phones): ?>
				<ul class="header__phones header-phones icon icon--phone-light">
					<?php foreach ($phones as $item): ?>
						<li class="header-phones__item">
							<a class="header-phones__link"
								href="tel:+<?= esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
								<?php echo esc_html($item['contacts_phones_phone']) ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<ul class="header__emails header-emails icon icon--email-light">
					<?php foreach ($emails as $item): ?>
						<li class="header-emails__item">
							<a class="header-emails__link" href="mailto:<?= esc_attr($item['contacts_emails_email']) ?>">
								<?php echo esc_html($item['contacts_emails_email']) ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<ul class="header__socials header-socials">
					<?php foreach ($socials as $item): ?>
						<li class="header-socials__item">
							<a class="header-socials__link" href="<?= esc_attr($item['contacts_socials_link']['url']) ?>"
								target="_blank">
								<?php if ($item['contacts_socials_image']): ?>
									<div class="header-socials__icon">
										<?php echo wp_get_attachment_image(
											$item['contacts_socials_image']['ID'],
											'large',
											false,
											array(
												'class' => 'img',
												'alt' => $item['contacts_socials_image']['alt'] ?: $item['contacts_socials_link']['title']
											)
										); ?>
									</div>
								<?php endif; ?>
								<span>
									<?php echo esc_html($item['contacts_socials_link']['title']) ?>
								</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="header__bottom">
			<div class="header__logo logo">
				<?php mx_logo(); ?>
				<div class="logo__descr descr">
					<?php echo wp_kses_post($descr) ?>
				</div>
			</div>
			<nav class="header__menu header-menu" style="--bg-mobile: url('<?= get_template_directory_uri() . '/assets/images/menu-mobile-bg.webp' ?>')">
				<button class="header-menu__close-btn menu-close-btn visible-tablet" type="button"
					aria-label="Закрыть меню">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round" />
					</svg>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'container' => false,
						'menu_class' => 'header-menu__list',
						'depth' => 1
					)
				); ?>
				<?php get_template_part('partials/contacts-phones', null, ['class' => 'visible-tablet']); ?>
				<?php if ($btn): ?>
					<a class="btn header-menu__btn" href="<?php echo esc_attr($btn['url']) ?>">
						<?php echo esc_html($btn['title']) ?>
					</a>
				<?php endif; ?>
			</nav>
			<?php if ($socials): ?>
				<ul class="header__socials header-socials visible-tablet">
					<?php foreach ($socials as $item): ?>
						<li class="header-socials__item">
							<a class="header-socials__link" href="<?= esc_attr($item['contacts_socials_link']['url']) ?>"
								target="_blank">
								<?php if ($item['contacts_socials_image']): ?>
									<div class="header-socials__icon">
										<?php echo wp_get_attachment_image(
											$item['contacts_socials_image']['ID'],
											'large',
											false,
											array(
												'class' => 'img',
												'alt' => $item['contacts_socials_image']['alt'] ?: $item['contacts_socials_link']['title']
											)
										); ?>
									</div>
								<?php endif; ?>
								<span>
									<?php echo esc_html($item['contacts_socials_link']['title']) ?>
								</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<a class="header__burger-btn phone-btn header-mobile-btn visible-tablet"
				href="tel:+<?= esc_attr(correct_phone($phones[0]['contacts_phones_phone'])) ?>">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M15.0504 4.99976C16.0272 5.19032 16.9248 5.66801 17.6285 6.37169C18.3322 7.07537 18.8099 7.97302 19.0004 8.94976M15.0504 0.999756C17.0797 1.22519 18.972 2.13393 20.4167 3.57676C21.8613 5.0196 22.7724 6.91077 23.0004 8.93976M22.0004 16.9198V19.9198C22.0016 20.1983 21.9445 20.4739 21.8329 20.7291C21.7214 20.9843 21.5577 21.2133 21.3525 21.4016C21.1473 21.5899 20.905 21.7332 20.6412 21.8225C20.3773 21.9117 20.0978 21.9448 19.8204 21.9198C16.7433 21.5854 13.7874 20.5339 11.1904 18.8498C8.77425 17.3144 6.72576 15.2659 5.19042 12.8498C3.5004 10.241 2.44866 7.27075 2.12042 4.17976C2.09543 3.90322 2.1283 3.62452 2.21692 3.36138C2.30555 3.09824 2.44799 2.85645 2.63519 2.65138C2.82238 2.44631 3.05023 2.28247 3.30421 2.17028C3.5582 2.05809 3.83276 2.00002 4.11042 1.99976H7.11042C7.59573 1.99498 8.06621 2.16683 8.43418 2.48329C8.80215 2.79974 9.0425 3.2392 9.11042 3.71976C9.23704 4.67982 9.47187 5.62248 9.81042 6.52976C9.94497 6.88768 9.97408 7.27667 9.89433 7.65064C9.81457 8.0246 9.62928 8.36787 9.36042 8.63976L8.09042 9.90976C9.51398 12.4133 11.5869 14.4862 14.0904 15.9098L15.3604 14.6398C15.6323 14.3709 15.9756 14.1856 16.3495 14.1058C16.7235 14.0261 17.1125 14.0552 17.4704 14.1898C18.3777 14.5283 19.3204 14.7631 20.2804 14.8898C20.7662 14.9583 21.2098 15.203 21.527 15.5773C21.8441 15.9515 22.0126 16.4293 22.0004 16.9198Z"
						stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</a>
			<button class="header__burger-btn burger-btn-icon header-mobile-btn visible-tablet" type="button">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3 12H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M3 6H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M3 18H21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
				</svg>

			</button>
		</div>
	</div>
</header>
<?php
$page = 'option';

$phones = get_field('contacts_phones', $page) ?? '';
$messengers = get_field('contacts_messengers', $page) ?? '';
$class = $args['class'] ?? '';
?>
<div class="contacts-phones icon icon--phone box <?= esc_attr($class); ?>">
	<div class="contacts-phones__wrapper">
		<?php if ($phones): ?>
			<ul class="contacts-phones__list">
				<?php foreach ($phones as $item): ?>
					<li class="contacts-phones__item">
						<a class="contacts-phones__link" href="tel:+<?= esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
							<?php echo esc_html($item['contacts_phones_phone']) ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<?php if ($messengers): ?>
			<ul class="contacts-phones__messengers contacts-messengers">
				<?php foreach ($messengers as $item): ?>
					<li class="contacts-messengers__item">
						<a class="contacts-messengers__link" href="<?php echo esc_attr($item['contacts_messengers_link']) ?>">
							<?php echo wp_get_attachment_image(
								$item['contacts_messengers_image']['ID'],
								'large',
								false,
								array(
									'class' => 'img',
									'alt' => $item['contacts_messengers_image']['alt'] ?: ''
								)
							); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>
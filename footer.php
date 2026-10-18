<?php
$form_radio = get_field('contacts_msg_list', 'option') ?? '';

function create_json_form_acf_repeater($list, $fields = [])
{
	if (empty($list) || !is_array($list)) {
		return json_encode([], JSON_UNESCAPED_UNICODE);
	}

	$result = [];

	foreach ($list as $row) {
		$item = [];

		foreach ($fields as $field) {
			if (!isset($row[$field])) {
				continue;
			}

			$value = $row[$field];

			// Если это изображение (ACF возвращает массив)
			if (is_array($value) && isset($value['url'])) {
				$item[$field] = [
					'url' => $value['url'] ?? '',
					'alt' => $value['alt'] ?? '',
					'title' => $value['title'] ?? '',
					'size' => isset($value['sizes']['medium']) ? $value['sizes']['medium'] : $value['url']
				];
			} else {
				$item[$field] = $value;
			}
		}

		if (!empty($item)) {
			$result[] = $item;
		}
	}

	return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
if ($form_radio): ?>
	<div class="form-custom-radio-data"
		data-form-custom-radio='<?= create_json_form_acf_repeater($form_radio, ['contacts_msg_list_image', 'contacts_msg_list_title']); ?>'>
	</div>
<?php endif; ?>
</main>
<?php get_template_part('partials/components/footer') ?>
<?php get_template_part('partials/components/modal-call') ?>
<?php get_template_part('partials/components/cookie-banner') ?>

<?php wp_footer(); ?>
</div>
</body>

</html>
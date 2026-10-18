<?php

create_options_page(
	'Модальные окна',
	'opt-modal'
);

create_fields(
	'Модальные окна',
	'opt-modal',
	[
		add_field_tab(
			'modal_tab_cp',
			'Запросить КП',
		),
		add_field_text(
			'modal_cp_title',
			'Заголовок',
		),
		add_field_tab(
			'modal_tab_call',
			'Получить консультацию',
		),
		add_field_text(
			'modal_call_title',
			'Заголовок',
		),
		add_field_tab(
			'modal_tab_calc',
			'Заказать похожий расчет',
		),
		add_field_text(
			'modal_calc_title',
			'Заголовок',
		),
	]
);
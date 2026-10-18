<?php

create_options_page(
	'Главная',
	'opt-home'
);

create_options_page(
	'Первый экран',
	'opt-home-hero',
	'opt-home',
);


create_fields(
	'Первый экран',
	'opt-home-hero',
	[
		add_field_text(
			'hero_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'hero_descr',
			'Описание',
		),
		add_field_image(
			'hero_image',
			'Фон',
		),
		add_field_link(
			'hero_btn',
			'Кнопка',
		),
		add_field_image(
			'hero_image_mobile',
			'Фон мобильный',
		),
	]
);

create_options_page(
	'Наши направления',
	'opt-direction',
	'opt-home',
);

create_fields(
	'Наши направления',
	'opt-direction',
	[
		add_field_text(
			'direction_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'direction_descr',
			'Описание',
		),
		add_field_repeater(
			'direction_list',
			'Список',
			[
				add_field_image(
					'direction_list_image',
					'Картинка',
				),
				add_field_text(
					'direction_list_title',
					'Заголовок',
				),
				add_field_redactor_wysiwyg(
					'direction_list_descr',
					'Описание',
				),
				add_field_link(
					'direction_list_btn',
					'Кнопка',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_direction_list_title',
			]
		),
	]
);


create_options_page(
	'Почему нам доверяют',
	'opt-why-us',
	'opt-home',
);

create_fields(
	'Почему нам доверяют',
	'opt-why-us',
	[
		add_field_text(
			'why_us_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'why_us_descr',
			'Описание',
		),
		add_field_repeater(
			'why_us_list',
			'Список',
			[
				add_field_image(
					'why_us_list_image',
					'Картинка',
				),
				add_field_text(
					'why_us_list_title',
					'Заголовок',
				),
				add_field_redactor_wysiwyg(
					'why_us_list_descr',
					'Описание',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_why_us_list_title',
			]
		),
		add_field_text(
			'why_us_title_process',
			'Заголовок процесс',
		),
		add_field_repeater(
			'why_us_list_process',
			'Как мы работаем',
			[
				add_field_image(
					'why_us_list_process_image',
					'Картинка',
				),
				add_field_text(
					'why_us_list_process_title',
					'Заголовок',
				),
				add_field_redactor_wysiwyg(
					'why_us_list_process_descr',
					'Описание',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_why_us_list_process_title',
			]
		),
		add_field_repeater(
			'why_us_numbers',
			'Числа',
			[
				add_field_text(
					'why_us_numbers_title',
					'Заголовок',
				),
				add_field_text(
					'why_us_numbers_text',
					'Описание',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_why_us_numbers_title',
			]
		),
	]
);

create_options_page(
	'Продукция',
	'opt-products',
	'opt-home',
);

create_fields(
	'Продукция',
	'opt-products',
	[
		add_field_text(
			'products_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'products_descr',
			'Описание',
		),
		add_field_repeater(
			'products_list',
			'Список',
			[
				add_field_image(
					'products_list_image',
					'Картинка',
				),
				add_field_text(
					'products_list_title',
					'Заголовок',
				),
				add_field_text(
					'products_list_label',
					'Калибр',
				),
				add_field_redactor_wysiwyg(
					'products_list_descr',
					'Описание',
				),
				add_field_link(
					'products_list_btn',
					'Кнопка',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_products_list_title',
			]
		),
		add_field_redactor_wysiwyg(
			'products_note',
			'Заметки',
		),
	]
);

create_options_page(
	'Замороженные ягоды',
	'opt-frost-berries',
	'opt-home',
);

create_fields(
	'Замороженные ягоды',
	'opt-frost-berries',
	[
		add_field_text(
			'frost_berries_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'frost_berries_descr',
			'Описание',
		),
		add_field_repeater(
			'frost_berries_list',
			'Список',
			[
				add_field_image(
					'frost_berries_list_image',
					'Картинка',
				),
				add_field_text(
					'frost_berries_list_title',
					'Заголовок',
				),
			]
		),
		add_field_link(
			'frost_berries_btn',
			'Кнопка',
		),
		add_field_image(
			'frost_berries_image',
			'Картинка',
		),
	]
);

create_options_page(
	'Саженцы голубики и туи',
	'opt-trees',
	'opt-home',
);

create_fields(
	'Саженцы голубики и туи',
	'opt-trees',
	[
		add_field_text(
			'trees_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'trees_descr',
			'Описание',
		),
		add_field_repeater(
			'trees_list',
			'Список',
			[
				add_field_image(
					'trees_list_image',
					'Картинка',
				),
				add_field_text(
					'trees_list_title',
					'Заголовок',
				),
				add_field_redactor_wysiwyg(
					'trees_list_descr',
					'Описание',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_trees_list_title',
			]
		),
		add_field_group(
			'trees_note',
			'Заметка',
			[
				add_field_text(
					'trees_note_title',
					'Заголовок',
				),
				add_field_redactor_wysiwyg(
					'trees_note_descr',
					'Описание',
				),
				add_field_link(
					'trees_note_link',
					'Ссылка',
				),
			]
		),
	]
);

create_options_page(
	'Хранение в холодильно-морозильных камерах',
	'opt-frost',
	'opt-home',
);

create_fields(
	'Хранение в холодильно-морозильных камерах',
	'opt-frost',
	[
		add_field_text(
			'frost_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'frost_descr',
			'Описание',
		),
		add_field_repeater(
			'frost_list',
			'Список',
			[
				add_field_image(
					'frost_list_image',
					'Картинка',
				),
				add_field_text(
					'frost_list_title',
					'Заголовок',
				),
				add_field_redactor_wysiwyg(
					'frost_list_descr',
					'Описание',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_frost_list_title',
			]
		),
		add_field_image(
			'frost_image',
			'Картинка',
		),
	]
);

create_options_page(
	'Фото и видео',
	'opt-gallery',
	'opt-home',
);

create_fields(
	'Фото и видео',
	'opt-gallery',
	[
		add_field_text(
			'gallery_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'gallery_descr',
			'Описание',
		),
		add_field_repeater(
			'gallery_list',
			'Слайды',
			[
				add_field_group(
					'gallery_list_slide_big',
					'Слайд большой',
					[
						add_field_file(
							'gallery_list_slide_file',
							'Файл',
						),
						add_field_select(
							'gallery_list_slide_type',
							'Тип',
							[
								'img' => 'Картинка',
								'video' => 'Видео',
							]
						),
						add_field_link(
							'gallery_list_slide_link',
							'Ссылка (если необходима)'
						)
					]
				),
				add_field_group(
					'gallery_list_slide_2',
					'Слайд 2',
					[
						add_field_file(
							'gallery_list_slide_file',
							'Файл',
						),
						add_field_select(
							'gallery_list_slide_type',
							'Тип',
							[
								'img' => 'Картинка',
								'video' => 'Видео'
							]
						),
						add_field_link(
							'gallery_list_slide_link',
							'Ссылка (если тип ссылка)'
						)
					]
				),
				add_field_group(
					'gallery_list_slide_3',
					'Слайд 3',
					[
						add_field_file(
							'gallery_list_slide_file',
							'Файл',
						),
						add_field_select(
							'gallery_list_slide_type',
							'Тип',
							[
								'img' => 'Картинка',
								'video' => 'Видео'
							]
						),
						add_field_link(
							'gallery_list_slide_link',
							'Ссылка (если тип ссылка)'
						)
					]
				),
				add_field_group(
					'gallery_list_slide_4',
					'Слайд 4',
					[
						add_field_file(
							'gallery_list_slide_file',
							'Файл',
						),
						add_field_select(
							'gallery_list_slide_type',
							'Тип',
							[
								'img' => 'Картинка',
								'video' => 'Видео'
							]
						),
						add_field_link(
							'gallery_list_slide_link',
							'Ссылка (если тип ссылка)'
						)
					]
				),
				add_field_group(
					'gallery_list_slide_5',
					'Слайд 5',
					[
						add_field_file(
							'gallery_list_slide_file',
							'Файл',
						),
						add_field_select(
							'gallery_list_slide_type',
							'Тип',
							[
								'img' => 'Картинка',
								'video' => 'Видео'
							]
						),
						add_field_link(
							'gallery_list_slide_link',
							'Ссылка (если тип ссылка)'
						)
					]
				),
			]
		),
	]
);

create_options_page(
	'Часто задаваемые вопросы',
	'opt-faq',
	'opt-home',
);

create_fields(
	'Часто задаваемые вопросы',
	'opt-faq',
	[
		add_field_text(
			'faq_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'faq_descr',
			'Описание',
		),
		add_field_repeater(
			'faq_list',
			'Список',
			[
				add_field_text(
					'faq_list_title',
					'Вопрос',
				),
				add_field_redactor_wysiwyg(
					'faq_list_descr',
					'Ответ',
				),
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_faq_list_title',
			]
		),
	]
);


create_options_page(
	'Сертификаты',
	'opt-docs',
	'opt-home',
);

create_fields(
	'Сертификаты',
	'opt-docs',
	[
		add_field_text(
			'docs_title',
			'Заголовок',
		),
		add_field_redactor_wysiwyg(
			'docs_descr',
			'Описание',
		),
		add_field_repeater(
			'docs_list',
			'Список',
			[
				add_field_image(
					'docs_list_image',
					'Картинка',
				),
			],
		),
	]
);

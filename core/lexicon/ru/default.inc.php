<?php

$_tmp = [
    'menu_name' => 'mmxDating',
    'menu_desc' => 'Заготовка для создания нового mmx приложения',
    'actions' => [
        'create' => 'Создать',
        'edit' => 'Изменить',
        'submit' => 'Отправить',
        'cancel' => 'Отмена',
        'delete' => 'Удалить',
    ],
    'models' => [
        'event' => [
            'title_one' => 'Событие',
            'title_many' => 'События',
            'id' => 'Id',
            'title' => 'Название',
            'date_start' => 'Дата начала',
            'date_end' => 'Дата окончания',
            'active' => 'Активно',
            'created_at' => 'Создано',
            'updated_at' => 'Изменено',
        ],
        'request' => [
            'title_one' => 'Запрос',
            'title_many' => 'Запросы',
            'id' => 'Id',
            'name' => 'Имя',
            'event_id' => 'Событие',
            'phone' => 'Телефон',
            'email' => 'Email',
            'age' => 'Возраст',
            'sex' => 'Пол',
            'sex.man' => 'Мужчина',
            'sex.woman' => 'Женщина',
            'active' => 'Активно',
            'created_at' => 'Создано',
            'updated_at' => 'Изменено',
        ],
    ],
    'components' => [
        'no_data' => 'Нет данных для вывода',
        'no_results' => 'Результатов не найдено',
        'records' => 'Записей нет | {total} запись | {total} записи | {total} записей',
        'query' => 'Поиск...',
        'delete' => [
            'title' => 'Требуется подтверждение',
            'confirm' => 'Вы уверены, что хотите удалить эту запись?',
        ],
    ],
    'snippets' => [
        'nocss' => 'Не загружать собранный CSS',
    ],
    'errors' => [
        'item' => [
            'title_unique' => 'Заголовок предмета должен быть уникальным.',
        ],
    ],
];

/** @var array $_lang */
$_lang = array_merge($_lang, MMX\Dating\App::prepareLexicon($_tmp, MMX\Dating\App::NAMESPACE));

$_tmp = [
    'some-setting' => 'Какая-то настройка',
    'some-setting_desc' => 'Описание какой-то настройки',
];
$_lang = array_merge($_lang, MMX\Dating\App::prepareLexicon($_tmp, 'setting_' . MMX\Dating\App::NAMESPACE));

unset($_tmp);
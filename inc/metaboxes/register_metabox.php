<?php

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "wayup_";

    $meta_boxes[] = array(
        'id'         => 'teatimonial_metaboxes',
        'title'      => 'Данные для отзыва',
        'pages'      => array( 'testimonial', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
           array(
              'name'  => 'Социальная сеть',
              'desc' => 'Введите ссылку на соцсеть',
              'id' => $prefix . 'social_link',
              'type' => 'text',
           ),
            array(
              'name'  => 'Дата отзыва',
              'desc' => 'Введите дату отзыва',
              'id' => $prefix . 'testy_date',
              'type' => 'text_date',
           ),
        )
    );


     $meta_boxes[] = array(
        'id'         => 'service_metaboxes',
        'title'      => 'Данные для Сервиса',
        'pages'      => array( 'service', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
           array(
              'name'  => 'Стоимость',
              'desc' => 'Введите цену даной услуги',
              'id' => $prefix . 'service_cost',
              'type' => 'text',
           ),
            array(
              'name'  => 'Фоновое изображение',
              'desc' => 'Выберите фон',
              'id' => $prefix . 'service_icon',
              'type' => 'select',
              'options' => array(
              	array('name'=>'Стиль статистика', 'value'=>'stat'),
              	array('name'=>'Стиль идея', 'value'=>'idea'),
                array('name'=>'Стиль Интернет', 'value'=>'internet'),
                array('name'=>'Стиль технологии', 'value'=>'info'), 
                array('name'=>'Стиль Government', 'value'=>'busy'), 
                array('name'=>'Стиль Коммерческая практика', 'value'=>'target'), 
              )
           ),
           
        )
    );


    $meta_boxes[] = array(
        'id'         => 'order_metaboxes',
        'title'      => 'Данные для Страницы заказа',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-order.php'), ), // Specific post templates to display this metabox
        'fields' => array(
           array(
              'name'  => 'Шорткод формы',
              'desc' => 'Установите плагин для форм',
              'id' => $prefix . 'shortcode_order',
              'type' => 'text',
           ),
           
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_metaboxes',
        'title'      => 'Данные для Страницы контакты',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
           array(
              'name'  => 'Заголовок 1',
              'desc' => 'Заголовок для левой части',
              'id' => $prefix . 'contact_title_left',
              'std' => 'Как нас найти',
              'type' => 'text',
           ),
            array(
              'name'  => 'Заголовок 2',
              'desc' => 'Заголовок для правой части',
              'id' => $prefix . 'contact_title_right',
              'type' => 'text',
              'std' => 'Получите бесплатную консультацию уже сегодня',
           ),
          array(
              'name'  => 'Шорткод для Контактной формы',
              'desc' => 'Создайте новую форму и вставьте сюда шорткод',
              'id' => $prefix . 'contact_shortcode',
              'type' => 'text',
             
           ),
          array(
              'name'  => 'Адресс',
              'desc' => 'Укажите Ваш адрес',
              'id' => $prefix . 'contact_address',
              'type' => 'text',
             
           ),
           array(
              'name'  => 'Телефон 1',
              'desc' => 'Укажите Ваш телефон 1',
              'id' => $prefix . 'contact_phone1',
              'type' => 'text',
             
           ),
            array(
              'name'  => 'Телефон 2',
              'desc' => 'Укажите Ваш телефон 2',
              'id' => $prefix . 'contact_phone2',
              'type' => 'text',
             
           ),
             array(
              'name'  => 'Email',
              'desc' => 'Укажите Ваш Email',
              'id' => $prefix . 'contact_email',
              'type' => 'text',
             
           ),
              array(
              'name'  => 'График',
              'desc' => 'Укажите текст для рабочего графика',
              'id' => $prefix . 'contact_calendar',
              'type' => 'text',
              'std' => 'Мы работаем с 9:00 до 22:00 в рабочие дни',
           ),
           
        )
    );




	return $meta_boxes;
}
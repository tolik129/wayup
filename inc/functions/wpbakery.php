<?php 
//About Company Shortcode
if (class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_About_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
	vc_map( array(
		'name'   => esc_html__('О компании', 'wayup'),
		'base'   => 'wayup_about_module',
		'category' => esc_html__('Wayup', 'wayup'),
		'description' => esc_html__('Введите данные', 'wayup'),
		'show_settings_on_create' => true,
		'icon' => '',
		'weight' => -5,
		'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("Почему мы ...", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textarea",
               "heading" => esc_html__("Описание", "wayup"),
               "param_name" => "desc",
               "value" => '',
               "heading" => esc_html__("Введите описание", "wayup"),
           ),
           array(
               "type" => "attach_image",
               "heading" => esc_html__("Картинка модуля", "wayup"),
               "param_name" => "featured_image",
               "value" => '',
               "heading" => esc_html__("Загрузите картинку", "wayup"),
           ),
           array(
               "type" => "attach_image",
               "heading" => esc_html__("Фото подписи", "wayup"),
               "param_name" => "author",
               "value" => '',
               "heading" => esc_html__("Загрузите фото", "wayup"),
           ),
           array(
               "type" => "attach_image",
               "heading" => esc_html__("Фото подписи", "wayup"),
               "param_name" => "signature",
               "value" => '',
               "heading" => esc_html__("Загрузите фото", "wayup"),
           ),

           array(
               "type" => "textfield",
               "heading" => esc_html__("Цитата", "wayup"),
               "param_name" => "quote",
               "value" => esc_html__("Мы здесь, чтобы помочь вам построить и поддержать свою мечту.", "wayup"),
               "heading" => esc_html__("Введите описание", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Имя автора", "wayup"),
               "param_name" => "author_name",
               "value" => esc_html__("Дмитрий Львович", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Должность", "wayup"),
               "param_name" => "author_status",
               "value" => esc_html__("Директор компании", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
		)
	));
}


//Progress Company Shortcode
if (class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_Progress_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
	vc_map( array(
		'name'   => esc_html__('Прогресс Модуль', 'wayup'),
		'base'   => 'wayup_progress_module',
		'category' => esc_html__('Wayup', 'wayup'),
		'description' => esc_html__('Введите данные для модуля', 'wayup'),
		'show_settings_on_create' => true,
		'icon' => '',
		'weight' => -5,
		'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Заголовок 1", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Заголовок 2", "wayup"),
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 3", "wayup"),
               "param_name" => "title3",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Заголовок 3", "wayup"),
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 4", "wayup"),
               "param_name" => "title4",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Заголовок 4", "wayup"),
           ),


             array(
               "type" => "textfield",
               "heading" => esc_html__("Значение 1", "wayup"),
               "param_name" => "value1",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Значение 2", "wayup"),
               "param_name" => "value2",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Значение 3", "wayup"),
               "param_name" => "value3",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Значение 4", "wayup"),
               "param_name" => "value4",
               "value" => esc_html__("", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),

             array(
               "type" => "attach_image",
               "heading" => esc_html__("Фото для фона", "wayup"),
               "param_name" => "bg",
               "value" => '',
               "heading" => esc_html__("Загрузите фото", "wayup"),
           ),
          
		)
	));
}


//Contact Shortcode
if (class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_Contact_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
	vc_map( array(
		'name'   => esc_html__('Свяжитесь', 'wayup'),
		'base'   => 'wayup_contact_module',
		'category' => esc_html__('Wayup', 'wayup'),
		'description' => esc_html__('Введите данные для модуля', 'wayup'),
		'show_settings_on_create' => true,
		'icon' => '',
		'weight' => -5,
		'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок ", "wayup"),
               "param_name" => "title",
               "value" => esc_html__("", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Ссылка", "wayup"),
               "param_name" => "link",
               "value" => esc_html__("", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
		)
	));
}

//Ofice Shortcode
if (class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_Office_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
	vc_map( array(
		'name'   => esc_html__('Офисы', 'wayup'),
		'base'   => 'wayup_office_module',
		'category' => esc_html__('Wayup', 'wayup'),
		'description' => esc_html__('Введите данные для модуля', 'wayup'),
		'show_settings_on_create' => true,
		'icon' => '',
		'weight' => -5,
		'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("Наши офисы расположены по", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("всей России", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),


            array(
               "type" => "textfield",
               "heading" => esc_html__("Главный офис (адрес)", "wayup"),
               "param_name" => "office1",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Главный офис (фото)", "wayup"),
               "param_name" => "office1photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),

              array(
               "type" => "textfield",
               "heading" => esc_html__("Офис в Калининграде (адрес)", "wayup"),
               "param_name" => "office2",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Офис в Калининграде (фото)", "wayup"),
               "param_name" => "office2photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),

              array(
               "type" => "textfield",
               "heading" => esc_html__("Офис в Казани (адрес)", "wayup"),
               "param_name" => "office3",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Офис в Казани (фото)", "wayup"),
               "param_name" => "office3photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),

              array(
               "type" => "textfield",
               "heading" => esc_html__("Офис в Тюмени (адрес)", "wayup"),
               "param_name" => "office4",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Офис в Тюмени (фото)", "wayup"),
               "param_name" => "office4photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),
              array(
               "type" => "textfield",
               "heading" => esc_html__("Офис в Благовещенске (адрес)", "wayup"),
               "param_name" => "office5",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Офис в Благовещенске (фото)", "wayup"),
               "param_name" => "office5photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),
              array(
               "type" => "textfield",
               "heading" => esc_html__("Офис в Норильске (адрес)", "wayup"),
               "param_name" => "office6",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Офис в Норильске (фото)", "wayup"),
               "param_name" => "office6photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),
             array(
               "type" => "textfield",
               "heading" => esc_html__("Офис в Владивостоке (адрес)", "wayup"),
               "param_name" => "office7",
               "value" => esc_html__("г. Москва, ул. Бутырская, 62 Z-Plaza, 5-й этаж", "wayup"),
               "description" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "attach_image",
               "heading" => esc_html__("Офис в Владивостоке (фото)", "wayup"),
               "param_name" => "office7photo",
               "value" => '',
               "description" => esc_html__("Введите текст", "wayup"),
           ),
		)
	));
}


//Team Slider Shortcode
if (class_exists("WPBakeryShortCodesContainer")){
	class WPBakeryShortCode_Wayup_Team_Slider extends WPBakeryShortCodesContainer{}
}
if(function_exists('vc_map')){
	vc_map( array(
        "name"  => 'Наша команда',
        "base"  => "wayup_team_slider",
        "as_parent" => array('only' => 'wayup_team_slider_item'),
        'description' => 'Описание для модуля',
        "content_element" => true,
        "category" => 'Wayup',
        "icon" => '',
        "show_settings_on_create" => false,
        "params" => array(),
        "js_view" => 'VcColumnView'
	));
}
if(class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_Team_Slider_Item extends WPBakeryShortCode {}
}
if(function_exists('vc_map')) {
	vc_map(array(
      'name' => esc_html__('Член команды', 'wayup'),
      'base' => 'wayup_team_slider_item',
      'category' => 'Wayup',
      'description' => esc_html__('test', 'wayup'),
      'show_settings_on_create' => true,
      "as_child" => array('only' => 'wayup_team_slider'),
      'icon' => '',
      'weight' => -5,
      'params' => array(
          array(
                "type" => "attach_image",
                "heading" => 'Фото человека',
                "param_name" => "photo",
                "description" => esc_html__("select image", "wayup")
          ),
          array(
                "type" => "textfield",
                "heading" => esc_html__("Имя", "wayup"),
                "param_name" => "name",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите имя'
          ),
          array(
                "type" => "textfield",
                "heading" => esc_html__("Должность", "wayup"),
                "param_name" => "status",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите должность'
          ),
           array(
                "type" => "textarea",
                "heading" => esc_html__("Описание", "wayup"),
                "param_name" => "desc",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите описание'
          ),

           array(
                "type" => "textfield",
                "heading" => esc_html__("ВК линк", "wayup"),
                "param_name" => "vklink",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите '
          ),
           array(
                "type" => "textfield",
                "heading" => esc_html__("ФБ линк", "wayup"),
                "param_name" => "fblink",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите '
          ),
           array(
                "type" => "textfield",
                "heading" => esc_html__("TW линк", "wayup"),
                "param_name" => "twlink",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите '
          ),
           array(
                "type" => "textfield",
                "heading" => esc_html__("INST линк", "wayup"),
                "param_name" => "instlink",
                "description" => esc_html__("select image", "wayup"),
                "value" => '',
                "description" => 'Введите '
          ),
      )
	));
}

//Help Shortcode
if (class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_Help_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
	vc_map( array(
		'name'   => esc_html__('Блок помощи', 'wayup'),
		'base'   => 'wayup_help_module',
		'category' => esc_html__('Wayup', 'wayup'),
		'description' => esc_html__('Введите данные', 'wayup'),
		'show_settings_on_create' => true,
		'icon' => '',
		'weight' => -5,
		'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("Кому мы", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("ПОМОГАЕМ", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "textarea",
               "heading" => esc_html__("Описание", "wayup"),
               "param_name" => "desc",
               "value" => esc_html__("Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
          array(
               "type" => "textfield",
               "heading" => esc_html__("Ссылка", "wayup"),
               "param_name" => "link",
               "value" => esc_html__("#", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Блок 1 заголовок", "wayup"),
               "param_name" => "block1title",
               "value" => esc_html__("Стартапам", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "textarea",
               "heading" => esc_html__("Блок 1 Описание", "wayup"),
               "param_name" => "block1desc",
               "value" => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы помочь вам расти',
               "heading" => esc_html__("Введите текст", "wayup"),
           ),

            array(
               "type" => "textfield",
               "heading" => esc_html__("Блок 2 заголовок", "wayup"),
               "param_name" => "block2title",
               "value" => esc_html__("Фрилансеру", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
             array(
               "type" => "textarea",
               "heading" => esc_html__("Блок 2 Описание", "wayup"),
               "param_name" => "block2desc",
               "value" => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы помочь вам расти',
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
             array(
               "type" => "textfield",
               "heading" => esc_html__("Блок 3 заголовок", "wayup"),
               "param_name" => "block3title",
               "value" => esc_html__("Малому бизнесу", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
              array(
               "type" => "textarea",
               "heading" => esc_html__("Блок 3 Описание", "wayup"),
               "param_name" => "block3desc",
               "value" => 'Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические услуги, чтобы помочь вам расти',
               "heading" => esc_html__("Введите текст", "wayup"),
           ), 
		)
	));
}

//Why we Shortcode
if (class_exists("WPBakeryShortCode")){
	class WPBakeryShortCode_Wayup_Why_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
	vc_map( array(
		'name'   => esc_html__('Блок Почему мы', 'wayup'),
		'base'   => 'wayup_why_module',
		'category' => esc_html__('Wayup', 'wayup'),
		'description' => esc_html__('Введите данные', 'wayup'),
		'show_settings_on_create' => true,
		'icon' => '',
		'weight' => -5,
		'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("Почему мы –", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("ПРАВИЛЬНЫЙ ВЫБОР ДЛЯ ВАС", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
           array(
               "type" => "textarea_html",
               "heading" => esc_html__("Описание", "wayup"),
               "param_name" => "content",
               "value" => '',
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Ссылка", "wayup"),
               "param_name" => "link",
               "value" => esc_html__("#", "wayup"),
               "heading" => esc_html__("Введите текст", "wayup"),
           ),
            
          
		)
	));
}


//Features Shortcode
if (class_exists("WPBakeryShortCode")){
  class WPBakeryShortCode_Wayup_Features_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
  vc_map( array(
    'name'   => esc_html__('Блок Кейсы', 'wayup'),
    'base'   => 'wayup_features_module',
    'category' => esc_html__('Wayup', 'wayup'),
    'description' => esc_html__('Введите данные', 'wayup'),
    'show_settings_on_create' => true,
    'icon' => '',
    'weight' => -5,
    'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("Наши", "wayup"),
               "description" => esc_html__("Введите текст", "wayup")
              
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("КЕЙСЫ", "wayup"),
                "description" => esc_html__("Введите текст", "wayup")
              
           ),
             array(
               "type" => "textarea",
               "heading" => esc_html__("Описание", "wayup"),
               "param_name" => "desc",
               "value" => esc_html__("Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC", "wayup"),
               "description" => esc_html__("Введите текст", "wayup")
           ),
          
    )
  ));
}


//Testimonials Shortcode
if (class_exists("WPBakeryShortCode")){
  class WPBakeryShortCode_Wayup_Testimonials_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
  vc_map( array(
    'name'   => esc_html__('Блок Отзывы', 'wayup'),
    'base'   => 'wayup_testimonials_module',
    'category' => esc_html__('Wayup', 'wayup'),
    'description' => esc_html__('Введите данные', 'wayup'),
    'show_settings_on_create' => true,
    'icon' => '',
    'weight' => -5,
    'params' => array(
           array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 1", "wayup"),
               "param_name" => "title1",
               "value" => esc_html__("За нас говорят", "wayup"),
               "description" => esc_html__("Введите текст", "wayup")
              
           ),
            array(
               "type" => "textfield",
               "heading" => esc_html__("Заголовок 2", "wayup"),
               "param_name" => "title2",
               "value" => esc_html__("НАШИ КЛИЕНТЫ", "wayup"),
                "description" => esc_html__("Введите текст", "wayup")
              
           ),
            
          
    )
  ));
}

//Services Shortcode
if (class_exists("WPBakeryShortCode")){
  class WPBakeryShortCode_Wayup_Services_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
  vc_map( array(
    'name'   => esc_html__('Блок Услуги', 'wayup'),
    'base'   => 'wayup_services_module',
    'category' => esc_html__('Wayup', 'wayup'),
    'description' => esc_html__('Введите данные', 'wayup'),
    'show_settings_on_create' => true,
    'icon' => '',
    'weight' => -5,
    'params' => array()
  ));
}


//News Shortcode
if (class_exists("WPBakeryShortCode")){
  class WPBakeryShortCode_Wayup_News_Module extends WPBakeryShortCode{}
}
if(function_exists('vc_map')) {
  vc_map( array(
    'name'   => esc_html__('Блок Новости', 'wayup'),
    'base'   => 'wayup_news_module',
    'category' => esc_html__('Wayup', 'wayup'),
    'description' => esc_html__('Введите данные', 'wayup'),
    'show_settings_on_create' => true,
    'icon' => '',
    'weight' => -5,
    'params' => array()
  ));
}
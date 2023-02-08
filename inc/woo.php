<?php
if (in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins')))) {

	//Интеграция вукомерс шаблона
	function wayup_add_woocommerce_support(){
		add_theme_support('woocommerce');
	}
	add_action( 'after_setup_theme', 'wayup_add_woocommerce_support' );

	//Убираем старый сайдбар и заменяем его на свой
	remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar',10);

	add_action('woocommerce_sidebar',function(){
		get_sidebar('woocommerce');
	});


    //Удалили описание
	remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description',10);
	remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description',10);

	//переносим уведомление выше
	remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count',20);
	add_action('woocommerce_archive_description','woocommerce_result_count',10);

	//Удаляем хлебные крошки
	remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb',20);

	//Перенос сотрировки страницы
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30);
}
<?php
if (in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins')))) {

	//Интеграция вукомерс шаблона
	function wayup_add_woocommerce_support(){
		add_theme_support('woocommerce');
	}
	add_action( 'after_setup_theme', 'wayup_add_woocommerce_support' );

	function wayup_wrapforimage_open(){
		echo '<div class="products__img">';
	}
	function wayup_wrapforimage_close(){
		echo '</div>';
	}

	function wayup_product_data(){ 
      global $product;
      $rating_count = $product->get_rating_count();
      $average = $product->get_average_rating();
	?>


    <div class="products__detail">
			<a href="<?php the_permalink(); ?>" class="products__name"><?php
              if(get_post_meta(get_the_ID(),'wayup_short_title',true)){
                 echo get_post_meta(get_the_ID(),'wayup_short_title',true);
              } else {
              	  echo substr(get_the_title(), 0, 20). '..';
              } ?>
			</a>
		<div class="price">
			<?php echo $product->get_price_html(); ?>
		</div>
		<?php echo wc_get_rating_html( $average,  $rating_count); ?>
		
	</div>


	<?php }

	function wayup_show_status(){
		if(get_post_meta(get_the_ID(),'wayup_sale_button_title',true)){
			$color = '';
			if(get_post_meta(get_the_ID(),'wayup_sale_button_color',true)){
				$color = 'style="background:'.get_post_meta(get_the_ID(),'wayup_sale_button_color',true).'"';
			}
			echo '<span class="new-item" '.$color.'>'.get_post_meta(get_the_ID(),'wayup_sale_button_title',true).'</span>';
		}
		
		
	}



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

    //Карточка Продукта
    add_action('woocommerce_before_shop_loop_item','wayup_wrapforimage_open', 5);
    add_action('woocommerce_before_shop_loop_item_title','wayup_wrapforimage_close', 20);
    add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_link_close', 15);
    remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close', 5);

    
    add_action('woocommerce_shop_loop_item_title',function(){
		echo '<div class="products__bottom">';
	},5);
    add_action('woocommerce_after_shop_loop_item',function(){
		echo '</div>';
	},15); 


    remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
    add_action('woocommerce_shop_loop_item_title','wayup_product_data',10);

    remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
    remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);

    add_action('woocommerce_before_shop_loop_item_title','wayup_show_status',9);




}
<?php



/* CSSの読み込み
---------------------------------------------------------- */
function register_stylesheet() { //読み込むCSSを登録する
	wp_enqueue_style( 'destyle', get_template_directory_uri() . '/css/destyle.css', array(), '1.0.0', 'all' );
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
	wp_register_style('base_style', get_template_directory_uri().'/css/base_style.css');
	wp_register_style('header', get_template_directory_uri().'/css/header.css');
	wp_register_style('footer', get_template_directory_uri().'/css/footer.css');
	//wp_register_style('sliders', get_template_directory_uri().'/css/sliders/sliders.css');
}
function add_stylesheet() { //登録したCSSを以下の順番で読み込む
	register_stylesheet();
	wp_enqueue_style('destyle', '', array(), '1.0', false);
	wp_enqueue_style('fontawesome', '', array(), '5.15.4', false);
	wp_enqueue_style('base_style', '', array(), '1.0', false);
	wp_enqueue_style('header', '', array(), '1.0', false);
	wp_enqueue_style('footer', '', array(), '1.0', false);
	//if( is_home()){wp_enqueue_style('sliders', '', array(), '1.0', false);}
}
add_action('wp_enqueue_scripts', 'add_stylesheet');


/* スクリプトの読み込み
---------------------------------------------------------- */
function register_script(){ //読み込むJSを登録する
	//wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
	//wp_register_script('swiper-bundle.min', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js');
	//wp_register_script('slider_threeview', get_template_directory_uri().'/js/sliders/slider_threeview.js');
}
function add_script(){ //登録したJSを以下の順番で読み込む
	register_script();
	/* wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true); */
	//if( is_home()){wp_enqueue_script('swiper-bundle.min', '', array(), '1.0', true);}
	//f( is_home()){wp_enqueue_script('swiper-bundle.min', '', array(), '1.0', true);}
	//if( is_home()){wp_enqueue_script('slider_threeview', '', array(), '1.0', true);}
}
add_action('wp_print_scripts','add_script');




?>
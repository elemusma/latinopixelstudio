<?php

function latino_pixel_studio_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri() );


wp_enqueue_style('layout', get_theme_file_uri('/css/sections/layout.css'));
// fonts
wp_enqueue_style('relation-two', '//use.typekit.net/vgh8cpz.css');
wp_enqueue_style('fonts', get_theme_file_uri('/css/elements/fonts.css'));
wp_enqueue_style('body', get_theme_file_uri('/css/sections/body.css'));
// wp_enqueue_style('new-nav', get_theme_file_uri('/css/sections/new-nav.css'));
wp_enqueue_style('nav', get_theme_file_uri('/css/sections/nav.css'));
wp_enqueue_style('social-icons', get_theme_file_uri('/css/sections/social-icons.css'));
wp_enqueue_style('home', get_theme_file_uri('/css/sections/home.css'));

if(is_page_template('templates/portfolio.php')){
	wp_enqueue_style('portfolio-css', get_theme_file_uri('/css/sections/portfolio.css'));
}

if(is_page_template('templates/about.php')){
	wp_enqueue_style('about-custom-css', get_theme_file_uri('/css/sections/about.css'));
	// wp_enqueue_style('skills-css', get_theme_file_uri('/css/sections/skills.css'));
}

if(is_page_template('templates/password-generator.php')){
	wp_enqueue_style('password-generator-css', get_theme_file_uri('/css/sections/password-generator.css'));
	wp_enqueue_script('password-generator-js', get_theme_file_uri('/js/password-generator.js'));
}

	wp_enqueue_style('blog', get_theme_file_uri('/css/sections/blog.css'));



wp_enqueue_style('lato', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
	
wp_enqueue_style('open-sans', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');

}
add_action('wp_enqueue_scripts', 'latino_pixel_studio_stylesheets');


// for footer
function latino_pixel_studio_stylesheets_footer() {

	wp_enqueue_style('hero', get_theme_file_uri('/css/sections/hero.css'));
	// if (is_front_page()){
	// 	wp_enqueue_style('home', get_theme_file_uri('/css/sections/home.css'));
	// }
		// wp_enqueue_style('woocommerce-custom', get_theme_file_uri('/css/sections/woocommerce.css'));
	
	// if(is_page_template('templates/contact.php')){
		wp_enqueue_style('contact', get_theme_file_uri('/css/sections/contact.css'));
	// }
	wp_enqueue_style('img', get_theme_file_uri('/css/elements/img.css'));


	// wp_enqueue_style('photo-gallery', get_theme_file_uri('/css/sections/photo-gallery.css'));
	wp_enqueue_style('popup', get_theme_file_uri('/css/sections/popup.css'));
	

	wp_enqueue_style('footer', get_theme_file_uri('/css/sections/footer.css'));
	// wp_enqueue_style('sidebar', get_theme_file_uri('/css/sections/sidebar.css'));
	wp_enqueue_style('btn', get_theme_file_uri('/css/elements/btn.css'));

	// if(is_single()){
	// 	wp_enqueue_style('single', get_theme_file_uri('/css/sections/single.css'));
	// }


	// wp_enqueue_style('style-footer', get_theme_file_uri('/css/style-footer.css'));
	// owl carousel
	// wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
	// wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
	// wp_enqueue_style('lightbox-css', get_theme_file_uri('/lightbox/lightbox.min.css'));
	// wp_enqueue_script('font-awesome', '//use.fontawesome.com/fff80caa08.js');

	// owl carousel
	// wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));


	if(!is_front_page() && !is_single()){
		wp_enqueue_script('anime-js', '//cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');
		wp_enqueue_script('anime-custom-js', get_theme_file_uri('/js/anime.js'));
	}


	// wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
	// wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));
	// wp_enqueue_script('lightbox-min-js', get_theme_file_uri('/lightbox/lightbox.min.js'));
	// wp_enqueue_script('lightbox-js', get_theme_file_uri('/lightbox/lightbox.js'));
    // aos
    // wp_enqueue_script('aos-js', get_theme_file_uri('/aos/aos.js'));
    // wp_enqueue_script('aos-custom-js', get_theme_file_uri('/aos/aos-custom.js'));
    // wp_enqueue_style('aos-css', get_theme_file_uri('/aos/aos.css'));
	// anime
    // wp_enqueue_script('anime-min-js', get_theme_file_uri('/js/anime.min.js'));
    // wp_enqueue_script('anime-js', get_theme_file_uri('/js/anime.js'));
    // general
	wp_enqueue_script('nav-js', get_theme_file_uri('/js/nav.js'));
    wp_enqueue_script('popup-js', get_theme_file_uri('/js/popup.js'));

	if(is_page_template('templates/tools-dividend-yield-calculator.php')){
		wp_enqueue_style('tools-dividend-yield-calculator-css', get_theme_file_uri('/css/sections/tools-dividend-yield-calculator.css'));
		wp_enqueue_script('tools-dividend-yield-calculator-js', get_theme_file_uri('/js/tools-dividend-yield-calculator.js'));
	}

	// if(is_front_page()){
	// 	wp_enqueue_script('home-jquery-js', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	// 	wp_enqueue_script('home-js', get_theme_file_uri('/js/home.js'));
	// }

	if(is_single() || is_page(16)){
		wp_enqueue_script('blog-js', get_theme_file_uri('/js/blog.js'));
	}

	
}
	
add_action('get_footer', 'latino_pixel_studio_stylesheets_footer');

// loads enqueued javascript files deferred
function mind_defer_scripts( $tag, $handle, $src ) {
	$defer = array( 
	  'jquery-min',
	  'owl-carousel',
	  'owl-carousel-custom',
	  'lightbox-min-js',
	  'lightbox-js',
	  'aos-js',
	  'aos-custom-js',
	  'nav-js',
	  'blog-js',
	  'contact-js'
	);
	if ( in_array( $handle, $defer ) ) {
	   return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	  
	  return $tag;
  } 
  add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );





function latino_pixel_studio_menus() {
 register_nav_menus( array(
   'primary' => __( 'Primary Menu' )));
register_nav_menus( array(
'secondary' => __( 'Secondary Menu' )));
 register_nav_menu('new-menu',__( 'Footer Links' ));
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'latino_pixel_studio_menus');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
}

// add_action('after_setup_theme',function() {
//     add_theme_support('woocommerce');
// });
// add_theme_support('wc-product-gallery-zoom');
// add_theme_support('wc-product-gallery-lightbox');
// add_theme_support('wc-product-gallery-slider');

// if(class_exists('WooCommerce')){
//     require get_template_directory() . '/inc/wc-modifications.php';
// }

// code from Jeff Inho to enforce 'defer' and remove 'async' for Hubspot specifically
// function brownsurfing_remove_async_attribute($tag, $handle) {
//     $arrayhandles=    ['hs-script-loader'];
//     if ( !in_array($handle,$arrayhandles) ) {
//         return $tag;
//     }
//     return str_replace( 'async', '', $tag );
// }
// add_filter('script_loader_tag', 'brownsurfing_remove_async_attribute', 11, 2);

// makes all javascript defer, just add the handle
// the handle of a javascript script is the ID
function add_defer_attribute($tag, $handle) {
    $arrayhandles=    ['handle',
        'handle',
    ];
    if ( !in_array($handle,$arrayhandles) ) {
        return $tag;
    }
    return str_replace( ' src', ' defer src', $tag );
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);



function smartwp_remove_wp_block_library_css(){

	if(!is_single()) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
	}
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// add_filter('show_admin_bar', '__return_false');
 
 
// add_filter('comment_form_default_fields', 'remove_website_field_from_comment_form');
function remove_website_field_from_comment_form($fields)
{
    if (isset($fields['url'])) {
        unset($fields['url']);
    }
    return $fields;
}

/*Base URL shorcode*/
add_shortcode( 'base_url', 'baseurl_shortcode' );
function baseurl_shortcode( $atts ) {

    return site_url();
	// [base_url]

}

function disable_email_and_website_fields($fields) {
    unset($fields['author']); // Remove the email field
    unset($fields['email']); // Remove the email field
    unset($fields['url']);   // Remove the website URL field
    return $fields;
}

add_filter('comment_form_default_fields', 'disable_email_and_website_fields');

function spacer_shortcode( $atts, $content = null ) {

	$a = shortcode_atts( array(

		'class' => '',

		'style' => ''

	), $atts );

	return '<div class="spacer ' . esc_attr($a['class']) . '" style="' . esc_attr($a['style']) . '"></div>';

	// [spacer class="" style=""]
}

add_shortcode( 'spacer', 'spacer_shortcode' );

?>
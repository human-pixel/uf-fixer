<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array(
"name" => "main", 
"title" => "Main Area", 
"type" => "wide", 
"scope" => "local", 
"container" => "main", 
"position" => 10, 
"allow_sidebar" => true
),
			array(
"row" => 185, 
"background_type" => "image", 
"background_color" => "rgba(94,191,107,1)", 
"nav_region" => "", 
"background_style" => "fixed", 
"background_position_y" => "84", 
"background_position_x" => "63", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-404_page/404-background.png", 
"background_image_ratio" => 0.43, 
"background_repeat" => "no-repeat", 
"background_position" => "63% 84%", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$main->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "40", 
"margin_bottom" => "0", 
"id" => "module-1412691061180-1949", 
"rows" => 103, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1>Page not<br>
available but<br>
Mr Fixer<br>
is.</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412691061176-1774", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 103, 
	"theme_style" => "h1-white-heading"
	), 
"wrapper_id" => "wrapper-1412692347986-1728", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 7
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$main->add_element("Button", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1412692676377-1786", 
"rows" => 14, 
"options" => array(
	"content" => "Take me to Mr Fixer", 
	"href" => "#", 
	"align" => "center", 
	"type" => "ButtonModel", 
	"view_class" => "ButtonView", 
	"element_id" => "button-object-1412692676375-1820", 
	"class" => "c24 upfront-button", 
	"has_settings" => 1, 
	"id_slug" => "button", 
	"currentpreset" => "white-borders-button", 
	"theme_style" => "white-borders-button-extra", 
	"is_edited" => true, 
	"row" => 14
	), 
"wrapper_id" => "wrapper-1412693265986-1503", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 6
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');


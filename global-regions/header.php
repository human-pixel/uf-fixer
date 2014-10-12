<?php
$header = upfront_create_region(
			array(
"name" => "header", 
"title" => "Header", 
"type" => "wide", 
"scope" => "global", 
"container" => "header", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 24, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(255,255,255,0)"
)
			);

$header->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1405520755986-1686", 
"rows" => 4, 
"options" => array(
	"src" => "http://localhost/fixer2/wp-content/uploads/2014/09/fixer-logo-120x30-2906.png", 
	"srcFull" => "http://localhost/fixer2/wp-content/uploads/2014/09/fixer-logo.png", 
	"srcOriginal" => "http://localhost/fixer2/wp-content/uploads/2014/09/fixer-logo.png", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => "entry", 
	"image_link" => "http://localhost/fixer2/gallery-3/", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => "below_image", 
	"caption_alignment" => "top", 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 120, 
		"height" => 30
		), 
	"fullSize" => array(
		"width" => 120, 
		"height" => 30
		), 
	"position" => array(
		"top" => 0, 
		"left" => -15
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 150, 
		"height" => 30
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "9", 
	"align" => "center", 
	"stretch" => false, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1405520755973-1481", 
	"row" => -2, 
	"theme_style" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405520755986-1686", 
"new_line" => "true"
));

$header->add_element("Unewnavigation", array(
"columns" => "14", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1405520756070-1345", 
"rows" => 11, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 4, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Service", 
			"menu-item-url" => "#service", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "4", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 5, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Get a Quote", 
			"menu-item-url" => "#getquote", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "5", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 6, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Blog", 
			"menu-item-url" => "#blog", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "6", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 7, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "About", 
			"menu-item-url" => "#about", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "7", 
			"menu-item-target" => "", 
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 8, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Coverage Area", 
			"menu-item-url" => "#coveragearea", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "8", 
			"menu-item-target" => "", 
			"menu-item-position" => 5
			)), 
	"menu_style" => "horizontal", 
	"menu_alignment" => "left", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1405520756062-1726", 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "fixer-menu", 
	"is_floating" => array(), 
	"theme_style" => "_default", 
	"anchor" => "", 
	"row" => 5, 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"breakpoint" => array(
		"desktop" => array(
			"burger_alignment" => "left", 
			"burger_over" => "over", 
			"width" => 1080
			)
		)
	), 
"wrapper_id" => "wrapper-1405520756070-1345"
));

$header->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1405520755970-1045", 
"rows" => 18, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\">One call does it all</p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;</span>1300 FIXER</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405520755969-1764", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "header-contact-text", 
	"anchor" => "", 
	"row" => 12
	), 
"wrapper_id" => "wrapper-1405520755970-1045"
));

$regions->add($header);

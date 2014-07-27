<?php
$lower_footer = upfront_create_region(
        array(
"name" => "lower_footer",
"title" => "Lower foter",
"type" => "wide",
"scope" => "local"
),
        array(
"row" => 9,
"background_type" => "color",
"nav_region" => "",
"background_color" => "rgba(44,44,44,1)",
"expand_lock" => false
)
        );
$lower_footer->add_element("Uimage", array(
"columns" => "3",
"margin_left" => "0",
"margin_top" => "0",
"id" => "module-1406217409056-1339",
"rows" => 10,
"options" => array(
  "src" => get_stylesheet_directory_uri() . '/images/archive-home/logo-white-92x20-3728.png',
  "srcFull" => get_stylesheet_directory_uri() . '/images/archive-home/logo-white.png',
  "srcOriginal" => get_stylesheet_directory_uri() . '/images/archive-home/logo-white.png',
  "image_title" => "",
  "alternative_text" => "",
  "when_clicked" => false,
  "image_link" => "",
  "include_image_caption" => false,
  "image_caption" => "My awesome image caption",
  "caption_position" => "below_image",
  "caption_alignment" => "top",
  "caption_trigger" => "always_show",
  "image_status" => "ok",
  "size" => array(
    "width" => 92,
    "height" => 20
    ),
  "fullSize" => array(
    "width" => 92,
    "height" => 21
    ),
  "position" => array(
    "top" => 0.6666259765625,
    "left" => 0
    ),
  "marginTop" => -0.66668701171875,
  "element_size" => array(
    "width" => 105,
    "height" => 21
    ),
  "rotation" => 0,
  "color" => "#ffffff",
  "background" => "#000000",
  "captionBackground" => "0",
  "image_id" => "3051",
  "align" => "left",
  "stretch" => false,
  "vstretch" => false,
  "quick_swap" => false,
  "gifImage" => 0,
  "type" => "UimageModel",
  "view_class" => "UimageView",
  "has_settings" => 1,
  "class" => "upfront-image",
  "id_slug" => "image",
  "element_id" => "image-1406217409054-1200",
  "row" => 4
  )
));

$lower_footer->add_element("PlainTxt", array(
"columns" => "6",
"margin_left" => "0",
"margin_top" => "0",
"id" => "module-1406217940549-1616",
"rows" => 12,
"options" => array(
  "content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">© 2oo6-2014 Fixer Pty Ltd</span></p>",
  "type" => "PlainTxtModel",
  "view_class" => "PlainTxtView",
  "element_id" => "text-object-1406217940549-1478",
  "class" => "c24 upfront-plain_txt",
  "has_settings" => 1,
  "id_slug" => "plain_text",
  "row" => 6,
  "is_edited" => true,
  "border_style" => "none",
  "border_width" => 1,
  "border_color" => "",
  "bg_color" => "",
  "theme_style" => "plaintext-footer",
  "anchor" => ""
  )
));

$lower_footer->add_element("PlainTxt", array(
"columns" => "7",
"margin_left" => "4",
"margin_top" => "1",
"id" => "module-1406218508045-1635",
"rows" => 12,
"options" => array(
  "content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span></p>",
  "type" => "PlainTxtModel",
  "view_class" => "PlainTxtView",
  "element_id" => "object-1406218508045-1484",
  "class" => "c24 upfront-plain_txt",
  "has_settings" => 1,
  "id_slug" => "plain_text",
  "row" => 6,
  "is_edited" => true,
  "border_style" => "none",
  "border_width" => 1,
  "border_color" => "",
  "bg_color" => "",
  "theme_style" => "plaintext-footer",
  "anchor" => ""
  )
));

$lower_footer->add_element("PlainTxt", array(
"columns" => "3",
"margin_left" => "1",
"margin_top" => "1",
"id" => "module-1406218404636-1484",
"rows" => 8,
"options" => array(
  "content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary</span></p>",
  "type" => "PlainTxtModel",
  "view_class" => "PlainTxtView",
  "element_id" => "text-object-1406218404628-1646",
  "class" => "c24 upfront-plain_txt",
  "has_settings" => 1,
  "id_slug" => "plain_text",
  "row" => 2,
  "is_edited" => true,
  "border_style" => "none",
  "border_width" => 1,
  "border_color" => "",
  "bg_color" => "",
  "theme_style" => "plaintext-footer",
  "anchor" => ""
  )
));

$regions->add($lower_footer);

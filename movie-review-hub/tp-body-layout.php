<?php

$film_maker_lite_tp_theme_css = '';

//theme color
$film_maker_lite_tp_color_option = get_theme_mod('film_maker_lite_tp_color_option');
// 1st color
$film_maker_lite_tp_color_option = get_theme_mod('film_maker_lite_tp_color_option', '#e50914');
if ($film_maker_lite_tp_color_option) {
    $film_maker_lite_tp_theme_css .= ':root {';
    $film_maker_lite_tp_theme_css .= '--color-primary1: ' . esc_attr($film_maker_lite_tp_color_option) . ';';
    $film_maker_lite_tp_theme_css .= '}';
}

//menu font size
$film_maker_lite_menu_font_size = get_theme_mod('film_maker_lite_menu_font_size', 15);{
$film_maker_lite_tp_theme_css .='.main-navigation a{';
	$film_maker_lite_tp_theme_css .='font-size: '.esc_attr($film_maker_lite_menu_font_size).'px;';
$film_maker_lite_tp_theme_css .='}';
}

// menu text tranform
$film_maker_lite_menu_text_tranform = get_theme_mod( 'film_maker_lite_menu_text_tranform','');
if($film_maker_lite_menu_text_tranform == 'Uppercase'){
$film_maker_lite_tp_theme_css .='.main-navigation a {';
	$film_maker_lite_tp_theme_css .='text-transform: uppercase;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_text_tranform == 'Lowercase'){
$film_maker_lite_tp_theme_css .='.main-navigation a {';
	$film_maker_lite_tp_theme_css .='text-transform: lowercase;';
$film_maker_lite_tp_theme_css .='}';
}
else if($film_maker_lite_menu_text_tranform == 'Capitalize'){
$film_maker_lite_tp_theme_css .='.main-navigation a {';
	$film_maker_lite_tp_theme_css .='text-transform: capitalize;';
$film_maker_lite_tp_theme_css .='}';
}

//preloader

$film_maker_lite_tp_preloader_color1_option = get_theme_mod('film_maker_lite_tp_preloader_color1_option');
$film_maker_lite_tp_preloader_color2_option = get_theme_mod('film_maker_lite_tp_preloader_color2_option');
$film_maker_lite_tp_preloader_bg_color_option = get_theme_mod('film_maker_lite_tp_preloader_bg_color_option');

if($film_maker_lite_tp_preloader_color1_option != false){
$film_maker_lite_tp_theme_css .='.center1{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_preloader_color1_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_color1_option != false){
$film_maker_lite_tp_theme_css .='.center1 .ring::before{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_preloader_color1_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_color2_option != false){
$film_maker_lite_tp_theme_css .='.center2{';
	$film_maker_lite_tp_theme_css .='border-color: '.esc_attr($film_maker_lite_tp_preloader_color2_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_color2_option != false){
$film_maker_lite_tp_theme_css .='.center2 .ring::before{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_preloader_color2_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}
if($film_maker_lite_tp_preloader_bg_color_option != false){
$film_maker_lite_tp_theme_css .='.loader{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_preloader_bg_color_option).';';
$film_maker_lite_tp_theme_css .='}';
}

// footer-bg-color
$film_maker_lite_tp_footer_bg_color_option = get_theme_mod('film_maker_lite_tp_footer_bg_color_option');

if($film_maker_lite_tp_footer_bg_color_option != false){
$film_maker_lite_tp_theme_css .='#footer{';
	$film_maker_lite_tp_theme_css .='background: '.esc_attr($film_maker_lite_tp_footer_bg_color_option).' !important;';
$film_maker_lite_tp_theme_css .='}';
}

//footer image
$film_maker_lite_footer_widget_image = get_theme_mod('film_maker_lite_footer_widget_image');
if($film_maker_lite_footer_widget_image != false){
$film_maker_lite_tp_theme_css .='#footer{';
	$film_maker_lite_tp_theme_css .='background: url('.esc_attr($film_maker_lite_footer_widget_image).');';
$film_maker_lite_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$film_maker_lite_slider_content_layout = get_theme_mod('film_maker_lite_slider_content_layout', 'LEFT-ALIGN'); 
$film_maker_lite_tp_theme_css .= '#slider .carousel-caption, #slider .inner_carousel{';
switch ($film_maker_lite_slider_content_layout) {
    case 'LEFT-ALIGN':
        $film_maker_lite_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $film_maker_lite_tp_theme_css .= 'text-align:center; left: 15%; right: 15%';
        break;
    case 'RIGHT-ALIGN':
        $film_maker_lite_tp_theme_css .= 'text-align:right; left: 50%; right: 15%';
        break;
    default:
        $film_maker_lite_tp_theme_css .= 'text-align:left; right: 50%; left: 15%';
        break;
}
$film_maker_lite_tp_theme_css .= '}';


//Font Weight
$film_maker_lite_menu_font_weight = get_theme_mod( 'film_maker_lite_menu_font_weight','600');
if($film_maker_lite_menu_font_weight == '100'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 100;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '200'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 200;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '300'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 300;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '400'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 400;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '500'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 500;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '600'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 600;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '700'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 700;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '800'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 800;';
$film_maker_lite_tp_theme_css .='}';
}else if($film_maker_lite_menu_font_weight == '900'){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
    $film_maker_lite_tp_theme_css .='font-weight: 900;';
$film_maker_lite_tp_theme_css .='}';
}

// menu color
$film_maker_lite_menu_color = get_theme_mod('film_maker_lite_menu_color');
if($film_maker_lite_menu_color != false){
$film_maker_lite_tp_theme_css .='.main-navigation a{';
$film_maker_lite_tp_theme_css .='color: '.esc_attr($film_maker_lite_menu_color).';';
$film_maker_lite_tp_theme_css .='}';
}
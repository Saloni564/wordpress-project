<?php

  $zodiac_astrology_color_scheme_css = '';

  // slider hide css
  $zodiacastrology_hide_categorysec = get_theme_mod( 'zodiacastrology_hide_categorysec', false);
    $zodiacastrology_slidersection = get_theme_mod('zodiacastrology_slidersection');
  if($zodiacastrology_hide_categorysec != true || $zodiacastrology_slidersection != true){
    $zodiac_astrology_color_scheme_css .='.page-template-template-home-page .main-nav ul li a, .page-template-template-home-page #header .text-white {';
      $zodiac_astrology_color_scheme_css .='color:#fff !important;';
    $zodiac_astrology_color_scheme_css .='}';
    $zodiac_astrology_color_scheme_css .='.page-template-template-home-page .main-nav ul ul li a{';
      $zodiac_astrology_color_scheme_css .='color:#000 !important;';
    $zodiac_astrology_color_scheme_css .='}';
    $zodiac_astrology_color_scheme_css .=' .page-template-template-home-page #header {';
      $zodiac_astrology_color_scheme_css .='background-color: #ec7a00 !important;padding:3em;position:static !important;';
    $zodiac_astrology_color_scheme_css .='}';
  }

  //---------------------------------Logo-Max-height--------- 
  $zodiac_astrology_logo_width = get_theme_mod('zodiac_astrology_logo_width');

  if($zodiac_astrology_logo_width != false){

    $zodiac_astrology_color_scheme_css .='.logo .custom-logo-link img{';

      $zodiac_astrology_color_scheme_css .='width: '.esc_html($zodiac_astrology_logo_width).'px;';

    $zodiac_astrology_color_scheme_css .='}';
  }


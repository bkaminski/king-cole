<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part( 'parts/page', 'header-tracking' ); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php get_template_part( 'parts/page', 'favicons' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="preloader"></div>	
<?php get_template_part( 'parts/page', 'main-nav' ); ?>

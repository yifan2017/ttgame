<?php

function yifan_admin_preprocess_hml(&$variables){
	$theme_path = drupal_get_path('theme', 'yifan_admin');
	drupal_add_css($theme_path . 'css/style.css', [
		'group' => CSS_THEME,
		'media' =>  'all',
		'weight' => 1000
	
	]);
}

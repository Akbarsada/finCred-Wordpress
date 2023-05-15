<?php
/**
 * Template Name:
 * Description: Einladung für den Bonicheck
 */

$context = Timber::context();
$fields = get_fields();
$controller = plugin_dir_path( __FILE__ ). '/twig-controller/boni-check.php';

require_once $controller;

$context['staging'] = (object) array(
    'env'				=> OTTO_ENV,
    'is_production'	    => IS_PRODUCTION,
    'is_staging'		=> IS_STAGING,
    'is_local'			=> IS_LOCAL
);
$context['layouts'] = [];

$context['site_url'] = site_url();


Timber::render(array('boni-check.twig'), $context);



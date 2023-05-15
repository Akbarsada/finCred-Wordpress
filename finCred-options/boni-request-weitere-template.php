<?php
/**
 * Template Name:
 * Description: Einladung für den Bonicheck
 */

$context = Timber::context();
$fields = get_fields();
$controller = plugin_dir_path( __FILE__ ). '/twig-controller/boni-request-weitere.php';

require_once $controller;

$context['staging'] = (object) array(
    'env'				=> OTTO_ENV,
    'is_production'	    => IS_PRODUCTION,
    'is_staging'		=> IS_STAGING,
    'is_local'			=> IS_LOCAL
);
$context['layouts'] = [];



Timber::render(array('boni-request-weitere.twig'), $context);
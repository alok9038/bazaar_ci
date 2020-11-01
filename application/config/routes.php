<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/index';
$route['product/(:any)'] = 'home/product/$1';
$route['category/(:any)'] = 'home/category/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/view';
$route['admin/dashboard'] = 'dashboard/view';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)'] = 'pages/view/$1';

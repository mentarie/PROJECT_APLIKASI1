<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 	= 'C_Index';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

$route['index'] 				= 'C_Index';
$route['login'] 				= 'C_Index/login';
$route['register'] 				= 'C_Index/register';
$route['logout']				= 'C_Index/logout';

// Jurnal Harian
$route['daftar_jurnal'] 					= 'C_Jurnal';
$route['daftar_jurnal/index']				= 'C_Jurnal/daftar_index';
$route['daftar_jurnal/create']				= 'C_Jurnal/daftar_create';
$route['daftar_jurnal/update/(:any)']		= 'C_Jurnal/daftar_update/$1';
$route['daftar_jurnal/delete']				= 'C_Jurnal/daftar_delete';
$route['daftar_jurnal/read/(:any)']			= 'C_Jurnal/daftar_read/$1';


$route['export_jurnal'] 		= 'C_Jurnal/export_index';

// Laporan
$route['laporan_bab3']						= 	'C_Laporan/bab3';
$route['laporan_bab3_modification']			=	'C_Laporan/bab3_modification';

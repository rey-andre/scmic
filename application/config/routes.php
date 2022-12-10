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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'UserController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth Route
$route['register'] = 'AuthController/register';
$route['register/admin'] = 'AuthController/register_admin';
$route['login'] = 'AuthController/login';
$route['login/process'] = 'AuthController/cek_login';
$route['logout'] = 'AuthController/logout';

// Main Route
$route['layanan'] = 'UserController/layanan';
$route['galeri'] = 'UserController/galeri';
$route['berita'] = 'UserController/berita';
$route['berita/detail'] = 'UserController/detail_berita';
$route['berita/kategori'] = 'UserController/kategori_berita';
$route['berita/kategori/health'] = 'UserController/berita_health';
$route['lapor'] = 'UserController/lapor';

// Admin Route
$route['dashboard'] = 'DashboardController/index';
$route['data-laporan'] = 'DashboardController/data_laporan';
$route['data-laporan/hapus/(:num)'] = 'DashboardController/hapus_data_laporan/$1';
$route['data-galeri'] = 'DashboardController/data_galeri';
$route['data-galeri/tambah'] = 'DashboardController/tambah_data_galeri';
$route['data-galeri/edit/(:num)'] = 'DashboardController/edit_data_galeri/$1';
$route['data-galeri/hapus/(:num)'] = 'DashboardController/hapus_data_galeri/$1';

// Report Route
$route['data-laporan/import'] = 'DashboardController/view_import_data_laporan';
$route['data-laporan/import/data'] = 'DashboardController/import_data_laporan';
$route['data-laporan/import/format'] = 'DashboardController/download_format_import_laporan';
$route['data-laporan/export'] = 'DashboardController/export_data_laporan';
$route['data-laporan/export-pdf'] = 'DashboardController/export_pdf_laporan';

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
*/$route['default_controller'] = 'user'; // Default controller for users
$route['admin'] = 'admin/login'; // Redirect /admin to the login method in Admin controller
$route['admin/dashboard'] = 'admin/dashboard'; // Route for admin dashboard
$route['admin/auth'] = 'admin/auth'; // Route for handling authentication (login processing)
$route['admin/kepalasekolah'] = 'admin/kepalasekolah/kepalasekolah_crud';
$route['ekstrakurikuler'] = 'ekstrakurikuler/index';
$route['ekstrakurikuler/tambah'] = 'ekstrakurikuler/tambah';
$route['ekstrakurikuler/edit/(:num)'] = 'ekstrakurikuler/edit/$1';
$route['ekstrakurikuler/hapus/(:num)'] = 'ekstrakurikuler/hapus/$1';
$route['ekstrakurikuler/detail/(:num)'] = 'eskuldetail/index/$1';









$route['user/kepsek/detail'] = 'Kepsekdetail/index';
$route['berita/detail'] = 'beritadetail/index/';



// Routes for Pengumuman CRUD

$route['admin/pengumuman'] = 'admin/pengumuman_list'; // Route for listing all announcements
$route['admin/berita'] = 'berita'; // To list all berita
$route['admin/berita/tambah'] = 'berita/tambah'; // To add berita
$route['admin/berita/edit/(:num)'] = 'berita/edit/$1'; // To edit berita
$route['admin/berita/delete/(:num)'] = 'berita/delete/$1'; // To delete berita
$route['admin/jurusan'] = 'jurusan';
$route['admin/jurusan/tambah'] = 'jurusan/tambah';
$route['admin/jurusan/edit/(:num)'] = 'jurusan/edit/$1';
$route['admin/jurusan/delete/(:num)'] = 'jurusan/delete/$1';

// $route['admin/ekstrakurikuler'] = 'ekstrakurikuler/index';
// $route['admin/ekstrakurikuler/tambah'] = 'ekstrakurikuler/tambah';
// $route['admin/ekstrakurikuler/edit/(:num)'] = 'admin/ekstrakurikuler/edit/$1';
// $route['admin/ekstrakurikuler/delete/(:num)'] = 'admin/ekstrakurikuler/delete/$1';






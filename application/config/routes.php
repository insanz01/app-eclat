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
$route['default_controller'] = 'AppController/index';
$route['404_override'] = 'ErrorController/not_found';
$route['translate_uri_dashes'] = FALSE;

// AUTH
$route['auth'] = "AuthController/index";
$route['auth/do_login'] = "AuthController/do_login";
$route['auth/logout'] = "AuthController/do_logout";

$route['dashboard'] = "AppController/index";

// CABANG
$route['cabang'] = "CabangController/index";
$route['cabang/add'] = "CabangController/add";
$route['cabang/do_add'] = "CabangController/do_add";
$route['cabang/edit/(:any)'] = "CabangController/edit/$1";
$route['cabang/do_edit/(:any)'] = "CabangController/do_edit/$1";
$route['cabang/delete'] = "CabangController/delete";

// PRODUK
$route['produk'] = "ProdukController/index";
$route['produk/add'] = "ProdukController/add";
$route['produk/do_add'] = "ProdukController/do_add";
$route['produk/edit/(:any)'] = "ProdukController/edit/$1";
$route['produk/do_edit/(:any)'] = "ProdukController/do_edit/$1";
$route['produk/delete'] = "ProdukController/delete";

// KATALOG
$route['katalog'] = "KatalogController/index";
$route['katalog/add'] = "KatalogController/add";
$route['katalog/do_add'] = "KatalogController/do_add";
$route['katalog/edit/(:any)'] = "KatalogController/edit/$1";
$route['katalog/do_edit/(:any)'] = "KatalogController/do_edit/$1";
$route['katalog/delete'] = "KatalogController/delete";

$route['laporan/produk'] = "LaporanController/produk";
$route['laporan/cabang'] = "LaporanController/cabang";
$route['laporan/katalog'] = "LaporanController/katalog";

$route["transaksi/pinjam"] = "TransaksiController/pinjam";
$route["transaksi/pinjam/check_produk"] = "TransaksiController/check_produk_pinjam";
$route["transaksi/do_pinjam"] = "TransaksiController/do_pinjam";

$route["transaksi/kembali"] = "TransaksiController/kembali";
$route["transaksi/kembali/check_produk"] = "TransaksiController/check_produk_kembali";
$route["transaksi/do_kembali"] = "TransaksiController/do_kembali";

$route["print"] = "PrintController/index";
$route["print/setup"] = "PrintController/setup";

$route["print/produk"] = "PrintController/produk";
$route["print/cabang"] = "PrintController/cabang";
$route["print/transaksi"] = "PrintController/transaksi";
$route["print/sewa"] = "PrintController/sewa";
$route["print/masuk"] = "PrintController/masuk";
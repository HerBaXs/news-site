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
$route['default_controller'] = 'UserController';
$route['Home']               = 'UserController/index';
$route['About']              = 'UserController/about';
$route['Standart']           = 'UserController/standart';
$route['PageDown']           = 'UserController/useradmin';
$route['category']           = 'UserController/category';
$route['test']               = 'UserController/test';
$route['single/(:any)']      = 'UserController/single/$1';



////////////////////////////Web Site///////////////////


//////////////////////////AdminPanel///////////////////

$route['user_sign']                     = 'AdminController/index';
$route['chiao_act']                     = 'AdminController/loginAct';
$route['loginOut']                     = 'AdminController/loginOut';
$route['Dashbook']                      = 'AdminController/dashboard';
$route['Table']                         = 'AdminController/tables';
$route['admin_news_list']               = 'AdminController/news_list';
$route['admin_news_add']                = 'AdminController/news_add';
$route['admin_news_add_action']         = 'AdminController/news_add_action';
$route['admin_delete_news/(:any)']      = 'AdminController/delete_news/$1';
$route['admin_news_view/(:any)']        = 'AdminController/news_view/$1';
$route['admin_news_edit/(:any)']        = 'AdminController/news_edit/$1';
$route['admin_news_edit/(:any)']        = 'AdminController/news_edit/$1';
$route['admin_news_edit_act/(:any)']    = 'AdminController/news_edit_act/$1';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

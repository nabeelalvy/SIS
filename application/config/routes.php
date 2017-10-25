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
$route['default_controller'] = 'welcome';

$route['admin'] = 'AdminController/display_homepage';
$route['addschoolpage'] = 'AdminController/addschool';
$route['addschool'] = 'AdminController/add_school_in_database';
$route['addclasspage'] = 'AdminController/addclass';
$route['registerpage'] = 'AdminController/register';
$route['delete_branch/:num'] = 'AdminController/deletebranch';
$route['allschool'] = 'AdminController/allschool';
$route['adduser'] = 'AdminController/dispaly_add_user';
$route['deleteuser/:num'] = 'AdminController/deleteuser';
$route['alluser'] = 'AdminController/display_all_users';
$route['edituser/:num'] = 'AdminController/edit_users';
$route['edit_branch/:num'] = 'AdminController/edit_school_branch';
$route['school_branch_json'] = 'AdminController/get_school_branch_json';
$route['update_branch'] = 'AdminController/update_branch';
$route['add_user'] = 'AdminController/display_addUser_page';
$route['adding_user'] = 'AdminController/insert_user_to_database';
$route['update_user'] = 'AdminController/update_user_in_database';
$route['chart'] = 'AdminController/display_chart';

$route['index'] = 'MainController/display_main_page';
$route['map'] = 'MainController/map';
$route['ranking'] = 'MainController/show_ranking_page';
$route['career'] = 'MainController/show_cc_page';
$route['home'] = 'MainController/display_login_main_page';
$route['login'] = 'MainController/display_login_page';
$route['sign_up'] = 'MainController/display_signup_page';
$route['search'] = 'MainController/display_search_school_page';
$route['search_name'] = 'MainController/search_schools';
$route['area_select'] = 'MainController/area_search';
$route['logout'] = 'MainController/logout';
$route['getfield'] = 'MainController/get_career_counselling_result';

$route['signup'] = 'MainController/PostSignup';
$route['signin'] = 'MainController/PostSignin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

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
$route['default_controller'] = 'home';
$route['404_override'] = 'home/file_not_found';
$route['translate_uri_dashes'] = FALSE;  
$route['dashboard'] = 'home/dashboard';
$route['forgot'] = 'home/forgot';
$route['otp'] = 'home/otp';
$route['reset'] = 'home/reset';
$route['user-list'] = 'home/user_list';
$route['user-detail'] = 'home/user_detail';
$route['game-detail'] = 'home/game_detail';

$route['video-detail'] = 'home/video_detail';
$route['participants-video'] = 'home/participants_video';
$route['video-list'] = 'home/video_list';
$route['category-list'] = 'home/category_list';
$route['report-list'] = 'home/report_list';
$route['report-detail'] = 'home/report_detail';
$route['game_room_list'] = 'home/game_room_list';
$route['tournament'] = 'home/tournament';
$route['token-purchase-list'] = 'home/token_purchase_list';
$route['token-detail'] = 'home/token_detail';
$route['quiz-rule'] = 'home/quiz_rule';
$route['tournament-detail'] = 'home/tournament_detail';
$route['quiz-rule-detail'] = 'home/quiz_rule_detail';
$route['content-list'] = 'home/content_list';
$route['content-detail'] = 'home/content_detail';
$route['notification-detail'] = 'home/notification_detail';
$route['query-list'] = 'home/query_list';
$route['query-detail'] = 'home/query_detail';
$route['compose-new'] = 'home/compose_new';
$route['transaction-list'] = 'home/transaction_list';
$route['advertisement-list'] = 'home/advertisement_list';
$route['referral-list'] = 'home/referral_list';












 









 
 



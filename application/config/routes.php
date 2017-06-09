<?php
defined('BASEPATH') OR exit('No direct script access allowed');


		/** dashboard **/
$route['default_controller'] = 'dashboard';
$route['dashboard'] = 'dashboard';

		/** tournaments **/
$route['create_tour'] = 'tour/create';
$route['create_tournament_submit'] = 'tour/create_tournament_submit';
$route['upcoming_tour'] = 'tour/upcoming';
$route['past_tour'] = 'tour/past';
$route['running_tour'] = 'tour/running';
$route['edit_tour/(:num)'] = 'tour/edit/$1';
$route['delete_tour/(:num)'] = 'tour/delete1/$1';

		/** team **/
$route['create_team'] = 'team/create';
$route['add_players'] = 'team/add_players';
$route['create_team_submit'] = 'team/create_team_submit';
$route['view_team'] = 'team/view';

// $route['create_team'] = 'team/create';
$route['aj_remove_player_from_team/(:num)/(:num)'] = 'team/aj_remove_player_from_team/$1/$2';
$route['add_team_player/(:num)/(:num)'] = 'team/aj_add_team_player/$1/$2';
$route['requst_already_pl_ls/(:num)'] = 'team/teamAlreadyP/$1';
$route['add_team_players/(:num)'] = 'team/add_players/$1';
// $route['create_team_submit'] = 'team/create_team_submit';
// $route['view_team'] = 'team/view';



$route['ajax_add_in_team/(:any)'] = 'team/ajax_add_in_team/$1';
$route['ajax_make_caption/(:any)'] = 'team/ajax_make_caption/$1';
$route['ajax_make_vicecaption/(:any)'] = 'team/ajax_make_vicecaption/$1';
$route['add_player_ajax_search_mobile/(:any)'] = 'team/add_player_ajax_search_mobile/$1';
$route['add_player_ajax_search_name/(:any)'] = 'team/add_player_ajax_search_name/$1';
$route['add_player_ajax_search_city/(:any)'] = 'team/add_player_ajax_search_city/$1';
$route['add_player_ajax_search_team/(:any)'] = 'team/add_player_ajax_search_team/$1';


$route['edit_team/(:num)'] = 'team/edit/$1';
$route['delete_team/(:num)'] = 'team/delete1/$1';

		/** match **/
$route['create_match'] = 'match/create';
$route['submit_create_match'] = 'match/submit_create_match';
$route['view_match'] = 'match/view';
$route['edit_match/(:num)'] = 'match/edit/$1';
$route['delete_match/(:num)'] = 'match/delete1/$1';


		/** player **/
$route['create_player'] = 'player/create';
$route['player_create_submit'] = 'player/player_create_submit';
$route['view_player'] = 'player/view';
$route['edit_player/(:num)'] = 'player/edit/$1';
$route['edit_player_detail/(:num)'] = 'player/edit_player_detail/$1';
$route['edit_player_detail1/(:num)'] = 'player/edit_player_detail1/$1';
$route['delete_player/(:num)'] = 'player/delete1/$1';
$route['load_state/(:num)'] = 'player/load_state/$1';
$route['load_city/(:num)'] = 'player/load_city/$1';
$route['edit_player_photo_upload/(:num)/(:any)'] = 'player/edit_photo/$1/$2';

$route['player_aj_name/(:any)'] = 'player/player_by_name/$1';
$route['ajax_view_player_by_city/(:any)'] = 'player/player_by_city/$1';
$route['ajax_view_player_by_mobile/(:any)'] = 'player/player_by_mobile/$1';

		
		/** score **/
$route['update_score'] = 'score/view';
$route['view_score'] = 'score/past';
$route['load_team/(:num)'] = 'score/load_team/$1';
$route['load_players_team/(:any)/(:any)'] = 'score/load_team/$1/$2';
$route['score_updating_according_match'] = 'score/updating';
$route['match_started/(:num)'] = 'score/match_parameters/$1';
$route['set_parameter_match/(:num)'] = 'score/set_parameter_match/$1';
$route['live_score/(:any)/(:any)/(:any)'] = 'score/live_score/$1/$2/$3';
	
		/** user **/
$route['submit_user_form'] = 'user/submit_user_form';
$route['create_user'] = 'user/create';
$route['view_user'] = 'user/view';
$route['edit_user/(:num)'] = 'user/edi/$1';
$route['delete_user/(:num)'] = 'user/delete1/$1';


		/** ajax **/
$route['get_all_cities'] = 'users/get_all_cities';


		/** APIs **/
$route['home_matches_page_api'] = 'home_matches_page_api';
$route['tournament_page_api'] = 'tournament_page_api';

		/** extra **/
$route['404_override'] = 'page/show_404';
$route['500_override'] = 'page/show_404';
$route['translate_uri_dashes'] = FALSE;

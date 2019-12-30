<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'front/homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['rooms'] = 'front/room_types';
$route['apartments'] = 'front/apartment_types';
$route['page/gallery'] = 'front/gallery';


/* Dynamic News Routes */
require_once( BASEPATH . 'database/DB.php');

$db = & DB();
$pages = $db->get('pages')->result();
foreach ($pages as $row) {
    $route['page/' . $row->slug] = 'front/homepage/page/' . $row->id . '/';
}
$apartment_types = $db->get('room_types')->result();

foreach ($apartment_types as $row) {
    $route['apartments/' . $row->slug] = 'front/apartment_types/apartment/' . $row->id . '/';
}

$room_types = $db->get('room1_types')->result();
foreach ($room_types as $row) {
    $route['rooms/' . $row->slug] = 'front/room_types/room/' . $row->id . '/';
}


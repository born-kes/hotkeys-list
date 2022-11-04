<?php

if (!defined('DIR')) {
    define('DIR', '..\\src\\');
}

include_once(DIR . 'translator.php');
$data = include(DIR . 'hotkeys_data.php');

//header('Content-type: text/xml');
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
<?php
include_once ('translator.php');
$data = include('hotkeys_data.php');

//header('Content-type: text/xml');
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
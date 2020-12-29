<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Authorization, Content-Type, X-Requested-With, Accept");
header("Access-Control-Allow-Credentials: false");
header("Access-Control-Max-Age: -1");

$time = time();
$resp_arr = [];
$token_key = '12345';
$auth_user = null;

$pdo = new PDO("mysql:host=localhost;dbname=miniforum_database;charset=utf8", 'root', 'root');

if (isset($_GET['api'])) {
    if (isset($_GET['reg'])) {
        include_once 'reg.php';
    }

    else if (isset($_GET['auth'])) {
        include_once 'auth.php';
    }

    else {

        include_once 'protect.php';

        if (isset($_GET['themes'])) {
            include_once 'themes.php';
        }

        else {
            http_response_code(404);
        }
    }
}

function resp($resp_arr) {
    $pdo = null;
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($resp_arr);
    exit;
}
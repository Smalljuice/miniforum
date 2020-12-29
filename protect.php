<?php


$str = str_replace('Bearer ', '', $_SERVER['HTTP_AUTHORIZATION']);
$base = base64_decode($str);

$toke = explode(",", $base);

$query = $pdo -> query("SELECT * FROM users WHERE user_email='{$toke[0]}'");
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $token_ver = md5($user['user_password'].$token_key);
    if ($token_ver == $toke[1]) {
        $resp_arr['auth'] = 'true';
        $auth_user=$user;
    }
    else {
        $resp_arr['auth'] = 'false';
        resp($resp_arr);
    }
}

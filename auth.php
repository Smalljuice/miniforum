<?php

$token = null;

$email = $_POST['email'];
$password = $_POST['password'];

$query = $pdo -> query("SELECT * FROM users WHERE user_email='{$email}'");
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user) {
    if (password_verify($password, $user['user_password'])) {

        $token = base64_encode($user['user_email'] . ',' .  md5($user['user_password'].$token_key));
        $resp_arr['auth']['token'] = $token;
    }
    else {
        $resp_arr['auth'] = 'false';
    }
}

resp($resp_arr);
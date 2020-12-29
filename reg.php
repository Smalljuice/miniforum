<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$prepare = $pdo -> prepare("INSERT INTO users (
user_email,
user_name,
user_surname,
user_password,
user_type
) values (
:user_email,
:user_name,
:user_surname,
:user_password,
:user_type
)");

$prepare -> bindValue(":user_email", $email);
$prepare -> bindValue(":user_name", $name);
$prepare -> bindValue(":user_surname", $surname);
$prepare -> bindValue(":user_password", $password);
$prepare -> bindValue(":user_type", 'user');

$execute = $prepare -> execute();

if ($execute) {
    $resp_arr['reg'] = 'true';
}

else {
    $resp_arr['reg'] = 'false';
}

resp($resp_arr);
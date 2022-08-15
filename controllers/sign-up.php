<?php
///////////////////////////////////////
// サインアップコントローラー
///////////////////////////////////////

include_once '../model/users.php';

if (isset($_POST['nickname']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $data = [
        'nickname' => $_POST['nickname'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];

    if (createUser($data)) {

        header('Location:sign-in.php');
        exit;
    }
}
 
include_once '../views/sign-up.php';
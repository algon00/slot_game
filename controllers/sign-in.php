<?php
///////////////////////////////////////
// サインインコントローラー
///////////////////////////////////////
 
include_once '../common/util.php';

include_once '../model/users.php';
 
$try_login_result = null;
 
if (isset($_POST['email']) && isset($_POST['password'])) {
    
    $user = findUserAndCheckPassword($_POST['email'], $_POST['password']);
 
    
    if ($user) {
        
        saveUserSession($user);
 
        
        header('Location:slot.php');
        exit;
    } else {
        
        $try_login_result = false;
    }
}
 
$view_try_login_result = $try_login_result;
 
include_once '../views/sign-in.php';
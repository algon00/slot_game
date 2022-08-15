<?php
///////////////////////////////////////
// サインアウトコントローラー
///////////////////////////////////////

include_once '../common/util.php';
 
deleteUserSession();
 
header('Location:sign-in.php');
exit;
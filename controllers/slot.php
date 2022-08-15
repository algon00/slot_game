<?php
///////////////////////////////////////
// スロットコントローラー
///////////////////////////////////////
 

include_once '../common/util.php';

include_once '../model/users.php';

$user = getUserSession();
if (!$user) {
    header('Location:sign-in.php');
    exit;
}



include_once '../views/slot.php';
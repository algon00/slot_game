<?php

/**
    * ユーザー情報をセッションに保存
    *
    * @param array $user
    * @return void
    */
function saveUserSession(array $user)
{
    // セッションを開始していない場合
    if (session_status() === PHP_SESSION_NONE) {
        // セッション開始
        session_start();
    }
 
    $_SESSION['USER'] = $user;
}
 
/**
    * ユーザー情報をセッションから削除
    *
    * @return void
    */
function deleteUserSession()
{
    // セッションを開始していない場合
    if (session_status() === PHP_SESSION_NONE) {
        // セッション開始
        session_start();
    }
 
    // セッションのユーザー情報を削除
    unset($_SESSION['USER']);
}
function getUserSession()
{
    // セッションを開始していない場合
    if (session_status() === PHP_SESSION_NONE) {
        // セッション開始
        session_start();
    }
    
    if (!isset($_SESSION['USER'])) {
        // セッションにユーザー情報がない
        return false;
    }
 
    $user = $_SESSION['USER'];

    return $user;
}

?>
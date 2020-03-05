<?php
/*
 * 
 *  Авторизация пользователя
 * 
 */
    session_start();
    
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/SQL.php');
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/TempData.php');
    $class_sql = new SQL();
    
    //  $_POST

    if(isset($_POST['login']) && isset($_POST['password'])){
        
        $rememberMe = (isset($_POST["RememberMe"])) ? true : false;
        
        if($class_sql->Authenication($_POST['login'], $_POST['password'], $rememberMe)){
            header('Location: /');  
        } else {
            header('Location: /login_registration');
        }
    }
?>
    
    

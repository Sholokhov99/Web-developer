<?
include_once('TempData.php');


class Cookie{
    public static function SetLoginData($login, $password, $time){
        setcookie("login", $login, $time);
        setcookie("password", $password, $time);
        TempData::$IsAuth = true;
    }
    public static function GetLoginData(){
        if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
            return (TempData::$IsAuth = true);
        } else {
            return (TempData::$IsAuth = false);
        }
    }
    
    public static function DelLoginData(){
        //unset($_COOKIE['login']);
        setcookie('login', null, -1);
        //unset($_COOKIE['password']);
        setcookie('password', null, -1);
    }
}
<?
//
//  Все данные не шифруются в угоду скорости разработки
//
include_once('TempData.php');
class Cookie{
    public function GetAuth(){
        if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
            return (TempData::$IsAuth = true);
        } else {
            return (TempData::$IsAuth = false);
        }
    }
    
    public function SetAuth($login, $password){
        setcookie("login", $login);
        setcookie("password", $password);
        TempData::$IsAuth = true;
    }
}
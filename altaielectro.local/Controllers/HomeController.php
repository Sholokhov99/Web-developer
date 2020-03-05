<?php

class HomeController{
    private static $_controller = "HomeController";
    private static $_action;
    private static $_actionID;


    public static function Start($action, $actionID){
        self::$_action = $action;
        self::$_actionID = $actionID;
        
        
        // Тут ошибка
        if(empty($action)) $action = "Home";
        
        if(     $action  == "Home"
                || $action === "login_registration" 
                || $action === "personal_account"){
            
            self::PrintContentPage($action);
        } else{
            Route::Error(404);
        }
    }
    
    //
    //  Отображение страницы
    //
    private static function PrintContentPage($file_name){
        include_once ($_SERVER['DOCUMENT_ROOT']."/Views/Home/".$file_name."View.php");
    }

}

?>
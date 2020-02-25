<?php
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/route.php');
    $result = Route::Start();
    
    class DefController{
        //
        //  Получение данные странички
        //
        private  static function GetActionContent($action){
            $pathToFile = $_SERVER['DOCUMENT_ROOT'] . '/Views/Home/'.$action;
            if (file_exists($pathToFile)) {
                require_once $pathToFile;
                /*
                $GetContentFile = readfile($pathToFile);
                echo $GetContentFile;*/
            }
        }

        //
        //  Проверка на стандартый контент
        //
        public static function CheckDefActions($page){
            $rout = [
               "Home" => "HomeView.php",
               "login_registration" => "login_registrationView.php",
               "personal_account" => "personal_accountView.php",
           ];


            if (count($page) == 0){
                $action = [$rout["Home"]];
            } else{
                $action = $page;
                $action[0] .= "View.php";
            }
            //$action = (count($page) == 0) ? [$rout["Home"]] : $page;


            if( count($action) == 2 || count($action) == 1){
                self::GetActionContent($action[0]);

            } else  echo 'false2<br>';
        }
    }
    
    DefController::CheckDefActions($result);
?>
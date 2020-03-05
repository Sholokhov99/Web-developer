<?php
    //session_set_cookie_params($_SESSION['LiveCookie']);
    class TempData{

        #region UserData
        public static function GetArrUserData(){
            return $_SESSION['arrUserData'];
        }
        //
        //  Занесение данных пользователя
        //
        public static function SetArrUserData($arr){
            if($arr !== false && count($arr) === 24){
                //  Настройка время жизни сессии               
                
                $_SESSION['arrUserData'] = [
                    "ID"         => $arr[0],
                    "Login"      => $arr[1],
                    "Password"   => $arr[2],
                    /*Разделить ФИО*/
                    "Name"       => null,
                    "Surname"    => null,
                    "Patronymic" => null,
                    /************************/
                    "Raiting"    => $arr[4],
                    "Image"      => $arr[5],
                    "DateReg"    => $arr[6],
                    "LastEnter"  => $arr[7],
                    "Block"      => $arr[8],
                    "Mail"       => $arr[9],
                    "TypeReg"    => $arr[10],
                    "Access"     => $arr[11],
                ];
                return true;
            } else
                return false;
        }
        //
        //  Очистка данных пользователя
        //
        public static function ClearArrUserData(){
            //$_SESSION['arrUserData'] = array();
        }
        #endregion
    }
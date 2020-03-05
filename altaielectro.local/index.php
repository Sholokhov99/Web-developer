<?php

require_once ($_SERVER["DOCUMENT_ROOT"].'/models/SQL.php');
class Route{
    //
    //  Определение текущего протокола
    //
    public static function getProtocol(){
        if (isset($_SERVER['HTTPS'])) 
            $scheme = $_SERVER['HTTPS'];
        else 
            $scheme = '';
        
        
        if (($scheme) && ($scheme != 'off'))
            $scheme = 'https';
        else 
            $scheme = 'http';
        
        return $scheme;
    }


    //
    //  Проверка корректного url
    //
    public static function CheckingCorrectURI($url){
      // Удаление всех двойных слешей
      $url = preg_replace('|([/]+)|s', '/', substr($url, 1));
      
      // Проверка последнего символа
      if($url[strlen($url)-1] == '/'){
          // Перенаправление на корректный URl
          header("Location: ". self::getProtocol().":/".substr($url,0,-1));
      }
      
      return true;
    }
    
    //
    //  Получение адресной строки
    //
    public static function Start(){
      session_start();
      /*
        Маршрут состояит из:
       * controller/action/id
      */

      $controlle_name = "HomeControllers";
      $action_name = "Home";
      $id_name = "";
      
      // Получение URI из адресной строки
      $url = $_SERVER['REQUEST_URI'];
      
      // Проверка на корректный url
      self::CheckingCorrectURI($url);
      
      // Удаление первого слеша
      $url = mb_substr($url, 1);
      
      // Подсчет всех слешей
      $layer_url = substr_count($url, '/');
      
      // Определение подходящей обработки uri
      switch($layer_url)
      {
          case 0:
              $regular = "/([[:alpha:]]\w+)/";
              break;
          case 1:
              $regular = "/([[:alpha:]]\w+)\\/(\w+)/";
              break;
          case 2:
              $regular = "/([[:alpha:]]\w+)\\/(\w+)\\/(\w+)/";
              break;
          default:
              self::Error(404);
              break;
      }
      
      // Выделение всего пути из URI
      preg_match($regular, $url, $result);
      
      
      // Проверка на существование файла
      if(!empty($url) && (file_exists($_SERVER['DOCUMENT_ROOT']."/" .$url) || file_exists($_SERVER['DOCUMENT_ROOT']."/" .$url.".php")))
           self::Error(404);

      // Проверка на принодлежность к HomeController
      if(
              (empty($result[1]) && empty($result[2]) && empty($result[3])) ||
             ( (!empty($result[1]) && empty($result[2]) && empty($result[3]) ) 
                     &&  !file_exists($_SERVER['DOCUMENT_ROOT']."/Controllers/".$result[1].".php") )
        ){
          
          include_once ($_SERVER['DOCUMENT_ROOT']."/Controllers/HomeController.php");
          // Перенаправление к главному контроллу
          HomeController::Start($result[1], $result[3]);
        }
      
      //return self::PrintContentPage($result);
      
      //return $result;
    }
    
    //
    //  Вывод содержимого
    //
    private static function PrintContentPage($uri){
        $sql = new SQL();
        
        // [1]Controller [2]Actiuon [3]Action_ID
        
        // Проверка на запрос начальной страницы
        if(empty($uri[1]) && empty($uri[2]) && empty(($uri[3]))){
             $uri[1] = "HomeController";
             $uri[2] = "Home";
         }
         
         // Проверка на запрос формы регистрации
         if(!empty($uri[1]) && empty($uri[2]) && empty(($uri[3]))){
             if($uri[1] === "login_registration"){
                $uri[2] = "login_registration";
             } else if($uri[1] === "")
             
             
             
             $uri[1] = "HomeController";
             $uri[2] = "login_registration";
         }
        // Получение данных о отрисовке страницы
         
        /*
            Получает:
            Template
            Access
            Controller_URI
        */

        $data = $sql->GetPage($uri[1], $uri[2], $uri[3]);
        
        //var_dump($data);
        
        try
        {
            //  Подключение контроллера
            include_once ($_SERVER['DOCUMENT_ROOT'].$data["Controller_URI"].$uri[1].".php");
            
            // Запуск работы контроллера
            $uri[1]::Start($uri[2], $uri[3]);
        } catch (Exception $ex)
        {
           self::Error(404);
        }
        
        
    }
    
    //
    //  Принудительный вызов ошибки 404
    //
    public static function Error($code){
        
        switch ($code){
            case 404:
                header ("HTTP/1.0 404 Not Found");
                break;
        }
        
        die();
    }
}

Route::Start();

?>
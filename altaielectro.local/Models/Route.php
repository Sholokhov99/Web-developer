<?php
class Route{
    //
    //  Определение текущего протокола
    //
    public static function GetProtocol(){
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
          header("Location: ". self::GetProtocol().":/".substr($url,0,-1));
      }
    }

    //
    //  Получение адресной строки
    //
    public static function Start(){
      /*
        Маршрут состояит из:
       * controller/action/id
      */
            session_start();

      $error = false;    
      $controlle_name = "Home";
      $action_name = "index";
      $id_name = "";
      
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
              $case = $layer_url;
              break;
          case 1:
              $regular = "/([[:alpha:]]\w+)\\/(\w+)/";
              $case = $layer_url;
              break;
          case 2:
              $regular = "/([[:alpha:]]\w+)\\/(\w+)\\/(\w+)/";
              $case = $layer_url;
              break;
          default:
              header ("HTTP/1.0 404 Not Found");
              die();
              break;
      }
      
      // Выделение всех контролов
      preg_match($regular, $url, $result);

      if(!$result[1] == null && file_exists($_SERVER['DOCUMENT_ROOT']."/" .$url)) {
          header ("HTTP/1.0 404 Not Found");
          die();
      }
      return $result;
    }
}
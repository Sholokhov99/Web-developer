<?php
class Banners {
    public static function Generate1200x300(){
        $way = $_SERVER['DOCUMENT_ROOT']. "/app_data/img/bg/banners/1200x300/";
        
        // Загрузка всех картинок
        $files = scandir($way);
        
        // Случайный выбор банера
        $randIndex = self::GenerateRandom(2, count($files)-1, 1);

       return "/app_data/img/bg/banners/1200x300/".$files[$randIndex[0]];
    }
    
    //
    //  Генерация случайного числа
    //
    private static function GenerateRandom($start, $end, $count){
        $array = array();
        
        $index = 0;
        while($index++ < $count){
            
            $rnd = rand($start, $end);
            
            if(!in_array($rnd, $array)){
                $array[] = $rnd;
            } else {
                $count = $count + 1;
            }
        }
        
        return $array;
    }
}

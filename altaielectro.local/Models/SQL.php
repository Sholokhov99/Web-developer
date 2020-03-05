<?
    require_once('TempData.php');
    //require_once('Cookie.php');

// INSERT INTO `users` (`Login`, `Password`, `FIO`, `Raiting`,`Image`, `DateRegistration`, `LastEnter`,`Block`, `Mail`, `TypeReg`, `Access`) VALUES ('kisso', 'Lfybbk123ru', 'Шолохов Даниил Сергеевич', '100','','2020-02-19', '2020-02-19',false,'sholokhov.daniil@gmail.com', 'Web', '1');

class SQL{
    //
    //  Data DB
    //
    private $_strHost = "localhost";
    private $_strDB = "altaielectro";
    private $_strUser = "mysql";
    private $_strPassword = "mysql";
    private $_strCharset = "utf8";
    private $_pbo = null;
    
    //
    //  Подключение к БД
    //
    private function ConnectDB(){
        try{
            $this->pbo = new PDO(
                    "mysql:host={$this->_strHost};dbname={$this->_strDB};charset=$this->_strCharset",
                    $this->_strUser,
                    $this->_strPassword);
        } catch (PDOException $e) {
            $this->pbo = null;
        }
    }

    //
    //  Отключение от БД
    //
    private function CloseDB(){
        $this->_pbo = null;
    }
    
    //
    //  Получение данных SELECT запроса
    //
    private function SELECT($sql){
        $this->ConnectDB();
        if($this->pbo !== null){
            $result = $this->pbo->query($sql);
            $this->CloseDB();
            return $result;
        } else {
            $this->CloseDB();
            return null;
        }
    }
    
    //
    //  Получение данных INSERT запроса
    //
    private function INSERT($sql){
        $this->ConnectDB();
        $result = ($this->pbo !== null) ? $this->pbo->prepare($sql) : null;

        if ($result == null) {
            $this->CloseDB();
            return $result;
        }
        else {
            $this->CloseDB();
            return $result->execute($values);
        }
    }
    
//
    // Authenication
    //
    public function Authenication($login, $password, $rememberMe){
        $sql = "SELECT * FROM `Users` WHERE `Login`='{$login}' AND `Password`='{$password}'";
        
        if(($data =$this->SELECT($sql)) != null){
            //  Сохранение данных пользователя в памяти
            return TempData::SetArrUserData($data->fetch());
            //Cookie::SetLoginData($login, $password,($rememberMe) ? time()+3600:0);
        } else{
            return false;
        }
    }
    
//
    //  Registration
    //
    public function RegistrationUser($login, $password, $mail, $rememberMe){
        $sql = "INSERT INTO `users` (`Login`, `Password`, `FIO`, `Raiting`,`Image`, `DateRegistration`, `LastEnter`,`Block`, `Mail`, `TypeReg`, `Access`) VALUES
            ('{$login}', '{$password}', '', '100','Non image','".date("Y-m-d")."', '".date("Y-m-d")."',false,'{$mail}', 'Web', '0');";

        //Cookie::SetLoginData($login, $password,($rememberMe) ? time()+3600:0);
        return $this->INSERT($sql);
    }
    
    //
    //  Создание параметров для запроса
    //
    private function CreateBindParam($arr, $pdo, $sql){
        //$_pbo
        for($index = 0; $index < count($arr); $index++){
            $pdo->bindParam($arr[index][0], $arr[index][1]);
        }
        
        return $pdo;
    }
    

        //
    //  Get Page
    //
    public function GetPage($controller, $action, $action_id){
        $params = [
            "Controller" => [":controller", $controller],
            "Action" => [":action", $action],
            "Action_id" => [":action_id", $action_id]
        ];
        
        //  Проверка на загрузку главной страницы
        if(!empty(($action))){            
            $sql = "SELECT `actions`.`Template_URI`, `actions`.`Access`,"
                    . "`controllers`.`Controller_URI` FROM"
                    . "`actions` LEFT JOIN `controllers` ON"
                    . "`actions`.`ID_controller` = `controllers`.`Controller_ID` "
                    . "WHERE `actions`.`Name_action` = 'Home' AND `controllers`.`Name_controller` = 'HomeController';";
            
            
            // Создание параметров
            //$this->CreateBindParam($params, $this->_pbo);
            
            $result = $this->SELECT($sql);
        
            $value = $result->fetch();
            
           // var_dump($value);
            //echo "<br><br>";

            /*
            $data = [
                "Content" => $value[0],
                "Access" => $value[1],
                "URI" => $value[2],
            ];*/
            return [
                "Template" => $value[0],
                "Access" => $value[1],
                "Controller_URI" => $value[2],
            ];
        }
        

    }
    
}

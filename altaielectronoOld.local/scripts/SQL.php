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
        if(($data = $this->SELECT($sql)) != null){
            //  Сохранение данных пользователя в памяти
            TempData::SetArrUserData($data->fetch());
            //Cookie::SetLoginData($login, $password,($rememberMe) ? time()+3600:0);
            return true;
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
}

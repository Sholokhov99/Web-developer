<?php
include_once('TempData.php');
include_once('Cookie.php');
class SQL{
    //
    //  Data DB
    //
    private $_strHost = "localhost";
    private $_strDB = "database";
    private $_strUser = "mysql";
    private $_strPassword = "mysql";
    private $_strCharset = "utf8";
    //
    //  Connect DB
    //
    
    private $_pbo = null;

    
    function ConnectDB(){
        try{
            $this->pbo = new PDO( 
                    "mysql:host={$this->_strHost};dbname={$this->_strDB};charset=$this->_strCharset", 
                    $this->_strUser, 
                    $this->_strPassword);
        } catch (PDOException $e) {
            $this->pbo = null;
        }
    }
    
    function CloseDB(){
        $this->_pbo = null;
    }
    #region Feedback
    // Get comments
    public function GetFeedBack(){
        $this->ConnectDB();
        echo "<h1>$this->pdo</h1>";
        $sql = "SELECT `feedback`.`Data`, `feedback`.`Raiting`, `feedback`.`Comment`, 
                       `users`.`Login`, `users`.`FIO`, `users`.`Image` FROM 
                       `feedback` LEFT JOIN `users` ON 
                       `feedback`.`User_ID` = `users`.`User_ID`";
        // ��������� � �� � ��������� �������
        $data = ($this->pbo !== null) ? $this->pbo->query($sql) : null;
        try{
            // ������� ���������� �������
            while($value = $data->fetch()){
                echo '<article class="comment">
                        <span>
                            <picture>
                                <img src="'.$value[5].'" />
                            </picture>
                            <span>
                                <a href="#">'.$value[3].'</a>
                                <p>'.$value[4].'</p>
                                <p>'.$value[2].'</p>
                            </span>
                        </span>
                        <hr />
                        <p>Date public: '.$value[0].'</p>
                        <p>Raiting: '.$value[1].'</p>
                        
                    </article>';
            }
        } catch (Exception $ex) {
            echo '<h1>��������� ������</h1>';
        }
        $this->CloseDB();
    }
    
    public function Auth($login, $password){
            if(!empty($_POST['login']) && !empty($_POST['password'])){
                $this->ConnectDB();
                $sql = "SELECT * FROM Users WHERE `Login`={$_POST['login']} AND `Password`={$_POST['password']}";
                $data = ($this->pbo !== null) ? $this->pbo->query($sql) : null;
                
                if($data !== null) {
                    // Пользователь существует
                    $class_cookie = new Cookie();
                    $class_cookie->SetAuth($_POST['login'], $_POST['password']);
                    //
                    //  Сохранение данных пользователя
                    //
                    try{
                        $value = $data->fetch();
                        $arrData = RegularFIO($value[3]);
                        TempData::$arrUserData["Id"] = $value[0];
                        TempData::$arrUserData["Login"] = $value[1];
                        TempData::$arrUserData["Password"] = $value[2];
                        TempData::$arrUserData["Name"] = $arrData["Name"];
                        TempData::$arrUserData["Surname"] = $arrData["Surname"];
                        TempData::$arrUserData["Patronymic"] = $arrData["Patronymic"];
                        TempData::$arrUserData["Image"] = $value[4];
                        TempData::$arrUserData["Block"] = $value[5];
                        TempData::$arrUserData["Access"] = $value[6];
                    } catch (Exception $ex) {

                    }
                    //TempData::$arrUserData["Login"] = 
                } else{
                    echo "<i>Пользователь не найден</i>";
                }
            }
            $this->CloseDB();
    }
    /*
        htmlspecialchars($str, ENT_QUOTES); 
     * 
     *      */
    
    public function SetComment($id, $raiting ,$comment){
        $this->ConnectDB();
        $sql = "INSERT INTO `feedback` (`User_ID`, `Data`, `Raiting`, `Comment`) "
                . "VALUES({$id},".date("Y-m-d").", {$raiting}, {$comment})";
        $result = ($this->pbo !== null) ? $this->pbo->prepare($sql) : null;
        $result->execute($values);
        
        $this->CloseDB();
        if($values === 1) return true;
        else return false;
        
    }

    //
    //  Разделение строки ФИО
    //
    private function RegularFIO($value){
        $regular = "/([[:alpha:]]+)(\s)([[:alpha:]]+)(\s)([[:alpha:]]+)/u";
        preg_match($regular, $value, $temp);
        $arr = [
            "Name"=>$temp[1],
            "Surname"=>$temp[3],
            "Patronymic"=> $temp[5],
        ];
        
        return $arr;
    }
    #endregion
}
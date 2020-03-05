<?php
    require_once ($_SERVER["DOCUMENT_ROOT"]."/models/TempData.php");
    echo "Personal account<hr>";
    
    // Загрузка сессии
    $userData = TempData::GetArrUserData();
    
    
    if($userData != null){
        echo "Hello";
    } else {
        echo "U don't authenication";
    }
    
?>
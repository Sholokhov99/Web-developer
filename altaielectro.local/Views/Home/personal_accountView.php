<?
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/route.php');
    $result = Route::Start();
    
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/TempData.php');
   
    //require_once ($_SERVER["DOCUMENT_ROOT"].'/scripts/Cookie.php');
    if (isset($_POST['insign'])) TempData::ClearArrUserData();
    $userData = TempData::GetArrUserData();
    if ($userData == null) header('Location: login_registration');

    require_once($_SERVER["DOCUMENT_ROOT"]."/Views/Shaped/default/head.php");
    
?>
<p>Login: <?=$userData['Login']?></p>
    <form method="post">
        <button name="insign" value="ok">Выйти из аккаунта</button>
    </form>
<?require_once($_SERVER["DOCUMENT_ROOT"]."/Views/Shaped/default/footer.php");?>
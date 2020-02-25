<?
    require_once('./scripts/sql.php');
    
    
    if(isset($_POST['auth'])){
        $class_sql = new SQL();
        $class_sql->Auth($_POST['login'], $_POST['password']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Авторизация</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" placeholder="Логин" name="login" />
            <input type="password" placeholder="Пароль" name="password" />
            <button name="auth">Авторизоваться</button>
        </form>
    </body>
</html>
<?
    include_once('./scripts/sql.php');
    include_once('./scripts/TempData.php');
    
    $class_cookie = new Cookie();
    $class_sql = new SQL();
    
    if(isset())
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Простой пример обработки данных из БД</title>
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/media.css" rel="stylesheet" />
    </head>
    <body>
        <header class="top-info">
            <div class="centerContent">
                <div class="info-page">
                    <p>KISSO</p>
                    <p>Обратная связь</p>
                    <span>
                        <img src="#" />
                        <img src="#" />
                        <img src="#" />
                    </span>
                </div>
            </div>
        </header>
        <main>
            <div class="centerContent">
                <!-- Форма отправки комментария-->
                <?php     
                    if(TempData::$IsAuth === true || $class_cookie->GetAuth()){
                        echo '<form method="POST">
                                <textarea class="set-comment" placeholder="Комментарий" name="comment"></textarea>
                                <button name="getcomment">Отправить</button>
                            </form>';
                    } else {
                        echo '<center><h2>Для размещения отзыва необходимо<a href="auth.php">авторизироваться</a></h2></center>';
                    }
                
                ?>

                <hr>
                <!-- Комментарии пользователей -->
                <?php
                    $class_sql->GetFeedBack();
                ?>
                <!--
                    <article class="comment">
                        <span>
                            <picture>
                                <img src="./img/1.jpg" />
                            </picture>
                            <span>
                                <a href="">Dako</a>
                                <p>Шолохов Даниил Сергеевич</p>
                                <p>Тут будет комментарий пользователя</p>
                            </span>
                        </span>
                        <hr />
                        <p>Дата публикации: </p>
                        <p>Оценка: </p>
                        
                    </article>
                    -->
            </div>
        </main>
        <footer style="background: #84817a; height: 30px; width: 100%">
        </footer>
    </body>
</html>
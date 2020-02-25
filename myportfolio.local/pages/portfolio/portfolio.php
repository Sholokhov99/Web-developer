<!-- 
*
*
*   Global setting script
*
*
-->
<?php
    $idCard = 8965;
    $idCard2 = 2;
    $login = "dako";
?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/php/template/head.php'); Head::EchoGetHeadHtml("Портфолио"); ?>
</head>

<body style='background: repeating-linear-gradient(45deg, #606576, var(--load_body) 10px, #7C7E85 10px, #7C7E85 20px);'>
    <!--<body style='background: linear-gradient(to top left, var(--load_body), #7F828D);'>-->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/php/template/top_menu.php'); TopMenu::GetHtmlCodeTopMenu(false); ?>
    <main style='background: rgba(0,0,0,0)'>
        <div class="Layout_Center" >
            <!-- Фильтр -->
            <!--*
                *
                *   Перенести в левую часть
                *
                *-->
            <div class="main_part" >
                <aside class="left_filter">
                    <form method="get">
                        <!-- Сортировка по цене или дате -->
                        <div class="form-row align-items-center" style="display: block">
                            <article class="filter_content  block_user_select">
                                <div class="col-auto my-1">
                                    <div class="title_filter">Сортировать по:</div>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Filter">
                                        <option value="0">В первую очередь самые дорогие</option>
                                        <option value="1">С начала самые дешевые</option>
                                        <option value="2">Самые свежире работы</option>
                                        <option value="3">Первые работы</option>
                                    </select>
                                </div>
                            </article>
                            <!-- Сортировка по направлению работы -->
                            <article class="filter_content block_user_select">
                                <div class="title_filter">Тип проекта:</div>
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="c_sharp-CB" name="c_sharp-CB">
                                    <label class="custom-control-label" for="c_sharp-CB">С#</label>
                                </div>
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="html_css-CB" name="html_css-CB">
                                    <label class="custom-control-label" for="html_css-CB">HTML5&CSS3</label>
                                </div>
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="php-CB" name="php-CB">
                                    <label class="custom-control-label" for="php-CB">PHP</label>
                                </div>
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="js-CB" name="js-CB">
                                    <label class="custom-control-label" for="js-CB">JS</label>
                                </div>
                            </article>
                            <input type="submit" name="apply_filter" class="btn btn-primary color_button" style="display: flex; align-items: flex-end;" value="Применить">
                        </div>
                    </form>
                </aside>
                <!-- News -->
                <?php
                    if(isset($_GET['editCard'])){
                        if($login === "dako"){
                            echo "<h1>Удалить элемиент с id=".$_GET['editCard']."</h1>";
                        } else{
                            echo "<h1>В доступе отказано</h1>";
                        }
                    }
                ?>
                <div class="news">
                <article id="content<?=$idCard?>">
                        <div class="card" style="width: 18rem; box-shadow: 0px 1px 6px 2px var(--main-color-box-shadow);">
                            <img src="../../img/portfolio/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Название карточки</h5>
                                <p class="card-text">Краткое описание данного проекта</p>
                                <ul id="short_info_project">
                                    <li><img class="icon-social" src="<?=Head::GETURL()?>/img/icons/money.png" />Цена: <b>13 500 р.</b></li>
                                    <li><img class="icon-social" src="<?=Head::GETURL()?>/img/icons/accept.png" />Время работы: <b>25 дней</b></li>
                                </ul>
                                <a href="#" class="btn btn-primary color_button">Переход куда-нибудь</a>
                            </div>
                            <footer>
                            <form>
                                <button  id="<?=$idCard?>" name="editCard" value="<?=$idCard?>" onclick="EditCard(<?=$idCard?>)" >edit</button>
                                <button type="submit" name="deleteCard" value="1">delete</button>
                            </form>
                            </footer>
                        </div>
                    </article>
                    <article id="content<?=$idCard2?>">
                        <div class="card" style="width: 18rem; box-shadow: 0px 1px 6px 2px var(--main-color-box-shadow);">
                            <img src="../../img/portfolio/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Название карточки</h5>
                                <p class="card-text">Краткое описание данного проекта</p>
                                <ul id="short_info_project">
                                    <li><img class="icon-social" src="<?=Head::GETURL()?>/img/icons/money.png" />Цена: <b>13 500 р.</b></li>
                                    <li><img class="icon-social" src="<?=Head::GETURL()?>/img/icons/accept.png" />Время работы: <b>25 дней</b></li>
                                </ul>
                                <a href="#" class="btn btn-primary color_button">Переход куда-нибудь</a>
                            </div>
                            <footer>
                            <form>
                                <button  id="<?=$idCard2?>" name="editCard" value="<?=$idCard2?>" onclick="EditCard(<?=$idCard2?>)" >edit</button>
                                <button type="submit" name="deleteCard" value="1">delete</button>
                            </form>
                            </footer>
                        </div>
                    </article>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <!--
            *
            *
            *    Обработка формы
            *
            *
            -->
            <script>
            <?php
                function CheckedTypeProject($jsCode, $name)
                {
                  echo $jsCode;
                  echo ($_REQUEST[$name] == "on") ? "true" : "false"; echo ";\n";
                }
                if(isset($_REQUEST["apply_filter"]))
                {
                    $filter = $_REQUEST["Filter"];
                    //echo "<h1>$filter</h1>";

                    //
                    //  Обработка select
                    //
                    echo "document.getElementById('inlineFormCustomSelect').value = {$_REQUEST['Filter']};";
                    //
                    // Обработка CheckBox типов проектов
                    //

                    // C#
                    CheckedTypeProject("document.getElementById('c_sharp-CB').checked = ", "c_sharp-CB");
                    //  html & css
                    CheckedTypeProject("document.getElementById('html_css-CB').checked = ", "html_css-CB");
                    //  php
                    CheckedTypeProject("document.getElementById('php-CB').checked = ", "php-CB");
                    //  js
                    CheckedTypeProject("document.getElementById('js-CB').checked = ", "js-CB");
                }
            /*
                    Получение GET - запроса
                    var_dump($_SERVER['argv'][0]);
                */
            ?>
           </script>

        </div>

    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/php/template/footer.php'); ?>

</html>

<!-- 
*
*
*   Global setting script
*
*
        <div class="Layout_Center">
            <div class="start_info">
                <p class="my_name">
                    <span style="color: var(--main_color)">Д</span>аниил
                    Шолохов<span style="color: var(--main_color)">.</span>
                </p>
                <p class="my_main_direction">
                    ПРОГРАММИСТ ПОД WINDOWS
                    <br> И ВЕБ-РАЗРАБОТЧИК
                </p>
            </div>
        </div>
-->
<?php
    $str_dirLibrary = __DIR__."/php/";

class Hello{
    public static function GetData(){return "Big data";}
}

    require_once("./test.php");
    $class = new Source();
    echo Source::GetFullUrl();
    /*
    $str_getProtocol = ($_SERVER['HTTPS']) ? "https://" : "http://";
    $str_getFullUrl = $str_getProtocol.$_SERVER['SERVER_NAME'];*/
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/php/template/head.php'); Head::EchoGetHeadHtml("Главная"); ?>
    </head>
    <body>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/php/template/top_menu.php'); TopMenu::GetHtmlCodeTopMenu(true); ?>
    <main>
        <?=$_SERVER['DOCUMENT_ROOT']?>
        <div class="skills ability_shadow" id="skills">
            <div class="Layout_Center">
                <p class="title">
                    <span class="number_title">01</span> НАВЫКИ
                </p>
                <div id="all_ability">
                    <div class="ability">
                        <p class="name_ability">HTML 5</p>
                        <div class="scale_html" id="scale1"></div>
                        <output class="percent_scale" id="percent1"></output>
                    </div>
                    <div class="ability">
                        <p class="name_ability">CSS 3</p>
                        <div class="scale_html" id="scale2"></div>
                        <output class="percent_scale" id="percent2"></output>
                    </div>
                    <div class="ability">
                        <p class="name_ability">PHP 7</p>
                        <div class="scale_html" id="scale3"></div>
                        <output class="percent_scale" id="percent3"></output>
                    </div>
                    <div class="ability">
                        <p class="name_ability">JAVASCRIPT</p>
                        <div class="scale_html" id="scale4"></div>
                        <output class="percent_scale" id="percent4"></output>
                    </div>
                    <div class="ability">
                        <p class="name_ability">C# 7.0</p>
                        <div class="scale_html" id="scale5"></div>
                        <output class="percent_scale" id="percent5"></output>
                    </div>
                    <!--all_ability-->
                </div>
                <!--Layout_Center-->
            </div>
            <!--Skills-->
        </div>
        <article class="portfolio" id="portfolio">
            <div class="Layout_Center">
                <p class="title">
                    <span class="number_title">02</span> ПОРТФОЛИО
                </p>
                <h3 class="description_title">СВЕЖИЕ РАБОТЫ. <a href="/pages/portfolio/portfolio.php">ПОКАЗАТЬ ЕЩЕ ></a></h3>
                <?php

                ?>
                <p class="clear_list">В данный момент список пуст &#9785;</p>
                <!--
                <figure class="portfolio_pictures">
                    <span class="potfolio_effect">
                        <img src="/img/portfolio/1.png" />
                    </span>
                    <span class="potfolio_effect">
                        <img src="/img/portfolio/2.jpg" />
                    </span>
                    <span class="potfolio_effect">
                        <img src="/img/portfolio/3.jpg" />
                    </span>
                </figure>
                -->
            </div>
        </article>
        <article class="back_coupling" id="contacts">
            <p class="title">
                <span class="number_title">03</span> Связь со мной
            </p>
            <div class="form_feedback">
                <form class="feedback">
                    <input class="data" type="text" placeholder="Имя" required/>
                    <input class="data" type="text" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                    <input class="subject" type="text" placeholder="Тема" required/>
                    <textarea class="message" placeholder="Сообщение"></textarea>
                    <input title="Сообщение будет отправлено получателю" class="sub" type="submit" value="Отправить" />
                    <div class="social">
                        <picture>
                            <a href="#" title="Vkontakte"><img class="icon-social" src="./img/icons/icon-vk.png" /></a>
                            <a href="#" title="Skype"><img class="icon-social" src="./img/icons/icon-skype.png" /></a>
                            <a href="#" title="GitHub"><img class="icon-social" src="./img/icons/icon-github.png" /></a>
                        </picture>
                    </div>
                </form>
            </div>
        </article>
        <article id="about_me">
            <p class="title">
                <span class="number_title">04</span> Обо мне
            </p>
            <div class="Layout_Center about">
                <div class="short_about_info">
                    <picture>
                        <img src="./img/myPhoto.jpg" atl="Картинка не загрузилась" />
                    </picture>
                    <p>Шолохов Даниил Сергеевич</p>
                    <p>Возраст: 20 Лет</p>
                </div>
                <div class="main_about_info">
                    <p>
                        В 2019 году закончил обучение в КГБПОУ "АЛТАЙСКИЙ ПРОМЫШЛЕННО-ЭКОНОМИЧЕСКИЙ КОЛЛЕДЖ" на специальность «Программирование в компьютерных системах». В настоящий момент нахожусь в поиске близкого к сердцу направления развития. Данным вектором развития является
                        веб-разработка, и прилагаются максимальные усилия, для качественного изучения и применения знаний в практических целях. В будние дни сижу на работе, а в вечернее время занимаюсь саморазвитием или выполняю полученные заказы на фриланс-бирже
                        или самостоятельно найденных заказчиков. Сейчас ведется разработка полноценного интернет-магазина связанное с рыболовством.

                    </p>
                </div>
            </div>
            <iframe src="https://yandex.ru/map-widget/v1/-/CGAlu4Lp" width="100%" height="600" frameborder="1" allowfullscreen="true"></iframe>
        </article>



    </main>
    <?=require_once($str_dirLibrary.'/template/footer.php');?>
</html>

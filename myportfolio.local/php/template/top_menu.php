<?php
class TopMenu
{
    private function GetUrl() { return Head::GETURL(); }

    public static function GetHtmlCodeTopMenu($bool_isMainPage)
    {
        $thisCLASS = new TopMenu;
        if($bool_isMainPage){
            echo'
            <header id="home-fon">
            <nav id="top_menu">
    <div class="Layout_Center">
        <ul id="menu">
            <a href="#">
                <li class="logo">
                    <img src="'.$thisCLASS->GetUrl().'/img/logo.png" atl="Логотип" />
                </li>
            </a>
            <a href="#header">
                <li>Главная</li>
            </a>
            <a href="#skills">
                <li>Навыки</li>
            </a>
            <a href="#portfolio">
                <li>Портфолио</li>
            </a>
            <a href="#contacts">
                <li>Контакты</li>
            </a>
            <a href="#about_me">
                <li>Обо мне</li>
            </a>
            <a href="">
                <li>Оформить заказ</li>
            </a>
        </ul>
    </div>
</nav>
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
            </header>';
        }
        else{
            echo '
        <header class="style_top_menu">
        <nav id="top_menu">
        <div class="Layout_Center">
            <ul id="menu">
                <a href="">
                    <li class="logo">
                        <img src="'.$thisCLASS->GetUrl().'/img/logo.png" atl="Логотип" />
                    </li>
                </a>
                <a href="'.$thisCLASS->GetUrl().'/index.php#header">
                    <li>Главная</li>
                </a>
                <a href="'.$thisCLASS->GetUrl().'/index.php#skills">
                    <li>Навыки</li>
                </a>
                <a href="'.$thisCLASS->GetUrl().'/index.php#portfolio">
                    <li>Портфолио</li>
                </a>
                <a href="'.$thisCLASS->GetUrl().'/index.php#contacts">
                    <li>Контакты</li>
                </a>
                <a href="'.$thisCLASS->GetUrl().'/index.php#about_me">
                    <li>Обо мне</li>
                </a>
                <a href="">
                    <li>Оформить заказ</li>
                </a>
            </ul>
        </div>
    </nav>
        </header>';
        }
    }
}
/*
$URL =& Head::GETURL();
function WriteMenu($is_main_page)
{
    echo "->".$this::$URL;
    $menu = '
    <nav id="top_menu">
                <div class="Layout_Center">
                    <ul id="menu">
                        <a href="#">
                            <li class="logo">
                                <img src="'.Head::GETURL().'/img/logo.png" atl="Логотип" />
                            </li>
                        </a>
                        <a href="#header">
                            <li>Главная</li>
                        </a>
                        <a href="#skills">
                            <li>Навыки</li>
                        </a>
                        <a href="#portfolio">
                            <li>Портфолио</li>
                        </a>
                        <a href="#contacts">
                            <li>Контакты</li>
                        </a>
                        <a href="#about_me">
                            <li>Обо мне</li>
                        </a>
                        <a href="">
                            <li>Оформить заказ</li>
                        </a>
                    </ul>
                </div>
            </nav>
    ';
    if($is_main_page){
        echo'
        <header id="home-fon">
        '.$menu.'
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
        </header>';
    }
    else{
        echo '
        <header class="style_top_menu">
        <nav id="top_menu">
        <div class="Layout_Center">
            <ul id="menu">
                <a href="'.$GETURL.'">
                    <li class="logo">
                        <img src="'.$GETURL.'/img/logo.png" atl="Логотип" />
                    </li>
                </a>
                <a href="'.$GETURL.'/index.php#header">
                    <li>Главная</li>
                </a>
                <a href="'.$GETURL.'/index.php#skills">
                    <li>Навыки</li>
                </a>
                <a href="'.$GETURL.'/index.php#portfolio">
                    <li>Портфолио</li>
                </a>
                <a href="'.$GETURL.'/index.php#contacts">
                    <li>Контакты</li>
                </a>
                <a href="'.$GETURL.'/index.php#about_me">
                    <li>Обо мне</li>
                </a>
                <a href="">
                    <li>Оформить заказ</li>
                </a>
            </ul>
        </div>
    </nav>
        </header>';
    }
}
*/
?>

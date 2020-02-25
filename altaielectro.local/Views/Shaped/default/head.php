<?php
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/route.php');
    $result = Route::Start();
    require_once ($_SERVER["DOCUMENT_ROOT"].'/Models/TempData.php');

    
    //require_once ($_SERVER["DOCUMENT_ROOT"].'/scripts/Cookie.php');
    $docAcc = (TempData::GetArrUserData() != null) ? 'personal_account': 'login_registration';
    $titleShop = "Название магазина";

    echo '<!DOCTYPE html>
<html>
    <head>
        <title>'.$titleShop.' | Главная</title>
        <link href="/../../../Content/css/style.css" rel="stylesheet" />
        <link href="/../../../Content/css/footer.css" rel="stylesheet" />
        <link href="/../../../Content/css/sliders/slider/sliderStyle.css" rel="stylesheet" />
        <link href="/../../../Content/css/sliders/sliderGods/StyleSliderGods.css" rel="stylesheet" />
        <link href="/../../../Content/css/font-awesome.min.css" rel="stylesheet" />

        <script src="sliderGods/js/SourceSliderGods.js"></script>
    </head>
    <body>
        <header class="top_panel">
            <div class="content_grid">
                <!-- Верхнее горизонтальное меню -->
                <nav class="horizobtal_menu">
                    <li class="logo">
                        <a href="/" >
                            <font class="first_letter">Y</font>ou Logo
                        </a>
                    </li>
                    <!-- Центральная навигация -->
                    <span class="right_content_menu">
                        <li>
                            <li><a href="#" ><font class="first_letter">Г</font>лавная</a></li>
                            <li class="have_dropdown">
                                <a style="display: flex; cursor: pointer" onclick="ViewDropdownMenu("top_dropdown_menu")">
                                    <font class="first_letter">П</font>окупателям
                                    <i class="fa fa-angle-down" aria-hidden="true" style="padding-left: 3px;"></i>
                                </a>
                                <!-- Контекстное меню -->
                                <ul class="dropdown_menu">
                                    <li><a href="#">Тут будет новое меню</a></li>
                                    <li><a href="#">Тут будет новое меню</a></li>
                                    <li><a href="#">Тут будет новое меню</a></li>
                                    <li><a href="#">Тут будет новое меню</a></li>
                                    <li><a href="#">Тут будет новое меню</a></li>
                                    <li><a href="#">Тут будет новое меню</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><font class="first_letter">К</font>онтакты</a></li>

                        </li>
                    </span><!-- CLASS right_content_menu -->

                    <!-- Пункты управления аккаунтом и выделенным товаром -->
                    <!-- Поиск -->
                    <li><i class="fa fa-search" aria-hidden="true"></i></li>
                    <!-- Сравнение -->
                    <li><i class="fa fa-bar-chart" aria-hidden="true"></i></li>
                    <!-- Личный кабинет -->
                    <li><a href="'.$docAcc.'"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <!-- Корзина -->
                    <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                    <!-- Доп. меню -->
                    <li style="margin-right: 0px;"><i class="fa fa-bars" aria-hidden="true" ></i></li>
                </nav><!-- CLASS horizobtal_menu -->
            </div><!-- Content grid -->
        </header>
        <main>
            <div class="content_grid">';

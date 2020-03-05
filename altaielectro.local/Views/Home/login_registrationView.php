<?php
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/TempData.php');
    if(TempData::GetArrUserData() != null) header('Location: PersonalAccount.php');
    
    require_once ($_SERVER["DOCUMENT_ROOT"].'/models/SQL.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="/../../Content/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
        <link href="/../../Content/css/login-registration.css" rel="stylesheet" />
        <link href="/../../Content/css/footer.css" rel="stylesheet" />
        <link href="/../../Content/css/media.css" rel="stylesheet" />
        <link href="/../../Content/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <body>
        <main>
            <div class="content">
                <span>
                    <p>Авторизация & Регистрация</p>
                    <p><a href="/">Главная</a>/Авторизация & Регистрация</p>
                </span>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Авторизация</a>
                        <a class="nav-item nav-link" id="nav-registration-tab" data-toggle="tab" href="#nav-registration" role="tab" aria-controls="nav-registration" aria-selected="false">Регистрация</a>
                    </div>
                </nav>
                <!--
                *
                *   Login
                *
                -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                        <form method="post" action="/models/login-registration/sign.php">
                            <input type="text" placeholder="Логин*" name="login" autocomplete="off"/>
                            <input type="password" placeholder="Пароль*" name="password"/>
                            <div class="tabs-checkbox">
                                <div class="custom-control custom-checkbox my-1 mr-sm-2" >
                                    <input type="checkbox" class="custom-control-input" id="customControlInline" name="RememberMe" value="true">
                                    <label class="custom-control-label" for="customControlInline">Запомнить меня</label>
                                </div>
                                <a href="#"> Забыли пароль?</a>
                            </div>
                            <span>
                                <button type="submit" class="btn btn-primary" name="authenication" value="ok">Авторизация</button>
                            </span>
                        </form>

                    </div>
                   <!-- 
                   *
                   *    Registration
                   *
                   -->
                <div class="tab-pane fade" id="nav-registration" role="tabpanel" aria-labelledby="nav-registration-tab">
                    <form method="post">
                            <input type="text" placeholder="Логин*" name="login" autocomplete="off"/>
                            <input type="password" placeholder="Пароль*" name="password"/>
                            <input type="text" placeholder="Email*" name="mail"/>
                            <div class="tabs-checkbox">
                                <div class="custom-control custom-checkbox my-1 mr-sm-2" >
                                    <input type="checkbox" class="custom-control-input" id="customControlInlinereg" name="authenication" value="ok">
                                    <label class="custom-control-label" for="customControlInlinereg">Запомнить меня</label>
                                </div>
                            </div>
                            <span>
                                <button type="submit" class="btn btn-primary" name="registration">Регистрация</button>
                            </span>
                        </form>
      </div>
                    <div class="additional-authenicational">
                            <p>Или авторизируйтесь через</p>
                            <span>
                                <form>
                                    <button type="button" class="btn social-btn btn-vk">
                                        <i class="fa fa-vk" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn social-btn btn-gmail">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn social-btn btn-mailru">@</button>
                                    
                                    <button type="button" class="btn social-btn btn-facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </span>
                        </div>
    </div>
           </div> 
        </main>
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="/../../scripts/bootstrap/bootstrap.min.js" ></script>
    </body>
</html>

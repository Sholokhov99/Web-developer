<? require_once($_SERVER["DOCUMENT_ROOT"]."/Views/Shaped/default/head.php"); 
    require_once($_SERVER["DOCUMENT_ROOT"]."/models/banners.php"); 
?>

                <!--
                *
                *   Left menu
                *
                -->
                <div style="display: flex;">
                    <nav class="left_menu">
                        <header>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <p>Категории товаров</p>
                        </header>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                        <a href="#"><li>
                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                Категория

                        </li></a>
                    </nav>
                    <!--
                    *
                    *   Slider
                    *
                    -->
                    <div class="slider" id="slider">
                        <div class="slider_angle">
                            <span>
                               <i class="fa fa-angle-left slider_left_angle" aria-hidden="true" onclick="ReturnSlide();"></i>
                            </span>
                            <span id="slide_circle">
                                <i class="fa fa-circle slider_left_angle" aria-hidden="true" onclick="CircleDrive(0);"></i>
                                <i class="fa fa-circle slider_left_angle" aria-hidden="true" onclick="CircleDrive(1);"></i>
                            </span>
                            <span>
                                <i class="fa fa-angle-right slider_left_angle" aria-hidden="true" onclick="NextSlide();"></i>
                            </span>
                        </div>
                        <div id="slide">
                            <img src="/App_Data/img/Sliders/slider/bg/bg-notImg.jpg" alt="Картинка не загрузилась" />
                            <img src="/App_Data/img/Sliders/slider/bg/bg-notImg.jpg" alt="Картинка не загрузилась" />
                        </div>
                    </div>
                </div>
                <span class="banner-full-width">
                    <img src="<?=Banners::Generate1200x300();?>"/>
                </span>
                <!-- Последние ссылки -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><span class="first_letter">Х</span>ит продаж</h3>
                            <span class="block-user-select">
                                <i class="fa fa-angle-left slider_left_angle" aria-hidden="true" onclick="slide1.ReturnSlide();"></i>
                                <i class="fa fa-angle-right slider_left_angle" aria-hidden="true" onclick="slide1.NextSlide();"></i>
                            </span>
                        </div>
                        <div class="slideGods" id="slideGods1">
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>

                          <!--
							              <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                          -->
                        </div>
                    </div>
                </article>
                <article>
                  <span class="banner-full-width">
                      <img src="<?=Banners::Generate1200x300();?>"/>
                  </span>
                </article>
                <!-- Новинки -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><span class="first_letter">Л</span>ичные предложения</h3>
                            <span class="block-user-select">
                                <i class="fa fa-angle-left slider_left_angle" aria-hidden="true" onclick="slide2.ReturnSlide();"></i>
                                <i class="fa fa-angle-right slider_left_angle" aria-hidden="true" onclick="slide2.NextSlide();"></i>
                            </span>
                        </div>
                        <div class="slideGods" id="slideGods2">
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                        </div>
                    </div>
                </article>
                <article>
                  <span class="banner-full-width">
                      <img src="<?=Banners::Generate1200x300();?>"/>
                  </span>
                </article>
                <!-- Хит продаж -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><font class="first_letter">Н</font>овинки</h3>
                            <span class="block-user-select">
                                <i class="fa fa-angle-left slider_left_angle" aria-hidden="true" onclick="slide3.ReturnSlide();"></i>
                                <i class="fa fa-angle-right slider_left_angle" aria-hidden="true" onclick="slide3.NextSlide();"></i>
                            </span>
                        </div>
                        <div class="slideGods" id="slideGods3">
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                        </div>
                    </div>
                </article>
                <article>
                  <span class="banner-full-width">
                      <img src="<?=Banners::Generate1200x300();?>"/>
                  </span>
                </article>
                <!-- Личные предложения -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><font class="first_letter">И</font>стория просмотров</h3>
                            <span class="block-user-select">
                                <i class="fa fa-angle-left slider_left_angle" aria-hidden="true" onclick="slide4.ReturnSlide();"></i>
                                <i class="fa fa-angle-right slider_left_angle" aria-hidden="true" onclick="slide4.NextSlide();"></i>
                            </span>
                        </div>
                        <div class="slideGods" id="slideGods4">
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                          <div class="card">
                            <img src="sliderGods/img/bg192.jpg" alt="Картинка товара" />
                              <div>
                                <p class="name-go"><font>Р</font>убашка из поплина</p>
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <p class="price">3 450 Руб</p>
                              </div>
                          </div>
                        </div>
                    </div>
                </article>
                <script>
                  // Ссылки на слайдеры
                  const slide1 = new SliderGods('slideGods1');
                  const slide2 = new SliderGods('slideGods2');
                  const slide3 = new SliderGods('slideGods3');
                  сonst slide4 = new SliderGods('slideGods4');
                </script>
<?require_once($_SERVER["DOCUMENT_ROOT"]."/Views/Shaped/default/footer.php");?>


<? require_once($_SERVER["DOCUMENT_ROOT"]."/templates/head.php"); ?>

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
                            <img src="./slider/img/bg-1.jpg" alt="Картинка не загрузилась" />
                            <img src="./slider/img/bg-1.jpg" alt="Картинка не загрузилась" />
                        </div>
                    </div>
                </div>
                <span class="banner-full-width">
                    <img src="img/bg/notimage/Banner1200.jpg"/>
                </span>
                <!-- Последние ссылки -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><font class="first_letter">П</font>оследние товары</h3>
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
                      <img src="img/bg/notimage/Banner1200.jpg"/>
                  </span>
                </article>
                <!-- Новинки -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><font class="first_letter">Н</font>овинки</h3>
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
                      <img src="img/bg/notimage/Banner1200.jpg"/>
                  </span>
                </article>
                <!-- Хит продаж -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><font class="first_letter">Х</font>ит продаж</h3>
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
                      <img src="img/bg/notimage/Banner1200.jpg"/>
                  </span>
                </article>
                <!-- Личные предложения -->
                <article>
                    <div class="sliderGods">
                        <div class="title-sliderGods">
                            <h3><font class="first_letter">Л</font>ичные предложения</h3>
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
<?require_once($_SERVER["DOCUMENT_ROOT"]."/template/footer.php");?>

<footer class="footer">
  <div class="content_grid">
    <!-- Нижнее меню -->
    <div class="bottom-links">
      <!-- Блок информации о компании -->
      <ul>
        <a href="#"><li>You Logo</li></a>
        <li>
          <i class="fa fa-map-marker" aria-hidden="true" ></i>
          Россия, Алтайский край, г.Барнаул, ул.Малахова, д.173
        </li>
        <li>
          <i class="fa fa-envelope" aria-hidden="true" ></i>
          sholokhov.daniil@gmail.com
        </li>
        <li>
          <i class="fa fa-phone" aria-hidden="true" ></i>
          +7 (913) 230-98-34
        </li>
        <!-- Ссылки на сацсети -->
        <li class="socials">
          <form>
              <button type="button" class="btn social-btn-cricle btn-vk">
                  <i class="fa fa-vk" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn social-btn-cricle btn-instagram">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
              </button>
              <button type="button" class="btn social-btn-cricle btn-facebook">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
              </button>
          </form>
        </li>
      </ul>
      <!-- Ссылки на страницы -->
      <ul>
        <li class="title">Information</li>
        <li>Page</li>
        <li>Page</li>
        <li>Page</li>
        <li>Page</li>
      </ul>
      <!-- Ссылки на гатегории -->
      <ul>
        <li class="title">Categories</li>
        <li>Category</li>
        <li>Category</li>
        <li>Category</li>
        <li>Category</li>
      </ul>
      <!-- Блок подписки на рассылку -->
      <ul>
        <li class="title">Newsletter</li>
        <li>Подпишитесь на нашу рассылку и получите скидку 10% на первую покупку .</li>
        <li>
          <form method="get">
            <span>
              <input type="email" placeholder="Email" name="newsletter_input" />
              <button type="submit" name="newsletter_sub" class="newsletter-send">
                <img src="/img/icons/send.png" alt="отправить" />
              </button>
            </span>
          </form>
        </li>
      </ul>
    </div> <!-- Class bottom-links -->
    <hr />
    <!-- Информация о разработчике -->
    <div class="info-developer">
        <p>© 2020 Website name | Все права защищены</p>
        <a href="#">Главная</a>
        <a href="#">Контакты</a>
    </div> <!-- Class info-developer -->
  </div> <!-- Class content_grid -->
</footer>

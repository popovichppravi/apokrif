<!doctype html>
<html lang="ru">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="css/fonts.css" >
    <link rel="stylesheet" href="fonts/socicon/style.css">
    <link rel="stylesheet" href="fonts/robotoslab/robotoslab.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <!-- Template CSS -->
    <link rel="stylesheet" href="template_styles.css" >
    <!-- Media CSS -->
    <link rel="stylesheet" href="css/media.css">
    <!--Удалить-->
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    <!--//Удалить-->
  </head>
  <body>
    <!--HEADER-->
    <div class="header">
      <div class="container">
        <div class="top-header">
          <div class="row">
          <div class="col-md-9">
            <!--TOP LOGO-->
            <div class="top-logo">
              <img src="images/logo.png" />
            </div>
            <!--//TOP LOGO-->

            <!--TOP DAY-->
              <?include("include/top_date.php");?>
            <!--//TOP DAY-->

            <!--TOP RATE-->
            <div class="top-rate">
              USD MOEX <b>66,47</b> <span class="down-rate">–0,29</span>  EUR MOEX <b>75,37</b> <span class="up-rate">+0,10</span> | Нефть 55,46 <span class="down-rate">−1,84%</span>
            </div>
            <span></span>
            <!--//TOP RATE-->
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-6">
                <div class="top-links top-tape">
                  <a href="#">Подпишитесь</a>
                  <a href="#">Войти</a>
                </div>
              </div>
              <div class="col-md-6 text-right">
                <div class="social-icons">
                  <ul>
                    <li><a href="#"><span class="socicon-facebook"></span></a></li>
                    <li><a href="#"><span class="socicon-vkontakte"></span></a></li>
                    <li><a href="#"><span class="socicon-odnoklassniki"></span></a></li>
                    <li><a href="#"><span class="socicon-twitter"></span></a></li>
                    <li><a href="#"><span class="socicon-livejournal"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="top-city-name">Санкт-Петербург</div>
                <a href="#" class="change-top-city">Другой город?</a>
                <!--TOP WHEATHER-->
                  <?include("include/top_weather.php");?>
                <!--//TOP WHEATHER-->
              </div>
            </div>
            </div>
            <?//echo "<pre>"; print_r($array); echo "</pre>";?>
          </div>
          </div>
          <div class="top-menu">
             <ul>
               <li class="active"><a href="#">Главное за сегодня</a></li>
               <li><a href="#">Новости</a></li>
               <li><a href="#">Аналитика</a></li>
               <li><a href="#">Россия</a></li>
               <li><a href="#">Заграница</a></li>
               <li><a href="#">Проекты</a></li>
               <li><a href="#">Архив</a></li>
               <li><a href="#">Фотогалерея</a></li>
               <li><a href="#">Видео блог</a></li>
             </ul>
             <div class="top-search">
               <form class="" action="" method="post">
                  <input type="text" name="" value="" placeholder="Поиск">
               </form>
            </div>
          </div>
      </div>
    </div>
    <!--//HEADER-->

    <!--MAIN BANNER-->
    <div class="main-banner">
      <div class="container">
          <a href="#"><img src="images/top-banner.png" alt=""></a>
      </div>
    </div>
    <!--//MAIN BANNER-->

    <!--PAGE CONTENT-->
    <div class="page-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 left-sidebar">
            <!--IMPORTAN NEWS-->
            <div class="item-img-bg important-mark">
              <div class="top-mark-title flash">Важно</div>
              <div class="marked-info">
                <img class="ii-img" src="images/img1.png" alt="" title="">
                <div class="inner-info">
                  <div class="ii-date">10:50</div>
                  <div class="ii-title">В мэрии Екатеринбурга назначат «нового Тунгусова»</div>
                </div>
              </div>
            </div>
            <!--AUTH NEWS-->
            <div class="item-img-bg auth-mark">
              <div class="top-mark-title">Авторская новость</div>
              <div class="marked-info">
                <img class="ii-img" src="images/img1.png" alt="" title="">
                <div class="inner-info">
                  <div class="ii-date">10:50</div>
                  <div class="ii-title">В мэрии Екатеринбурга назначат «нового Тунгусова»</div>
                </div>
              </div>
            </div>
            <!--SIDEBAR LINK NEWS-->
            <div class="sidebar-news-links default-mark">
              <div class="top-mark-title">Новости сегодня</div>
              <div class="marked-info">
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item important">
                  <div class="time">10:32</div>
                  <a href="#">185 лет назад Николаю I впервые представили написанное по его требованию произведение «Молитва... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item important">
                  <div class="time">10:32</div>
                  <a href="#">185 лет назад Николаю I впервые представили написанное по его требованию произведение «Молитва... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item important">
                  <div class="time">10:32</div>
                  <a href="#">185 лет назад Николаю I впервые представили написанное по его требованию произведение «Молитва... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
                <div class="nl-item">
                  <div class="time">10:32</div>
                  <a href="#">В это время организаторы конкурса «Мисс Америка» исключили из программы шоу дефиле в купальниках, а крупные производители... </a>
                </div>
              </div>
            </div>
            <!--SIDEBAR BANNER-->
            <a href="#" class="sidebar-banner">
              <img src="images/img10.png" alt="">
            </a>
            <!--//SIDEBAR BANNER-->
            <div class="default-mark">
              <div class="top-mark-title">Архив новостей</div>
              <div class="marked-info"></div>
            </div>
          </div>
          <div class="col-md-8 pd-l-0">
           <!--TWO ITEMS TOP-->
            <div class="shadow-block default-mark news-today-main">
              <div class="top-mark-title">Новости сегодня</div>
              <div class="marked-info shadow-inner">
                <div class="row">
                  <div class="col-md-6">
                    <div class="item-img-bg">
                        <img class="ii-img" src="images/img2.png" alt="" title="">
                        <div class="inner-info">
                          <div class="ii-date">10:50</div>
                          <div class="ii-title">В мэрии Екатеринбурга назначат «нового Тунгусова»</div>
                          <div class="ii-auth">ТАСС</div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="item-img-bg">
                        <img class="ii-img" src="images/img3.png" alt="" title="">
                        <div class="inner-info">
                          <div class="ii-date">10:50</div>
                          <div class="ii-title">В мэрии Екатеринбурга назначат «нового Тунгусова»</div>
                          <div class="ii-auth">ТАСС</div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--//TWO ITEMS TOP-->

            <!--3 ITEMS TOP-->
            <div class="row m-tb-25">
              <div class="col-md-4">
                <div class="info-item default-mark">
                  <div class="top-mark-title">Политика</div>
                  <div class="item-inner">
                    <a href="#" class="item-img"><img src="images/img4.png" alt=""></a>
                    <div class="item-inner-info">
                      <div class="item-time">10:32</div>
                      <a href="#" class="item-name">Бензиновая диета: на сколько подорожают продукты</a>
                      <a href="#" class="item-auth">ТАСС</a>
                      <div class="item-prev">Ситуация на российском рынке топлива грозит простым потребителям ростом цен в магазинах, в первую... </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-item default-mark">
                  <div class="top-mark-title">Культура</div>
                  <div class="item-inner">
                    <a href="#" class="item-img"><img src="images/img5.png" alt=""></a>
                    <div class="item-inner-info">
                      <div class="item-time">10:32</div>
                      <a href="#" class="item-name">Бензиновая диета: на сколько подорожают продукты</a>
                      <a href="#" class="item-auth">ТАСС</a>
                      <div class="item-prev">Ситуация на российском рынке топлива грозит простым потребителям ростом цен в магазинах, в первую... </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-item important-mark">
                  <div class="top-mark-title">Медиаметрикс</div>
                  <div class="item-inner">
                    <div class="item-inner-info">
                        <ul class="links-list">
                          <li><a href="#"> <img src="images/favicons/fa1.png" alt=""> <span class="item-time">10:32.</span> <span>«Кинопоиск» назвал лучшие сериалы года…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa2.png" alt=""> <span class="item-time">10:32.</span> <span>Инцидент с упавшим во время рейса кондуктором прокомментировали в ИПОПАТ…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa3.png" alt=""> <span class="item-time">10:32.</span> <span>Скончалась девушка, выпавшая из окна многоэтажки на Соминке…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa4.png" alt=""> <span class="item-time">10:32.</span> <span>ВС разъяснил, когда опьянение не является отягчающим обстоятельством…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa5.png" alt=""> <span class="item-time">10:32.</span> <span>В Британии сняли с мели российский сухогруз…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa2.png" alt=""> <span class="item-time">10:32.</span> <span>«Кинопоиск» назвал лучшие сериалы года…</span></a></li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--//3 ITEMS TOP-->

             <!--TWO ITEMS MIDDLE-->
            <div class="row m-tb-25">
              <div class="col-md-6">
                <div class="item-img-bg default-mark">
                  <div class="top-mark-title">Политика</div>
                    <img class="ii-img" src="images/img6.png" alt="" title="">
                    <div class="inner-info">
                      <div class="ii-date">10:50</div>
                      <div class="ii-title">Рейв в Минске 90-х, грязь и ведьмы в театре, Франсуа Озон в Москве</div>
                      <div class="ii-auth">Арсений Тарковский</div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="item-img-bg default-mark">
                  <div class="top-mark-title">Спорт</div>
                    <img class="ii-img" src="images/img7.png" alt="" title="">
                    <div class="inner-info">
                      <div class="ii-date">10:50</div>
                      <div class="ii-title">Мутко лишился поста. Награда нашла героя</div>
                      <div class="ii-auth">Арсений Тарковский</div>
                    </div>
                </div>
              </div>
            </div>
             <!--TWO ITEMS MIDDLE-->

            <!--3 ITEMS TOP-->
            <div class="row">
              <div class="col-md-4">
                <div class="info-item default-mark">
                  <div class="top-mark-title">Политика</div>
                  <div class="item-inner">
                    <a href="#" class="item-img"><img src="images/img4.png" alt=""></a>
                    <div class="item-inner-info">
                      <div class="item-time">10:32</div>
                      <a href="#" class="item-name">Бензиновая диета: на сколько подорожают продукты</a>
                      <a href="#" class="item-auth">ТАСС</a>
                      <div class="item-prev">Ситуация на российском рынке топлива грозит простым потребителям ростом цен в магазинах, в первую... </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="item-img-bg info-item auth-mark">
              <div class="top-mark-title">Авторская колонка</div>
              <div class="marked-info item-inner" style="background:url('images/img9.png'); background-size: cover;">
                <div class="inner-info">
                  <div class="ii-date">10:50</div>
                  <div class="ii-title">Денис Токарский<br /><br /><small>В МЭРИИ ЕКАТЕРИНБУРГА НАЗНАЧАТ «НОВОГО ТУНГУСОВА»</small></div>
                </div>
              </div>
            </div>
              </div>
              <div class="col-md-4">
                <div class="info-item default-mark">
                  <div class="top-mark-title">Общество</div>
                  <div class="item-inner">
                    <a href="#" class="item-img"><img src="images/img11.png" alt=""></a>
                    <div class="item-inner-info">
                      <div class="item-time">10:32</div>
                      <a href="#" class="item-name">Бензиновая диета: на сколько подорожают продукты</a>
                      <a href="#" class="item-auth">ТАСС</a>
                      <div class="item-prev">Ситуация на российском рынке топлива грозит простым потребителям ростом цен в магазинах, в первую... </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--//3 ITEMS TOP-->
            <div class="middle-banner m-tb-25">
              <img src="images/banner.png" alt="">
            </div>
            <!--TWO ITEMS BOTTOM-->
           <div class="row m-tb-25">
             <div class="col-md-6">
               <div class="item-img-bg default-mark">
                 <div class="top-mark-title">Политика</div>
                   <img class="ii-img" src="images/img6.png" alt="" title="">
                   <div class="inner-info">
                     <div class="ii-date">10:50</div>
                     <div class="ii-title">Рейв в Минске 90-х, грязь и ведьмы в театре, Франсуа Озон в Москве</div>
                     <div class="ii-auth">Арсений Тарковский</div>
                   </div>
               </div>
             </div>
             <div class="col-md-6">
               <div class="item-img-bg important-mark">
                 <div class="top-mark-title">Новости партнёров</div>
                   <img class="ii-img" src="images/img7.png" alt="" title="">
                   <div class="inner-info">
                     <div class="ii-date">10:50</div>
                     <div class="ii-title">Мутко лишился поста. Награда нашла героя</div>
                     <div class="ii-auth">Арсений Тарковский</div>
                   </div>
               </div>
             </div>
           </div>
            <!--TWO ITEMS BOTTOM-->

            <!--3 ITEMS TOP-->
            <div class="row m-tb-25">
              <div class="col-md-4">
                <div class="info-item empty-mark">
                  <div class="top-mark-title">&nbsp;</div>
                  <div class="item-inner" style="background:url('images/banner_2.png'); background-size: cover;">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-item empty-mark important-mark">
                  <div class="top-mark-title">&nbsp;</div>
                  <div class="item-inner">
                    <a href="#" class="item-img"><img src="images/img12.png" alt=""></a>
                    <div class="item-inner-info">
                      <a href="#" class="item-name">Тинькофф Платинум</a>
                      <div class="item-prev">Кредитная карта с лимитом до 300 000 Р. Ставка от 12%. Без процентов до 12 месяцев…</div>
                    </div>
                    <div class="bottom-info-inner">
                      <div class="bi-inner">
                        <a href="#">
                          <img src="images/tcs.png" alt=""><span>tinkoff.ru</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-item important-mark">
                  <div class="top-mark-title">Новости ДОМ2</div>
                  <div class="item-inner">
                    <div class="item-inner-info">
                        <ul class="links-list">
                          <li><a href="#"> <img src="images/favicons/fa6.png" alt=""> <span class="item-time">10:32.</span> <span>«Кинопоиск» назвал лучшие сериалы года…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa6.png" alt=""> <span class="item-time">10:32.</span> <span>Инцидент с упавшим во время рейса кондуктором прокомментировали в ИПОПАТ…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa6.png" alt=""> <span class="item-time">10:32.</span> <span>Скончалась девушка, выпавшая из окна многоэтажки на Соминке…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa6.png" alt=""> <span class="item-time">10:32.</span> <span>ВС разъяснил, когда опьянение не является отягчающим обстоятельством…</span></a></li>
                          <li><a href="#"> <img src="images/favicons/fa6.png" alt=""> <span class="item-time">10:32.</span> <span>В Британии сняли с мели российский сухогруз…</span></a></li>

                        </ul>
                    </div>
                    <div class="bottom-info-inner">
                      <div class="bi-inner">
                        <a href="#">
                          <img src="images/dom2.png" alt=""><span>dom2.ru</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--//3 ITEMS TOP-->

          </div>
        </div>
      </div>
    </div>
    <!--PAGE CONTENT-->

    <!--FOOTER-->
    <div class="footer">
      <div class="container">
      <div class="footer-top-info">
        <div class="row">
          <div class="col-md-10 pr-0">
            <div class="bottom-menu">
              <ul>
                <li class="active"><a href="#">Главное за сегодня</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Аналитика</a></li>
                <li><a href="#">Россия</a></li>
                <li><a href="#">Заграница</a></li>
                <li><a href="#">Проекты</a></li>
                <li><a href="#">Архив</a></li>
                <li><a href="#">Фотогалерея</a></li>
                <li><a href="#">Видео блог</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 text-right">
            <div class="social-icons bottom-icons">
              <ul>
                <li><a href="#"><span class="socicon-facebook"></span></a></li>
                <li><a href="#"><span class="socicon-vkontakte"></span></a></li>
                <li><a href="#"><span class="socicon-odnoklassniki"></span></a></li>
                <li><a href="#"><span class="socicon-twitter"></span></a></li>
                <li><a href="#"><span class="socicon-livejournal"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6">
            <!--BOTTOM LOGO-->
            <div class="top-logo">
              <img src="images/logo.png" />
            </div>
            <!--//BOTTOM LOGO-->
          </div>
          <div class="col-md-2">
            <div class="footer-title">Информационное агентство</div>
          </div>
          <div class="col-md-4 text-right">
            <div class="bottom-phone">8 800 300 2001</div>
            <div class="bottom-phone-info">Бесплатный телефон<br />корреспондентской службы</div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-info">
        <div class="row m-tb-25">
          <div class="col-md-3">
<p>© <b>ООО «Апокриф» (2018)</b> информационное анетство</p>
<p>Учредитель: ООО «Апокриф»</p>
<p>Адрес учредителя: 125239, Россия, Москва, Коптевская улица, дом 67</p>
<p>Адрес редакции и издателя: 117105, г. Москва, Варшавское шоссе, д.9, стр.1</p>
<p>Телефон: +7 (495) 785-00-12 Факс: +7 (495) 785-17-01</p>
          </div>
          <div class="col-md-6">
              <div class="apps">
                <a href="#"><img src="images/app-store.png" alt=""></a>
                <a href="#"><img src="images/google-play.png" alt=""></a>
              </div>
<p>Свидетельство о регистрации СМИ Эл № ФС77-67642 выдано федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор) 10.11.2018 г.</p>
<p>Редакция не несет ответственности за достоверность информации, содержащейся в рекламных объявлениях. Редакция не предоставляет справочной информации.</p>
<p><a href="#">Информация об ограничениях</a></p>
          </div>
          <div class="col-md-3">
            <div class="tabl revolv">
              <div class="tbl-cell"><a href="#"><img src="images/revolverart_logo.png" alt=""></a></div>
              <div class="tbl-cell">
                <a href="#">Дизайн бюро "Револьверарт"<br />Программирование<br />+7 902 502 0005</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--//FOOTER-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>

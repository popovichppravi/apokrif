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
              <div class="top-mark-title">Важно</div>
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
              </div>
            </div>
          </div>
          <div class="col-md-8 pd-l-0">
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--PAGE CONTENT-->

    <!--FOOTER-->
    <div class="footer" style="height: 800px;">

    </div>
    <!--//FOOTER-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>

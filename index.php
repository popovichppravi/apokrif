<!doctype html>
<html lang="ru">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="css/fonts.css" >
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
        <div class="row">
          <div class="col-md-6">
            <div class="top-logo">
              <img src="images/logo.png" />
            </div>
          </div>
          <div class="col-md-6 text-left">
            <!--TOP WHEATHER-->
              <?include("include/top_weather.php");?>
            <!--//TOP WHEATHER-->
            <?//echo "<pre>"; print_r($array); echo "</pre>";?>
          </div>
        </div>
        <ul>
          <li><a href="#">1282</a></li>
          <li><a href="#">123</a></li>
          <li><a href="#">123</a></li>
        </ul>
      </div>
    </div>
    <!--//HEADER-->

    <!--PAGE CONTENT-->
    <div class="page-content">
      <h1>Test</h1>
    </div>
    <!--PAGE CONTENT-->

    <!--FOOTER-->
    <div class="footer">

    </div>
    <!--//FOOTER-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="شاخص کیفیت هوای شهرهای جهان">
    <meta name="description" content="شاخص کیفیت هوا">
    <meta name="keywords" content="شاخص کیفیت هوا,air quality index">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/Style_001.css" rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Nickweb Air Quality</title>
  </head>
  <body>

    <div class="links site_top">
      <h1 id="page_title">نمایش شاخص کیفیت هوای شهرهای جهان
      <img id="logo" src="img/logo.jpg" alt="logo" width="60px" height="60px" />
      </h1>
    </div>

      

    <nav class="navbar navbar-expand-lg" id="navigation">
      <div class="container">
        <a class="btn btn-xs btn-outline-light about_btn" href="index.php" style="margin-right: 0px !important;">خانه</a>
        <a class="btn btn-xs btn-outline-light about_btn" href="about.php">درباره ما <span class="sr-only">(current)</span></a>
        <button class="navbar-toggler" id="btn_collapse" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0" method="POST" action="index.php">
            <input class="form-control mr-sm-2" id="city_input" type="search" placeholder="نام شهر را وارد کنید" aria-label="Search" name="city">
            <button class="btn btn-xs btn-outline-light my-2 my-sm-0 search_btn" type="submit">جستجو</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
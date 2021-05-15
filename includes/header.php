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

    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="css/Style_001.css" rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
    <script src="js/chart.js"></script>
    <title>Nickweb Air Quality</title>
</head>

<body>

    <div class="links site_top">
        <div class="container">
            <h1 id="page_title">نمایش شاخص کیفیت هوای شهرهای جهان
            </h1>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg" id="navigation">
        <div class="container">
            <a class="btn btn-xs btn-outline-light about_btn" href="index.php"
                style="margin-right: 0px !important;">خانه</a>
            <a class="btn btn-xs btn-outline-light about_btn" href="about.php">درباره ما <span
                    class="sr-only">(current)</span></a>
            <button class="navbar-toggler" id="btn_collapse" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST" action="index.php">
                    <input class="form-control mr-sm-2 search_input" id="city_input" type="search" size="11"
                        placeholder="نام شهر را وارد کنید" onfocus="this.placeholder=''"
                        onblur="this.placeholder='نام شهر را وارد کنید'" aria-label="Search" name="city">
                    <button class="custom" type="submit">
                        <!-- <img src="img/search_icon.png" alt="" width="20"> -->
                        <i class="fa fa-search" aria-hidden="true"></i>

                    </button>
                </form>

            </div>
        </div>
    </nav>

    <div class="container">
        <hr>

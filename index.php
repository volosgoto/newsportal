<?php
//echo 'Hello news portal';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Новостной портал">
    <meta name="description" content="Новости">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Главная страница сайта</title>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        [class*="col-"] {
            background-color: #f6f6f6;
            border: 2px solid black;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 2em;
        }
    </style>
</head>
<body>
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-12"><p>
             <p>
                 <?php require_once 'menu.php'?>
             </p>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12">
             <p> Карусель
                 <?php // Карусель ?>
<!--             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
<!--                 <ol class="carousel-indicators">-->
<!--                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
<!--                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
<!--                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
<!--                 </ol>-->
<!--                 <div class="carousel-inner">-->
<!--                     <div class="carousel-item active">-->
<!--                         <img class="d-block w-100" src="..." alt="First slide">-->
<!--                     </div>-->
<!--                     <div class="carousel-item">-->
<!--                         <img class="d-block w-100" src="..." alt="Second slide">-->
<!--                     </div>-->
<!--                     <div class="carousel-item">-->
<!--                         <img class="d-block w-100" src="..." alt="Third slide">-->
<!--                     </div>-->
<!--                 </div>-->
<!--                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                     <span class="sr-only">Previous</span>-->
<!--                 </a>-->
<!--                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--                     <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                     <span class="sr-only">Next</span>-->
<!--                 </a>-->
<!--             </div>-->
             </p>
         </div>
     </div>
     <div class="row">
         <div class="col-md-2"><p>Реклама левый блок</p></div>
         <div class="col-md-8">
             <p>Основной контент</p>
             <?php require_once 'pages.php'?>
         </div>
         <div class="col-md-2"><p>Реклама правый блок</p></div>
     </div>
     <div class="row">
         <div class="col-md-12">Футер</div>
     </div>
 </div>







</body>
</html>

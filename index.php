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
    <style>
        [class*="col-"] {
            background-color: darkgray;
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
         <div class="col-md-12"><p>Хедер</p></div>
     </div>
     <div class="row">
         <div class="col-md-12">
             <p>
                 <?php require_once 'menu.php'?>

                 </p>
         </div>
     </div>
     <div class="row">
         <div class="col-md-2"><p>Реклама левый блок</p></div>
         <div class="col-md-8"><p>Основной контент</p></div>
         <div class="col-md-2"><p>Реклама правый блок</p></div>
     </div>
     <div class="row">
         <div class="col-md-12">Футер</div>
     </div>
 </div>




<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

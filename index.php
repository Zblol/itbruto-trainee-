<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IT-Bruto</title>
    <link type="text/css" rel="stylesheet" href="style/style.css">
</head>
<body>

<div id="levels">

    <p class="point">Junior </p>
    <p class="point" style="padding-right: 5px; padding-left: 5px"> Middle </p>
    <p class="point" style="border-right: 0px"> Senior </p>

</div>


    <h2 class="head_title">Тестовое задание для Junior веб-разработчика</h2>


    <div class="preview">

        <p>Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.<br/>
            Ознакомиться со списком актуальных вакансий можно
            по ссылке: <a href=" https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a></p>

    </div>

    <div class="about_company">
        <p id="leftcolum">Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на
            платформе "1С-Битрикс".
            Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий
            высокий спрос,
            позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.</p>

        <p id="rigthcolum">У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа.
            Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие
            программисты имеют в своем распоряжении iMac Retina и AirPods,
            а освещением и кондиционером в офисе управляет Яндекс.Алиса =)</p>
    </div>

<img id="logo" src="style/img/logo2.png">
    <div class="lastview">


        <p> Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших
            базовых знаний (HTML+CSS).
            На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика,
            frontend надо знать на базовом уровне и понимать как он устроен.</p>
    </div>

    <div class="footer">

        <p>© 2009-2019 IT-Bruto</p>

    </div>

<img id="cloud" src="style/img/cloud.png">

<script src="js/script.js"></script>
<?php

include("ArrayWorker.php");
    $obj = new ArrayWorker();
    echo $obj->dump();
?>
</body>
</html>
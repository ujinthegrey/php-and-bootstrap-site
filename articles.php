<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Сайт на PHP за час</title>
</head>
<body class="bg-light">

    <?php require "./blocks/header.php" ?>

    <div class="container">
        <h1 class="mt-5 mb-5">Наши статьи</h1>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

        <?php
            for($i = 0; $i<5; $i++):
        ?>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">О пользе морковки</h4>
                    </div>
                    <div class="card-body">
                    <img src="./img/carrot0<?php echo ($i + 1); ?>.jpg" alt="carrot" class="img-thumbnail"/>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>10 причин есть морковь</li>
                        <li>2 новых рецепта морковки</li>
                        <li>Помощь в поиске морковки</li>
                        <li>Морква в творчестве Пушкина</li>
                        <li>7 стихий морквы</li>
                        <li>Морква в интернет-магазинах</li>
                        <li>Я стал новым человеком!</li>
                        <li>Скажу честно, я - Морковный человек</li>
                        <li>Новая модель МОРК-42</li>
                        </ul>
                        <a href="/article.php" class="w-100 btn btn-lg btn-outline-primary">Читать сейчас!</a>
                    </div>
                </div>
            </div>
                   
        <?php
            endfor;
        ?>

    </div>
    </div>
    
    <?php require "./blocks/footer.php" ?>

</body>
</html>
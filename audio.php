<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Аудио</title>
</head>
<body class="bg-light">

    <?php require "./blocks/header.php" ?>

    <div class="container">
        <h1 class="mt-5 mb-5">Как звучит морковь?</h1>

        <p>Морковь "Тушон"</p>
        <audio controls>
            <source src="audio/figaro.mp3" type="audio/mpeg">
            Тег audio не поддерживается вашим браузером. 
            <a href="audio/figaro.mp3">Скачайте музыку</a>.
        </audio>
        <br><br><br>
        <p>Морковь "Амстердамская"</p>
        <audio controls>
            <source src="audio/caazapa.mp3" type="audio/mpeg">
            Тег audio не поддерживается вашим браузером. 
            <a href="audio/caazapa.mp3">Скачайте музыку</a>.
        </audio>
       
    </div>
    
    <?php require "./blocks/footer.php" ?>

</body>
</html>
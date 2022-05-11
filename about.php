<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Связаться с нами</title>
</head>
<body class="bg-light">
   
    <?php require "./blocks/header.php" ?>

  <div class="container">
    <h1 class="mt-5 mb-5">Связаться с нами</h1>
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Введите ваш email" class="form-control" required>
      <br>
      <textarea name="message" class="form-control" placeholder="Введите ваше сообщение" required></textarea>
      <br>
      <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
  </div>
    

  <?php require "./blocks/footer.php" ?>

</body>
</html>
<?php

    if(isset($_POST['x'])) {
        $x = $_POST['x'];
    } else {
        $x = 0;
    }
    
    if(isset($_POST['y'])) {
        $y = $_POST['y'];
    } else {
        $y = 0;
    }

    if(isset($_POST['operation'])) {
        $op = $_POST['operation'];

        switch($op) {
            case '+': 
            $res = $x + $y;
            break;

            case '-': 
            $res = $x - $y;
            break;

            case '*': 
            $res = $x * $y;
            break;

            case '/': 
            $res = $x / $y;
            break;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="col-lg-12">
            <ul class="nav nav-pills">
                <li><a href="/index.php" class="glyphicon glyphicon-home"></a></li>
                <li><a href="/news.html">Новости</a></li>
                <li><a href="/gallery.php">Фотогалерея</a></li>
                <li><a href="/guestbook.php">Гостевая</a></li>
                <li><a href="/about.html">Обо мне</a></li>
                <li><a href="/calc.php">Калькулятор</a></li>
            </ul>
        </nav>

    <form action="/calc.php" method="post">
        X=<input type="number" name="x">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        Y=<input type="number" name="y">
        <button type="submit">=</button>
    </form>
   <h4>Результат:<?php echo $res; ?></h4>
</body>
</html>
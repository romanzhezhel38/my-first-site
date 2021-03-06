<?php
    include __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая</title>
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

        <div class="container">
                <div class="row">
                <?php 

                    $data = file_get_contents(__DIR__ . '/data/db.txt');
                    $lines = explode('###', $data);
                    ?>

                    <?php
                        foreach($lines as $line) {
                        ?>
                        <article><?php echo $line; ?></article>
                        <hr>
                        <?php
                        }
                    ?>

                    <form action="/add.php" method="post">
                    <textarea name="record"></textarea>
                    <button type="submit">Добавить запись</button>
                    </form>
                </div>
        </div>

                <button class="btn btn-success"><a href="/index.php">На главную</a></button>

</body>
</html>
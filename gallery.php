<?php
    include __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фотогаллерея</title>
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
            <div class="page-gallery">
                <div class="row">
                    <?php 
                    
                        $images = scandir(__DIR__ . '/img/');
                    
                    ?>

                    <?php
                    
                        foreach ($images as $image) {
                            if('.' == $image || '..' == $image) {
                                continue;
                            }
                            ?>
                            <img src="/img/<?php echo $image; ?>">
                            <hr>
                            <?php
                            }                    
                    ?>
                </div>
            </div>
        </div>

        <form action="/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">    
            <button type="submit">Добавить картинку</button>
        </form>

        
        <button class="btn btn-success"><a href="/index.php">На главную</a></button>

</body>
</html>
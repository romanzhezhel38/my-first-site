
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
                <li><a href="/gallery.html">Фотогалерея</a></li>
                <li><a href="/guestbook.php">Гостевая</a></li>
                <li><a href="/about.html">Обо мне</a></li>
            </ul>
        </nav>

        <div class="container">
                <div class="row">
                    <h3>Комментарии</h3>
                    <img src="/img/iphone.jpg" alt="iphone">
                    <p class="comment"><span><strong>Alex: </strong></span>Что лучше купить iphone 7 или iphon 8?</p>
                         <a href="/comment.php?id=1">Полностью</a>
                    <hr>
                    <p class="comment"><span><strong>John: </strong></span>Лучше купить телефон на Androd.</p>
                    <a href="/comment.php?id=2">Полностью</a>
                    <hr>
                    <p class="comment"><span><strong>Alex: </strong></span>Спасибо!</p>
                    <a href="/comment.php?id=3">Полностью</a>
                </div>
        </div>


        <hr>
        <div class="container">
            <form>

                <div class="form-group">
                    <label>Name</label>
                    <span class="glyphicon glyphicon-ok"></span>
                    <input type="text" class="form-control" placeholder="Написать имя">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <span class="glyphicon glyphicon-envelope"></span>
                    <input type="email" class="form-control" placeholder="Написать Email">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <span class="glyphicon glyphicon-pencil"></span>
                    <textarea class="form-control" placeholder="Добавить комментарий"></textarea>
                </div>


                <hr>
                <button class="btn btn-success"><a href="/index.php">На главную</a></button>

</body>
</html>
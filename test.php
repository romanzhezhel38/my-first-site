<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
    
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

</body>
</html>
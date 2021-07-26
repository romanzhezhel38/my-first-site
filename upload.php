<?php

if (isset($_FILES['image'])) {
    
    if ('image/jpg' != $_FILES['image']['type'] && 'image/png' != $_FILES['image']['type']) {
        echo 'Загрузить можно картинку только формата jpg или png';
    }

    if (0 == $_FILES['image']['error']) {
       $path = __DIR__ . '/img/' . $_FILES['image']['name'];

       move_uploaded_file($_FILES['image']['tmp_name'], $path);
    }
}
?>
<a href="/gallery.php">В галлерею</a>
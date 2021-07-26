<?php
$lines = file(__DIR__ . '/data/db.txt', FILE_IGNORE_NEW_LINES);

$data = file_get_contents(__DIR__ . '/data/db.txt');
$lines = explode('###', $data);

$lines[] = $_POST['record'];

$data = implode('###', $lines);
file_put_contents(__DIR__ . '/data/db.txt', $data);
?>

<a href="/guestbook.php">На главную</a>

<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo 'DBエラー： ' . $e->getMessage();
}


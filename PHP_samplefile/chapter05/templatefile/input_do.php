<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>Prectice</h2>

<?php
try {
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo 'DB接続エラー: ' . $e->getMesassage();
}

//$statement = $db->prepare('INSERT INTO memos SET memo=?,created_at=NOW()');
//$statement->execute(array($_POST['memo']));
//echo 'メモが登録されました';

$statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
$statement ->bindParam(1, $_POST['memo']);
$statement ->execute();

$statement = $db->prepare('SELECT * FROM memos LIMIT ?');
$limit =5;
$statement->bindParam(1, $limit, PDO::PARAM_INT);
$statement->execute();



?>


</main>
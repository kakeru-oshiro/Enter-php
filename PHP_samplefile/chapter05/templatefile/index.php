<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>Practice</h2>

<form action="input_do.php" method="post">
    <textarea name="memo" cols="50" rows="10" placeholder="自由にメモを残してください"></textarea><br>
    <button type="submit">登録する</button>
</form>

<pre>
<?php
/* ここに、PHPのプログラムを記述します */
// try {$db = new PDO ('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root','');
// } catch (PDOException $e) {
//     echo 'DB接続エラー: '.$e->getMessage();
// }

// $count = $db -> exec('INSERT INTO my_items SET maker_id=1, item_name="もも",
// price=210, keyword="缶詰,ピンク,甘い", sales=0, created="2018-01-23",
// modified="2018-01-23"');
// echo $count . '件のデータを挿入しました。';

// $count = $db->exec('UPDATE my_items SET item_name = "白桃" WHERE id = 5');
// echo $count . '件変更しました';

// $count = $db->exec('DELETE FROM my_items WHERE id=5');
// echo $count . '件削除しました';

// try {
//     $db = new PDO ('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');
// } catch(PDOException $e) {
//     echo 'DB接続エラー; ' . $e->getMessage();
// }

// $records = $db->query('SELECT * FROM my_items');
//( while ($record = $records->fetch()) {
//     print($record['item_name'] . " ");
//     print($record['price'] . "\n");
// }

// $records = $db->query('SELECT COUNT(*) FROM my_items');
// $record = $records -> fetch();
// print('件数は、'. $record['COUNT(*)'] . '件です');

// $records = $db -> query('SELECT COUNT(*) AS record_count FROM my_items');
// $record = $records->fetch();
// print('件数は、' . $record['record_count'] . '件です');






?>
</body>    
</html>
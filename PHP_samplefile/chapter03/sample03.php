<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
</header>

<main>
<h2>画面に現在の時刻を表示する</h2>
<pre>
<?php
date_default_timezone_set('Asia/Tokyo');
print('現在は ' . date('G時 i分 s秒') . ' です');
print("\n");
print(date('s'));
print("\n");
print(date('i'));
print("\n");
print(date('G'));
print('時');
print(date('i'));
print('分');
print(date('s'));
print('秒');
print("\n");
print('現在は');
print(date('G時 i分 s秒'));
print('です');
print("\n");
print("現在は date('G時 i分 s秒') です");
print("\n");
print("現在は".date('G時 i分 s秒'. "です。"));
print("\n");
print('1+1は'.(1+1).'です');
print("\n");
print('今日は'.date("Y年 n月 j日").'です');

?>
</pre>
</main>
</body>    
</html>
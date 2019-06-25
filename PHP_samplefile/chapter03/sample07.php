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
<h2>1年後までのカレンダーを作成する</h2>
<pre>
<?php
// for ($i=1; $i<=365; $i++) {
//     $day = date('n/j(D)', strtotime('+' . $i . 'day'));
//     print ($day . "\n");
// }
// for ($i = 1; $i <= 365; $i++) {
//     $day = date('n/j(D)', strtotime('+'.$i.'day'));
//     print($day."\n");
// }
// $day = date('n/j(D)');
// print($day."\n");
// $time = time();
// print($time."\n");
// $day = date('n/j(D)', 86400);
// print($day."\n");
// $ieyasu = strtotime('1543/1/31');
// $day_after_tomorrow = strtotime('+2day');
// $day = date('n/j(D)', $day_after_tomorrow);
// print($day."\n");
// for ($i =1; $i <= 365; $i++) {
//     $timestamp = strtotime('+'.$i.'day');
//     $day = date('n/j(D)', $timestamp);
//     print($day."\n");
// }
// 
$i = 1;
while ($i <= 365) {
    $timestamp = strtotime('+'.$i.'day');
    $day = date('n/j(D)', $timestamp);
    print($day."\n");
    $i++;
}
?>
</pre>
</main>
</body>    
</html>
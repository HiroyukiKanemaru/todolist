<?php
$random_number = rand(1, 5);

if ($random_number === 1) {
    $resule = "大吉";
} else if ($random_number === 2) {
    $resule = "小吉";
} else if ($random_number === 3) {
    $resule = "吉";
} else  if ($random_number === 4) {
    $resule = "凶";
} else {
    $resule = "大凶";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>今日の運勢は<?= $resule ?>です！</h1>
</body>

</html>
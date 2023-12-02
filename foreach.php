<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title></title>
</head>

<body>
  <p>
    <?php
      $Goods = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
      foreach ($Goods as $key => $value) {
        echo "{$key} : {$value} <br>";
      }
    ?>
  </p>
</body>

</html>
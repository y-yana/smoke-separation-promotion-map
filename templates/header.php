<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../static/style/style.css">
    <title><?php echo $title ?></title>
  </head>
  <body>

  <?php
  // DB接続
  require('./env.php');
  ?>

  <header>
    <h1>分煙促進マップ</h1>
    <p>分煙で煙活に。</p>
  </header>

  <div id="myMap" style="width:600px;height:500px"></div>

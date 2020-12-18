<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../static/style/style.css">
    <title><?php echo $title ?></title>
  </head>
  <body>

  <?php
  // DB接続
  require('./env.php');
  ?>

  <header>
    <span>
      <h1 onclick="location.href='./index.php'">分煙促進マップ</h1>
      <span id="tagline">
        <p>分煙で煙活に</p>
        <i class="material-icons">help_outline</i>
      </span>
    </span>
  </header>

  <div class="displayMap">
    <div id="myMap"></div>

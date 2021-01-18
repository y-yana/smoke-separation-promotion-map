<?php header('X-FRAME-OPTIONS: SAMEORIGIN'); ?>

<!DOCTYPE html>
<html lang="ja">
  <head prefix=”og:http://ogp.me/ns#”>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:url" content="https://buturi.heteml.net/webPractice/2020/bunnen/templates/<?php echo $url ?>" />
    <meta property="og:type" content="<?php echo $type ?>" />
    <meta property="og:title" content="分煙促進マップ <?php echo $title ?>" />
    <meta property="og:description" content="最寄りの喫煙所を手軽に検索することができるWebアプリケーションです。" />
    <meta property="og:site_name" content="分煙促進マップ" />
    <meta property="og:image" content="https://buturi.heteml.net/webPractice/2020/bunnen/static/image/OGP.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../static/style/style.css">
    <link rel="shortcut icon" href="../static/image/favicon.ico" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
  </head>
  <body>

  <?php
  // DB接続
  require('./env.php');

  // Google Maps APIキー
  require('./envAPI.php');
  ?>

  <header>
    <span>
      <h1 onclick="location.href='./index.php'">分煙促進マップ</h1>
      <span id="tagline">
        <p>分煙で煙活に</p>
        <i class="material-icons js-modal-open">help_outline</i>
      </span>
    </span>
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
            <p><b>「分煙で煙活に」とは？</b><br>１：エンカツの字に一般的に使用される<span class="bold">「円滑」</span><br>２：喫煙者・非喫煙者の繋がりを大事にするという意味の<span class="bold">「縁活」</span><br>３：受動喫煙をさせないために煙を割くという意味の<span class="bold">「煙割」</span><br>エンカツには以上の３つの当て字があり、円滑に分煙を促進してたばこを吸う人と吸わない人を結びたいという思いが込められています。</p>
            <a class="js-modal-close" href="">閉じる</a>
        </div>
    </div>
  </header>

  <div class="displayMap">
    <div id="myMap"></div>

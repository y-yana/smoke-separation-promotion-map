<?php

  // DB接続
  require('env.php');

  // セッション開始
  session_start();

  // sql文を格納
  $sql='SELECT * FROM smokingMap WHERE
  placeName LIKE "%'.$_POST['placeName'].'%" AND
  roof='.$_POST['roof'].' AND
  bench='.$_POST['bench'].' AND
  enclosure='.$_POST['enclosure'].' AND
  cigaretteSale='.$_POST['cigaretteSale'].' AND
  drinkSale='.$_POST['drinkSale'].' AND
  cigarette='.$_POST['cigarette'].' AND
  outdoor='.$_POST['outdoor'];

  // sql文を実行
  $results=$mysqli->query($sql);

  foreach ($results as $row){
    // 各情報をセッション変数に格納する
    $_SESSION['placeName'] = $row['placeName'];
    $_SESSION['lat'] = $row['lat'];
    $_SESSION['lng'] = $row['lng'];
    $_SESSION['roof'] = $row['roof'];
    $_SESSION['bench'] = $row['bench'];
    $_SESSION['enclosure'] = $row['enclosure'];
    $_SESSION['cigaretteSale'] = $row['cigaretteSale'];
    $_SESSION['drinkSale'] = $row['drinkSale'];
    $_SESSION['cigarette'] = $row['cigarette'];
    $_SESSION['outdoor'] = $row['outdoor'];
    $_SESSION['message'] = $row['message'];
  }

  // ページ遷移
  header("location: result.php");

?>

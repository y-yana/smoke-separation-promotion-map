<?php

  // DB接続
  require('env.php');

  // sql文を格納
  $sql='INSERT INTO smokingMap(
    placeName,
    lat,
    lng,
    startTime,
    endTime,
    roof,
    bench,
    enclosure,
    cigaretteSale,
    drinkSale,
    cigarette,
    outdoor,
    message
    )
    VALUES(
    "'.$_POST['placeName'].'",
    '.$_POST['lat'].',
    '.$_POST['lng'].',
    "'.$_POST['startTime'].'",
    "'.$_POST['endTime'].'",
    "'.$_POST['roof'].'",
    "'.$_POST['bench'].'",
    "'.$_POST['enclosure'].'",
    "'.$_POST['cigaretteSale'].'",
    "'.$_POST['drinkSale'].'",
    "'.$_POST['cigarette'].'",
    "'.$_POST['outdoor'].'",
    "'.$_POST['message'].'"
  )';

  // sql文を実行
  $results=$mysqli->query($sql);

  // DB接続を終了
  $mysqli->close();

  // ページ遷移
  header("location: index.php");

?>

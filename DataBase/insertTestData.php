  <?php

  // DB接続
  require('../templates/env.php');

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
    "セブンイレブン東広島高美が丘店",
    34.451666993628685,
    132.78682775507812,
    "0000",
    "2359",
    "あり",
    "なし",
    "なし",
    "あり",
    "あり",
    "全て",
    "屋外",
    "駐車場が広くて便利です。"
  )';

  // sql文を実行
  $results=$mysqli->query($sql);

  // DB接続を終了
  $mysqli->close();

  ?>

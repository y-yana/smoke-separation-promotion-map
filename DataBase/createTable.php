  <?php

  // DB接続
  require('../templates/env.php');

  // sql文を格納
  $sql='CREATE TABLE smokingMap(
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    placeName VARCHAR(30),
    lat DOUBLE(9,6),
    lng DOUBLE(9,6),
    startTime VARCHAR(6),
    endTime VARCHAR(6),
    roof ENUM("あり","なし","不明"),
    bench ENUM("あり","なし","不明"),
    enclosure ENUM("あり","なし","不明"),
    cigaretteSale ENUM("あり","なし","不明"),
    drinkSale ENUM("あり","なし","不明"),
    cigarette ENUM("全て","電子タバコのみ","不明"),
    outdoor ENUM("屋外","屋内","不明"),
    message VARCHAR(500)
  )';

  // sql文を実行
  $results=$mysqli->query($sql);

  // DB接続を終了
  $mysqli->close();

  ?>

  <?php

  // DB接続
  require('../templates/env.php');

  // sql文を格納
  $sql='CREATE TABLE smokingMap(
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    placeName VARCHAR(30),
    lat DOUBLE(9,6),
    lng DOUBLE(9,6),
    startTime VARCHAR(4),
    endTime VARCHAR(4),
    roof ENUM("Y","N","unknown"),
    bench ENUM("Y","N","unknown"),
    enclosure ENUM("Y","N","unknown"),
    cigaretteSale ENUM("Y","N","unknown"),
    drinkSale ENUM("Y","N","unknown"),
    cigarette ENUM("all","electronic","unknown"),
    outdoor ENUM("outdoor","indoor","unknown"),
    message VARCHAR(500)
  )';

  // sql文を実行
  $results=$mysqli->query($sql);

  // DB接続を終了
  $mysqli->close();

  ?>

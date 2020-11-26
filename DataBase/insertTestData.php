  <?php

  // DB接続
  require('../templates/env');

  // sql文を格納
  $sql='';

  // sql文を実行
  $results=$mysqli->query($sql);

  // DB接続を終了
  $mysqli->close();

  ?>

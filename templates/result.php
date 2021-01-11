<?php
  $title = 'ResultPage';
  $url = 'result.php';
  $type = 'article';
?>

<?php include('./header.php'); ?>

  <?php
    // DB接続
    require('env.php');

    // セッション開始
    session_start();

    $sql = $_SESSION['postForm'];

    // sql文を実行
    $results=$mysqli->query($sql);

    echo '<div class="searchArea"><button class="pageMoveBtn" onclick="location.href='."'./index.php'".'">検索画面に戻る</button><div class="tableArea">';

    foreach ($results as $row){
      echo '
      <span class="tableMargin">
      <table>
        <tr>
          <td colspan="2" align="center">'.$row['placeName'].'</td>
        </tr>
        <tr>
          <td align="right">利用可能時間：</td>
          <td align="left">'.$row['startTime'].'～'.$row['endTime'].'</td>
        </tr>
        <tr>
          <td align="right">屋根：</td>
          <td align="left">'.$row['roof'].'</td>
        </tr>
        <tr>
          <td align="right">ベンチ：</td>
          <td align="left">'.$row['bench'].'</td>
        </tr>
        <tr>
          <td align="right">囲い：</td>
          <td align="left">'.$row['enclosure'].'</td>
        </tr>
        <tr>
          <td align="right">タバコの自販機：</td>
          <td align="left">'.$row['cigaretteSale'].'</td>
        </tr>
        <tr>
          <td align="right">飲料の自販機：</td>
          <td align="left">'.$row['drinkSale'].'</td>
        </tr>
        <tr>
          <td align="right">利用できるタバコ：</td>
          <td align="left">'.$row['cigarette'].'</td>
        </tr>
        <tr>
          <td align="right">設置場所：</td>
          <td align="left">'.$row['outdoor'].'</td>
        </tr>
        <tr>
          <td colspan="2"  align="center">'.$row['message'].'</td>
        </tr>
      </table>
      </span>';
  }

  echo '</div></div>';

  ?>

</div>

<?php include('./footer.php'); ?>

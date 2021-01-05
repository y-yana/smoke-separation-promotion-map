<?php $title = 'ResultPage'; ?>
<?php include('./header.php'); ?>

  <?php
    // DB接続
    require('env.php');

    // セッション開始
    session_start();

    $sql = $_SESSION['postForm'];

    // sql文を実行
    $results=$mysqli->query($sql);

    foreach ($results as $row){
      echo '
      <table>
        <tr>
          <td colspan="2">'.$row['placeName'].'</td>
        </tr>
        <tr>
          <td>利用可能時間</td>
          <td>'.$row['startTime'].'～'.$row['endTime'].'</td>
        </tr>
        <tr>
          <td>屋根：</td>
          <td>'.$row['roof'].'</td>
        </tr>
        <tr>
          <td>ベンチ：</td>
          <td>'.$row['bench'].'</td>
        </tr>
        <tr>
          <td>囲い：</td>
          <td>'.$row['enclosure'].'</td>
        </tr>
        <tr>
          <td>タバコの自販機：</td>
          <td>'.$row['cigaretteSale'].'</td>
        </tr>
        <tr>
          <td>飲料の自販機：</td>
          <td>'.$row['drinkSale'].'</td>
        </tr>
        <tr>
          <td>利用できるタバコ：</td>
          <td>'.$row['cigarette'].'</td>
        </tr>
        <tr>
          <td>設置場所：</td>
          <td>'.$row['outdoor'].'</td>
        </tr>
        <tr>
          <td colspan="2">'.$row['message'].'</td>
        </tr>
      </table>';
  }

  ?>

</div>

<script src="../static/js/GoogleMap.js"></script>

<?php include('./footer.php'); ?>

<?php $title = 'ResultPage'; ?>
<?php include('./header.php'); ?>

  <?php
    // DB接続
    require('env.php');

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
      echo '<p>'.$row['placeName'].'</p>
      <p>'.$row['lat'].'</p>
      <p>'.$row['lng'].'</p>
      <p>'.$row['roof'].'</p>
      <p>'.$row['bench'].'</p>
      <p>'.$row['enclosure'].'</p>
      <p>'.$row['cigaretteSale'].'</p>
      <p>'.$row['drinkSale'].'</p>
      <p>'.$row['cigarette'].'</p>
      <p>'.$row['outdoor'].'</p>
      <p>'.$row['message'];
  }

  ?>

</div>

<script src="../static/js/GoogleMap.js"></script>

<?php include('./footer.php'); ?>

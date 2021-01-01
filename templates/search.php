<?php
  echo 'SELECT * FROM smokingMap WHERE
  placeName LIKE "%'.$_POST['placeName'].'%" AND
  roof='.$_POST['roof'].' AND
  bench='.$_POST['bench'].' AND
  enclosure='.$_POST['enclosure'].' AND
  cigaretteSale='.$_POST['cigaretteSale'].' AND
  drinkSale='.$_POST['drinkSale'].' AND
  cigarette='.$_POST['cigarette'].' AND
  outdoor='.$_POST['outdoor'];
?>

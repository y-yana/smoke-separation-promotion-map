<?php
  // セッション開始
  session_start();

  $sql = 'SELECT * FROM smokingMap WHERE ';
  $placeName = 'placeName LIKE "%'.$_POST['placeName'].'%";';

  // ラジオボタンの判定
  if($_POST['roof'] == "不明"){
    $roof = '';
  }else{
    $roof = "roof='".$_POST['roof']."' AND ";
  }

  if($_POST['bench'] == "不明"){
    $bench = '';
  }else{
    $bench = "bench='".$_POST['bench']."' AND ";
  }

  if($_POST['enclosure'] == "不明"){
    $enclosure = '';
  }else{
    $enclosure = "enclosure='".$_POST['enclosure']."' AND ";
  }

  if($_POST['cigaretteSale'] == "不明"){
    $cigaretteSale = '';
  }else{
    $cigaretteSale = "cigaretteSale='".$_POST['cigaretteSale']."' AND ";
  }

  if($_POST['drinkSale'] == "不明"){
    $drinkSale = '';
  }else{
    $drinkSale = "drinkSale='".$_POST['drinkSale']."' AND ";
  }

  if($_POST['cigarette'] == "不明"){
    $cigarette = '';
  }else{
    $cigarette = "cigarette='".$_POST['cigarette']."' AND ";
  }

  if($_POST['outdoor'] == "不明"){
    $outdoor = '';
  }else{
    $outdoor = "outdoor='".$_POST['outdoor']."' AND ";
  }

  // 文字列の結合
  $postForm = $sql.$roof.$bench.$enclosure.$cigaretteSale.$drinkSale.$cigarette.$outdoor.$placeName;

  // 結合した文字列をセッション変数に代入
  $_SESSION['postForm'] = $postForm;

  // ページ遷移
  header("location: result.php");

?>

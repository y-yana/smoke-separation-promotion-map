<?php $title = 'TopPage'; ?>
<?php include('./header.php'); ?>
<!-- ここにbodyの中身を記述 -->
<script src="../static/js/GoogleMap.js"></script>
<!-- 検索エリア -->
<form>
  <!-- 検索内容 -->
  <div>
    <span>
      <label><input type="checkbox" name="roof">屋根</label>
    </span>
    <span>
      <label><input type="radio" name="radioRoof" value="0">あり</label>
      <label><input type="radio" name="radioRoof" value="1">なし</label>
    </span>
  </div>
  <div>
    <span>
      <label><input type="checkbox" name="bench">ベンチ</label>
    </span>
    <span>
      <label><input type="radio" name="radioBench" value="0">あり</label>
      <label><input type="radio" name="radioBench" value="1">なし</label>
    </span>
  </div>
  <div>
    <span>
      <label><input type="checkbox" name="enclosure">囲い</label>
    </span>
    <span>
      <label><input type="radio" name="radioEnclosure" value="0">あり</label>
      <label><input type="radio" name="radioEnclosure" value="1">なし</label>
    </span>
  </div>
  <div>
    <span>
      <label><input type="checkbox" name="cigaretteVendingMachine">タバコの自販機</label>
    </span>
    <span>
      <label><input type="radio" name="radioCigaretteVendingMachine" value="0">あり</label>
      <label><input type="radio" name="radioCigaretteVendingMachine" value="1">なし</label>
    </span>
  </div>
  <div>
    <span>
      <label><input type="checkbox" name="vendingMachine">飲料の自販機</label>
    </span>
    <span>
      <label><input type="radio" name="radioVendingMachine" value="0">あり</label>
      <label><input type="radio" name="radioVendingMachine" value="1">なし</label>
    </span>
  </div>
  <div>
    <span>
      <label><input type="checkbox" name="electronicCigarette">利用できるタバコ</label>
    </span>
    <span>
      <label><input type="radio" name="radioElectronicCigarette" value="0">全て</label>
      <label><input type="radio" name="radioElectronicCigarette" value="1">電子タバコのみ</label>
    </span>
  </div>
  <div>
    <span>
      <label><input type="checkbox" name="indoors">設置場所</label>
    </span>
    <span>
      <label><input type="radio" name="radioIndoors" value="0">屋外</label>
      <label><input type="radio" name="radioIndoors" value="1">屋内</label>
    </span>
  </div>
</form>
<?php include('./footer.php'); ?>

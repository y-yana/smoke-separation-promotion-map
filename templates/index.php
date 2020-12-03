<?php $title = 'TopPage'; ?>
<?php include('./header.php'); ?>

  <div class="searchArea">
    <button class="pageMoveBtn" onclick="location.href='./review.php'">喫煙所を登録する</button>
    <form>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">屋根</label>
        </span>
        <span>
          <label><input type="radio" name="roof" id="radioBtn10" value="0" disabled>あり</label>
          <label><input type="radio" name="roof" id="radioBtn20" value="1" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">ベンチ</label>
        </span>
        <span>
          <label><input type="radio" name="bench" id="radioBtn11" value="0" disabled>あり</label>
          <label><input type="radio" name="bench" id="radioBtn21" value="1" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">囲い</label>
        </span>
        <span>
          <label><input type="radio" name="enclosure" id="radioBtn12" value="0" disabled>あり</label>
          <label><input type="radio" name="enclosure" id="radioBtn22" value="1" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">タバコの自販機</label>
        </span>
        <span>
          <label><input type="radio" name="cigaretteVendingMachine" id="radioBtn13" value="0" disabled>あり</label>
          <label><input type="radio" name="cigaretteVendingMachine" id="radioBtn23" value="1" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">飲料の自販機</label>
        </span>
        <span>
          <label><input type="radio" name="vendingMachine" id="radioBtn14" value="0" disabled>あり</label>
          <label><input type="radio" name="vendingMachine" id="radioBtn24" value="1" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">利用できるタバコ</label>
        </span>
        <span>
          <label><input type="radio" name="electronicCigarette" id="radioBtn15" value="0" disabled>全て</label>
          <label><input type="radio" name="electronicCigarette" id="radioBtn25" value="1" disabled>電子タバコのみ</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">設置場所</label>
        </span>
        <span>
          <label><input type="radio" name="indoors" id="radioBtn16" value="0" disabled>屋外</label>
          <label><input type="radio" name="indoors" id="radioBtn26" value="1" disabled>屋内</label>
        </span>
      </div>
    </form>
  </div>
</div>

<script src="../static/js/GoogleMap.js"></script>
<script src="../static/js/formCheck.js"></script>

<?php include('./footer.php'); ?>

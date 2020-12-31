<?php $title = 'TopPage'; ?>
<?php include('./header.php'); ?>

  <div class="searchArea">
    <button class="pageMoveBtn" onclick="location.href='./review.php'">喫煙所の登録はこちら</button>
    <form action="search.php" method="post">
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">屋根</label>
        </span>
        <span>
          <label><input type="radio" name="roof" id="radioBtn10" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="roof" id="radioBtn20" class="searchRadio" value="N" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">ベンチ</label>
        </span>
        <span>
          <label><input type="radio" name="bench" id="radioBtn11" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="bench" id="radioBtn21" class="searchRadio" value="N" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">囲い</label>
        </span>
        <span>
          <label><input type="radio" name="enclosure" id="radioBtn12" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="enclosure" id="radioBtn22" class="searchRadio" value="N" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">タバコの自販機</label>
        </span>
        <span>
          <label><input type="radio" name="cigaretteSale" id="radioBtn13" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="cigaretteSale" id="radioBtn23" class="searchRadio" value="N" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">飲料の自販機</label>
        </span>
        <span>
          <label><input type="radio" name="drinkSale" id="radioBtn14" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="drinkSale" id="radioBtn24" class="searchRadio" value="N" disabled>なし</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">利用できるタバコ</label>
        </span>
        <span>
          <label><input type="radio" name="cigarette" id="radioBtn15" class="searchRadio" value="all" disabled>全て</label>
          <label><input type="radio" name="cigarette" id="radioBtn25" class="searchRadio" value="electronic" disabled>電子タバコのみ</label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">設置場所</label>
        </span>
        <span>
          <label><input type="radio" name="outdoor" id="radioBtn16" class="searchRadio" value="outdoor" disabled>屋外</label>
          <label><input type="radio" name="outdoor" id="radioBtn26" class="searchRadio" value="indoor" disabled>屋内</label>
        </span>
      </div>
      <button class="pageMoveBtn" type="submit">検索</button>
    </form>
  </div>
</div>

<script src="../static/js/GoogleMap.js"></script>
<script src="../static/js/formCheck.js"></script>

<?php include('./footer.php'); ?>

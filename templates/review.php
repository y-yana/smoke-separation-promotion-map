<?php $title = 'ReviewPage'; ?>
<?php include('./header.php'); ?>

<div class="searchArea">
    <form action="addData.php" method="post" name="addData" class="formArea">
      <div class="searchRow">
        <p>喫煙所の名前</p>
        <input type="text" name="placeName">
      </div>
      <div class="searchRow">
        <p>緯度</p>
        <input type="text" name="lat" id="latArea" readonly>
      </div>
      <div class="searchRow">
        <p>経度</p>
        <input type="text" name="lng" id="lngArea" readonly>
      </div>
      <div class="searchRow">
        <p>利用可能時間</p>
        <input type="time" name="startTime">
        <span>～</span>
        <input type="time" name="endTime">
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">屋根</label>
        </span>
        <span>
          <label><input type="radio" name="roof" id="radioBtn10" class="searchRadio" value="あり" disabled>あり</label>
          <label><input type="radio" name="roof" id="radioBtn20" class="searchRadio" value="なし" disabled>なし</label>
          <label><input type="radio" name="roof" id="radioBtn30" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">ベンチ</label>
        </span>
        <span>
          <label><input type="radio" name="bench" id="radioBtn11" class="searchRadio" value="あり" disabled>あり</label>
          <label><input type="radio" name="bench" id="radioBtn21" class="searchRadio" value="なし" disabled>なし</label>
          <label><input type="radio" name="bench" id="radioBtn31" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">囲い</label>
        </span>
        <span>
          <label><input type="radio" name="enclosure" id="radioBtn12" class="searchRadio" value="あり" disabled>あり</label>
          <label><input type="radio" name="enclosure" id="radioBtn22" class="searchRadio" value="なし" disabled>なし</label>
          <label><input type="radio" name="enclosure" id="radioBtn32" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">タバコの自販機</label>
        </span>
        <span>
          <label><input type="radio" name="cigaretteSale" id="radioBtn13" class="searchRadio" value="あり" disabled>あり</label>
          <label><input type="radio" name="cigaretteSale" id="radioBtn23" class="searchRadio" value="なし" disabled>なし</label>
          <label><input type="radio" name="cigaretteSale" id="radioBtn33" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">飲料の自販機</label>
        </span>
        <span>
          <label><input type="radio" name="drinkSale" id="radioBtn14" class="searchRadio" value="あり" disabled>あり</label>
          <label><input type="radio" name="drinkSale" id="radioBtn24" class="searchRadio" value="なし" disabled>なし</label>
          <label><input type="radio" name="drinkSale" id="radioBtn34" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">利用できるタバコ</label>
        </span>
        <span>
          <label><input type="radio" name="cigarette" id="radioBtn15" class="searchRadio" value="全て" disabled>全て</label>
          <label><input type="radio" name="cigarette" id="radioBtn25" class="searchRadio" value="電子タバコのみ" disabled>電子タバコのみ</label>
          <label><input type="radio" name="cigarette" id="radioBtn35" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">設置場所</label>
        </span>
        <span>
          <label><input type="radio" name="outdoor" id="radioBtn16" class="searchRadio" value="屋外" disabled>屋外</label>
          <label><input type="radio" name="outdoor" id="radioBtn26" class="searchRadio" value="屋内" disabled>屋内</label>
          <label><input type="radio" name="outdoor" id="radioBtn36" class="searchRadio" value="不明" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <p>補足コメント</p>
        <textarea name="message"></textarea>
      </div>
      <button class="pageMoveBtn" type="submit">新規登録する</button>
    </form>
  </div>
</div>

<?php include('./footer.php'); ?>

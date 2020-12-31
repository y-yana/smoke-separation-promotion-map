<?php $title = 'ReviewPage'; ?>
<?php include('./header.php'); ?>

<div class="searchArea">
    <form action="addData.php" method="post" name="addData">
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
        <select name="startTime">
          <option value="0000">00:00</option>
          <option value="0100">01:00</option>
          <option value="0200">02:00</option>
          <option value="0300">03:00</option>
          <option value="0400">04:00</option>
          <option value="0500">05:00</option>
          <option value="0600">06:00</option>
          <option value="0700">07:00</option>
          <option value="0800">08:00</option>
          <option value="0900">09:00</option>
          <option value="1000">10:00</option>
          <option value="1100">11:00</option>
          <option value="1200">12:00</option>
          <option value="1300">13:00</option>
          <option value="1400">14:00</option>
          <option value="1500">15:00</option>
          <option value="1600">16:00</option>
          <option value="1700">17:00</option>
          <option value="1800">18:00</option>
          <option value="1900">19:00</option>
          <option value="2000">20:00</option>
          <option value="2100">21:00</option>
          <option value="2200">22:00</option>
          <option value="2300">23:00</option>
        </select>
        <span>～</span>
        <select name="endTime">
          <option value="0000">00:00</option>
          <option value="0100">01:00</option>
          <option value="0200">02:00</option>
          <option value="0300">03:00</option>
          <option value="0400">04:00</option>
          <option value="0500">05:00</option>
          <option value="0600">06:00</option>
          <option value="0700">07:00</option>
          <option value="0800">08:00</option>
          <option value="0900">09:00</option>
          <option value="1000">10:00</option>
          <option value="1100">11:00</option>
          <option value="1200">12:00</option>
          <option value="1300">13:00</option>
          <option value="1400">14:00</option>
          <option value="1500">15:00</option>
          <option value="1600">16:00</option>
          <option value="1700">17:00</option>
          <option value="1800">18:00</option>
          <option value="1900">19:00</option>
          <option value="2000">20:00</option>
          <option value="2100">21:00</option>
          <option value="2200">22:00</option>
          <option value="2300">23:00</option>
        </select>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">屋根</label>
        </span>
        <span>
          <label><input type="radio" name="roof" id="radioBtn10" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="roof" id="radioBtn20" class="searchRadio" value="N" disabled>なし</label>
          <label><input type="radio" name="roof" id="radioBtn30" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">ベンチ</label>
        </span>
        <span>
          <label><input type="radio" name="bench" id="radioBtn11" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="bench" id="radioBtn21" class="searchRadio" value="N" disabled>なし</label>
          <label><input type="radio" name="bench" id="radioBtn31" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">囲い</label>
        </span>
        <span>
          <label><input type="radio" name="enclosure" id="radioBtn12" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="enclosure" id="radioBtn22" class="searchRadio" value="N" disabled>なし</label>
          <label><input type="radio" name="enclosure" id="radioBtn32" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">タバコの自販機</label>
        </span>
        <span>
          <label><input type="radio" name="cigaretteSale" id="radioBtn13" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="cigaretteSale" id="radioBtn23" class="searchRadio" value="N" disabled>なし</label>
          <label><input type="radio" name="cigaretteSale" id="radioBtn33" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">飲料の自販機</label>
        </span>
        <span>
          <label><input type="radio" name="drinkSale" id="radioBtn14" class="searchRadio" value="Y" disabled>あり</label>
          <label><input type="radio" name="drinkSale" id="radioBtn24" class="searchRadio" value="N" disabled>なし</label>
          <label><input type="radio" name="drinkSale" id="radioBtn34" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">利用できるタバコ</label>
        </span>
        <span>
          <label><input type="radio" name="cigarette" id="radioBtn15" class="searchRadio" value="all" disabled>全て</label>
          <label><input type="radio" name="cigarette" id="radioBtn25" class="searchRadio" value="electronic" disabled>電子タバコのみ</label>
          <label><input type="radio" name="cigarette" id="radioBtn35" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
        </span>
      </div>
      <div class="searchRow">
        <span>
          <label><input type="checkbox" name="checkBox" onChange="formCheck()">設置場所</label>
        </span>
        <span>
          <label><input type="radio" name="outdoor" id="radioBtn16" class="searchRadio" value="outdoor" disabled>屋外</label>
          <label><input type="radio" name="outdoor" id="radioBtn26" class="searchRadio" value="indoor" disabled>屋内</label>
          <label><input type="radio" name="outdoor" id="radioBtn36" class="searchRadio" value="unknown" checked="checked" style="display:none;"></label>
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

<script src="../static/js/GoogleMap.js"></script>
<script src="../static/js/formCheck.js"></script>

<?php include('./footer.php'); ?>

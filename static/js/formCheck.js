function formCheck() {

  const elements = document.getElementsByName("checkBox");

  for (let i = 0; i < elements.length; i++){

    if (elements[i].checked) {

      // ラジオボタンの有効化
      document.getElementById("radioBtn1" + i).disabled = false;
      document.getElementById("radioBtn2" + i).disabled = false;

    } else {

      // ラジオボタンの無効化
      document.getElementById("radioBtn1" + i).disabled = true;
      document.getElementById("radioBtn2" + i).disabled = true;

      // ラジオボタンの選択解除
      document.getElementById("radioBtn1" + i).checked = false;
      document.getElementById("radioBtn2" + i).checked = false;
    }

  }

}

function stingMapPin(id) {
  // 検索結果の緯度経度を変数に代入
  var lat = document.getElementById("mapPin" + id).dataset.lat;
  var lng = document.getElementById("mapPin" + id).dataset.lng;

  // mapの表示位置を指定
  var result = new google.maps.LatLng(lat, lng);

  // map表示
  var myMap = new google.maps.Map(document.getElementById('myMap'), {
    center: result,
    zoom: 17,
    mapTypeId: 'hybrid',
    scrollwheel: false
  });

  // マーカーを表示
  var marker = new google.maps.Marker({
    position: result,
    draggable: false
  });
  marker.setMap(myMap);
}

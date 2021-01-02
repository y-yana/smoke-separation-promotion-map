var kindaiUniversity = { lat: 34.4586824, lng: 132.7799613 };

var mapOptions = {
  center: kindaiUniversity,
  zoom: 17,
  mapTypeId: 'hybrid',
  scrollwheel: false
};

window.onload = function () {
  var myMap = new google.maps.Map(document.getElementById('myMap'), mapOptions);

  var marker = new google.maps.Marker({
    position: kindaiUniversity,
    draggable: true
  });
  marker.setMap(myMap);

  google.maps.event.addListener(marker, 'dragend', function (ev) {
    // ev.latLng.lat();  緯度
    // ev.latLng.lng();  経度
    console.log('lat' + ev.latLng.lat());
    console.log('lng' + ev.latLng.lng());

    // マーカーの緯度経度の値を表示
    document.getElementById('latArea').value = ev.latLng.lat();
    document.getElementById('lngArea').value = ev.latLng.lng();
  })
};

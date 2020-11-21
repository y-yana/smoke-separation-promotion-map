var kindaiUniversity = { lat: 34.4586824, lng: 132.7799613 };

var mapOptions = {
  center: kindaiUniversity,
  zoom: 17,
  mapTypeId: 'hybrid',
  scrollwheel: false
};

window.onload = function () {
  var myMap = new google.maps.Map(document.getElementById('myMap'), mapOptions);
};

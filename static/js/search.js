function search() {

  var sql = "$sql=" + 'SELECT * FROM smokingMap WHERE ';
  var roof;
  var bench;
  var enclosure;
  var cigaretteSale;
  var drinkSale;
  var cigarette;
  var outdoor;
  var placeName = 'placeName LIKE "%' + document.formSearch.elements['placeName'].value + '%";';

  if (document.formSearch.elements['roof'].value == "unknown") {
    roof = "";
  } else {
    roof = "roof='" + document.formSearch.elements['roof'].value + "' AND ";
  }

  if (document.formSearch.elements['bench'].value == "unknown") {
    bench = "";
  } else {
    bench = "bench='" + document.formSearch.elements['bench'].value + "' AND ";
  }

    if (document.formSearch.elements['enclosure'].value == "unknown") {
    enclosure = "";
  } else {
    enclosure = "enclosure='" + document.formSearch.elements['enclosure'].value + "' AND ";
  }

    if (document.formSearch.elements['cigaretteSale'].value == "unknown") {
    cigaretteSale = "";
  } else {
    cigaretteSale = "cigaretteSale='" + document.formSearch.elements['cigaretteSale'].value + "' AND ";
  }

    if (document.formSearch.elements['drinkSale'].value == "unknown") {
    drinkSale = "";
  } else {
    drinkSale = "drinkSale='" + document.formSearch.elements['drinkSale'].value + "' AND ";
  }

    if (document.formSearch.elements['cigarette'].value == "unknown") {
    cigarette = "";
  } else {
    cigarette = "cigarette='" + document.formSearch.elements['cigarette'].value + "' AND ";
  }

    if (document.formSearch.elements['outdoor'].value == "unknown") {
    outdoor = "";
  } else {
    outdoor = "outdoor='" + document.formSearch.elements['outdoor'].value + "' AND ";
  }

  var postForm = sql + roof + bench + enclosure + cigaretteSale + drinkSale + cigarette + outdoor + placeName;

  console.log(postForm);
}

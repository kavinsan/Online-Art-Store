$(document).ready(function(){
  console.log("ready");
  console.log(cart_number6);
  loadItem();
  console.log(cart_number6);
  $("#artQuant6").val(cart_number6);
  $("#artQuant5").val(cart_number5);
  $("#artQuant4").val(cart_number4);
  $("#artQuant3").val(cart_number3);
  $("#artQuant2").val(cart_number2);
  $("#artQuant1").val(cart_number1);
  updatePrice();
});

var bg = document.getElementById("popup-bg");
var guernica_pic = document.getElementById("guernica-pic");
var guernica_info = document.getElementById("guernica-info");
var mona_pic = document.getElementById("mona-pic");
var mona_info = document.getElementById("mona-info");
var starry_pic = document.getElementById("starry-pic");
var starry_info = document.getElementById("starry-info");
var birthvenus_pic = document.getElementById("birthvenus-pic");
var birthvenus_info = document.getElementById("birthvenus-info");
var scream_pic = document.getElementById("scream-pic");
var scream_info = document.getElementById("scream-info");
var waterlily_pic = document.getElementById("waterlily-pic");
var waterlily_info = document.getElementById("waterlily-info");
var monet_pic = document.getElementById("monet-pic");
var monet_info = document.getElementById("monet-info");
var munch_pic = document.getElementById("munch-pic");
var munch_info = document.getElementById("munch-info");
var davinci_pic = document.getElementById("davinci-pic");
var davinci_info = document.getElementById("davinci-info");
var picasso_pic = document.getElementById("picasso-pic");
var picasso_info = document.getElementById("picasso-info");
var botticelli_pic = document.getElementById("botticelli-pic");
var botticelli_info = document.getElementById("botticelli-info");
var vangogh_pic = document.getElementById("vangogh-pic");
var vangogh_info = document.getElementById("vangogh-info");

$('body').click(function(event) {
  console.log(event.target.id);

    if($(event.target).is('#guernica')) {
        
      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
       guernica_pic.classList.add("active-pic");
       guernica_info.classList.add("active-info");
       guernica_pic.classList.remove("non-active-pic");
       guernica_info.classList.remove("non-active-info");
      
        
        
    } else if ($(event.target).is('#mona')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      mona_pic.classList.add("active-pic");
      mona_info.classList.add("active-info");
      mona_pic.classList.remove("non-active-pic");
      mona_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#starry')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      starry_pic.classList.add("active-pic");
      starry_info.classList.add("active-info");
      starry_pic.classList.remove("non-active-pic");
     starry_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#venus')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      birthvenus_pic.classList.add("active-pic");
      birthvenus_info.classList.add("active-info");
      birthvenus_pic.classList.remove("non-active-pic");
     birthvenus_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#scream')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      scream_pic.classList.add("active-pic");
      scream_info.classList.add("active-info");
      scream_pic.classList.remove("non-active-pic");
    scream_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#lily')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      waterlily_pic.classList.add("active-pic");
      waterlily_info.classList.add("active-info");
      waterlily_pic.classList.remove("non-active-pic");
     waterlily_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#monet')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      monet_pic.classList.add("active-pic");
      monet_info.classList.add("active-info");
      monet_pic.classList.remove("non-active-pic");
      monet_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#munch')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      munch_pic.classList.add("active-pic");
      munch_info.classList.add("active-info");
      munch_pic.classList.remove("non-active-pic");
     munch_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#vinci')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      davinci_pic.classList.add("active-pic");
      davinci_info.classList.add("active-info");
      davinci_pic.classList.remove("non-active-pic");
     davinci_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#picasso')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      picasso_pic.classList.add("active-pic");
      picasso_info.classList.add("active-info");
      picasso_pic.classList.remove("non-active-pic");
      picasso_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#botticelli')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      botticelli_pic.classList.add("active-pic");
      botticelli_info.classList.add("active-info");
      botticelli_pic.classList.remove("non-active-pic");
     botticelli_info.classList.remove("non-active-info");

    } else if ($(event.target).is('#vangogh')) {

      $('.active-pic').addClass('non-active-pic');
      $('.active-info').addClass('non-active-info');
      $('.active-pic').removeClass('active-pic');
      $('.active-info').removeClass('active-info');
      bg.classList.add("active-art");
      bg.classList.remove("popup-bg2");
      vangogh_pic.classList.add("active-pic");
      vangogh_info.classList.add("active-info");
      vangogh_pic.classList.remove("non-active-pic");
      vangogh_info.classList.remove("non-active-info");
    }
});

/*Shopping cart total price update*/
var empty_cart = document.getElementById("emptyCart");
var garbage = document.getElementById("garbage");
/*guernica cart update*/
var guernica_cart = document.getElementById("art1");
var guernica_quant = document.getElementById("artQuant1");
var guernica_price = 1000;
var cart_number1=0;
var total1 = 0;
var art1test = document.getElementById("artQuant1");
var art1 = guernica;
function addGuernica() {
  cart_number1 ++;
    $("#artQuant1").val(cart_number1);
  updateGuernica();
  window.alert("You have added Guernica to cart");
  if (cart_number1>0) {
    guernica_cart.classList.remove("non-active-shop");
    guernica_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  saveItem(art1test,art1);
}
function updateGuernica(){
  if (cart_number1>0) {
    guernica_cart.classList.remove("non-active-shop");
    guernica_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  cart_number1 = Number($("#artQuant1").val());
  total1 = cart_number1 * guernica_price;
  $("#totalPrice1").val(total1);
  if (cart_number1 == 0) {
    guernica_cart.classList.remove("active-shop");
    guernica_cart.classList.add("non-active-shop");
  }
  saveItem(art1test,art1);
}
function removeCart1() {
  cart_number1 --;
  $("#artQuant1").val(cart_number1);
  if(cart_number1 == 0){
    guernica_cart.classList.remove("active-shop");
    guernica_cart.classList.add("non-active-shop");
  }
  updatePrice();
  saveItem(art1test,art1);
}

/*mona cart update*/
var mona_cart = document.getElementById("art2");
var mona_quant = document.getElementById("artQuant2");
var mona_price = 5000;
var cart_number2=0;
var total2 = 0;
var art2test = document.getElementById("artQuant2");
var art2 = mona;
function addMona() {
  cart_number2 ++;
    $("#artQuant2").val(cart_number2);
    updateMona();
    window.alert("You have added Mona Lisa to cart");
    if (cart_number2>0) {
      mona_cart.classList.remove("non-active-shop");
      mona_cart.classList.add("active-shop");
      empty_cart.classList.add("non-active-shop");
    }
    saveItem(art2test,art2);
}
function updateMona(){
  if (cart_number2>0) {
    mona_cart.classList.remove("non-active-shop");
    mona_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  cart_number2 = Number($("#artQuant2").val());
  total2 = cart_number2 * mona_price;
  $("#totalPrice2").val(total2);
  if (cart_number2 == 0) {
    mona_cart.classList.remove("active-shop");
    mona_cart.classList.add("non-active-shop");
  }
  saveItem(art2test,art2);
}
function removeCart2() {
  cart_number2 --;
  $("#artQuant2").val(cart_number2);
  if(cart_number2 == 0){
    mona_cart.classList.remove("active-shop");
    mona_cart.classList.add("non-active-shop");
  }
  updatePrice();
  saveItem(art2test,art2);
}

/*starry cart update*/
var starry_cart = document.getElementById("art3");
var starry_quant = document.getElementById("artQuant3");
var starry_price = 5000;
var cart_number3=0;
var total3 = 0;
var art3test = document.getElementById("artQuant3");
var art3 = starry;
function addStarry() {
  cart_number3 ++;
    $("#artQuant3").val(cart_number3);
    updateStarry();
    window.alert("You have added The Starry Night to cart");
    if (cart_number3>0) {
      starry_cart.classList.remove("non-active-shop");
      starry_cart.classList.add("active-shop");
      empty_cart.classList.add("non-active-shop");
    }
    saveItem(art3test,art3);
}
function updateStarry(){
  if (cart_number3>0) {
    starry_cart.classList.remove("non-active-shop");
    starry_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  cart_number3 = Number($("#artQuant3").val());
  total3 = cart_number3 * starry_price;
  $("#totalPrice3").val(total3);
  if (cart_number3 == 0) {
    starry_cart.classList.remove("active-shop");
    starry_cart.classList.add("non-active-shop");
  }
  saveItem(art3test,art3);
}
function removeCart3() {
  cart_number3 --;
  $("#artQuant3").val(cart_number3);
  if(cart_number3 == 0){
    starry_cart.classList.remove("active-shop");
    starry_cart.classList.add("non-active-shop");
  }
  updatePrice();
  saveItem(art3test,art3);
}

/*mona cart update*/
var venus_cart = document.getElementById("art4");
var venus_quant = document.getElementById("artQuant4");
var venus_price = 5000;
var cart_number4 = 0;
var total4 = 0;
var art4test = document.getElementById("artQuant4");
var art4 = venus;
function addVenus() {

  cart_number4 ++;
    $("#artQuant4").val(cart_number4);
    updateVenus();
    window.alert("You have added The Birth of Venus to cart");
    if (cart_number4>0) {
      venus_cart.classList.remove("non-active-shop");
      venus_cart.classList.add("active-shop");
      empty_cart.classList.add("non-active-shop");
    }
    saveItem(art4test,art4);
}
function updateVenus(){
  if (cart_number4>0) {
    venus_cart.classList.remove("non-active-shop");
    venus_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  cart_number4 = Number($("#artQuant4").val());
  total4 = cart_number4 * venus_price;
  $("#totalPrice4").val(total4);
  if (cart_number4 == 0) {
    venus_cart.classList.remove("active-shop");
    venus_cart.classList.add("non-active-shop");
  }
  saveItem(art4test,art4);
}
function removeCart4() {
  cart_number4 --;
  $("#artQuant4").val(cart_number4);
  updatePrice();
  if(cart_number4 == 0){
    venus_cart.classList.remove("active-shop");
    venus_cart.classList.add("non-active-shop");
  }
  saveItem(art4test,art4);
}

/*scream cart update*/
var scream_cart = document.getElementById("art5");
var scream_quant = document.getElementById("artQuant5");
var scream_price = 5000;
var cart_number5 = 0;
var total5 = 0;
var art5test = document.getElementById("artQuant5");
var art5 = scream;
function addScream() {
  cart_number5 ++;
    $("#artQuant5").val(cart_number5);
    updateScream();
    window.alert("You have added The Scream to cart");
    if (cart_number5 > 0) {
      scream_cart.classList.remove("non-active-shop");
      scream_cart.classList.add("active-shop");
      empty_cart.classList.add("non-active-shop");
    }
    saveItem(art5test,art5);
}
function updateScream(){
  if (cart_number5 > 0) {
    scream_cart.classList.remove("non-active-shop");
    scream_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  cart_number5 = Number($("#artQuant5").val());
  total5 = cart_number5 * scream_price;
  $("#totalPrice5").val(total5);
  if (cart_number5 == 0) {
    scream_cart.classList.remove("active-shop");
    scream_cart.classList.add("non-active-shop");
  }
  saveItem(art5test,art5);
}
function removeCart5() {
  console.log("hello");
  cart_number5 --;
  $("#artQuant5").val(cart_number5);
  if(cart_number5 == 0){
    scream_cart.classList.remove("active-shop");
    scream_cart.classList.add("non-active-shop");
  }
  updatePrice();
  saveItem(art5test,art5);
}

/*lily cart update*/
var lily_cart = document.getElementById("art6");
var lily_quant = document.getElementById("artQuant6");
var lily_price = 5000;
var cart_number6 = 0;
var total6 = 0;
var art6test = document.getElementById("artQuant6");
var art6 = lily;
function addLily() {
  cart_number6 ++;
  $("#artQuant6").val(cart_number6);
    updateLily();
    window.alert("You have added The Water-Lily Pond to cart");
    if (cart_number6 > 0) {
      lily_cart.classList.remove("non-active-shop");
      lily_cart.classList.add("active-shop");
      empty_cart.classList.add("non-active-shop");
    }
    saveItem(art6test,art6);
}
function updateLily(){
  if (cart_number6 > 0) {
    lily_cart.classList.remove("non-active-shop");
    lily_cart.classList.add("active-shop");
    empty_cart.classList.add("non-active-shop");
  }
  cart_number6 = Number($("#artQuant6").val());
  total6 = cart_number6 * lily_price;
  $("#totalPrice6").val(total6);
  if (cart_number6 == 0 ) {
    lily_cart.classList.remove("active-shop");
    lily_cart.classList.add("non-active-shop");
  }
  saveItem(art6test,art6);
}
function removeCart6() {
  cart_number6 --;
  $("#artQuant6").val(cart_number6);
  if(cart_number6 == 0){
    lily_cart.classList.remove("active-shop");
    lily_cart.classList.add("non-active-shop");
  }
  updatePrice();
  saveItem(art6test,art6);
}
var totalcart = document.getElementById("totalLabel");
var sub_total_cart = 0;
var tax = 0;
var shipping = 0;
var totalfinal = 0;
function updatePrice()
{
  totalcart.classList.remove("non-active-shop");
  totalcart.classList.add("active-shop");
  updateGuernica();

  updateMona();

  updateStarry();

  updateVenus();

  updateScream();

  updateLily();

  sub_total_cart = total1 + total2 + total3 + total4 + total5 + total6;
  shipping = 20;
  tax = sub_total_cart * 0.13;
  totalfinal = sub_total_cart + shipping + tax;
  if(sub_total_cart == 0){
    empty_cart.classList.add("active-shop");
    totalcart.classList.remove("active-shop");
    totalcart.classList.add("non-active-shop");
  }
  $("#subfinalPrice").val("$" + sub_total_cart);
  $("#shipping").val("$" + shipping);
  $("#tax").val("$" + tax);
  $("#finalPrice").val("$" + totalfinal);
}

function saveItem(temp, art_id){
  var price = $(temp).val();
  if (window.sessionStorage) {

    if (art_id == guernica) {
      sessionStorage.setItem("guernica", JSON.stringify(price));
    }
    if (art_id == mona) {
      sessionStorage.setItem("mona", JSON.stringify(price));
    }
    if (art_id == starry) {
      sessionStorage.setItem("starry", JSON.stringify(price));
    }
    if (art_id == venus) {
      sessionStorage.setItem("venus", JSON.stringify(price));
    }
    if (art_id == scream) {
      sessionStorage.setItem("scream", JSON.stringify(price));
    }
    if (art_id == lily) {
      sessionStorage.setItem("lily", JSON.stringify(price));
    }
  }
}
function loadItem(){
  var tempnum1;
  var inum1;
  var tempnum2;
  var inum2;
  var tempnum3;
  var inum3;
  var tempnum4;
  var inum4;
  var tempnum5;
  var inum5;
  var tempnum6;
  var inum6;

  if (sessionStorage.getItem("guernica")) {
    tempnum1 = JSON.parse(sessionStorage.getItem("guernica"));
    inum1 = parseInt(tempnum1);
    cart_number1 = inum1;
  }
  if (sessionStorage.getItem("mona")) {
    tempnum2 = JSON.parse(sessionStorage.getItem("mona"));
    inum2 = parseInt(tempnum2);
    cart_number2 = inum2;
  }
  if (sessionStorage.getItem("starry")) {
    tempnum3 = JSON.parse(sessionStorage.getItem("starry"));
    inum3 = parseInt(tempnum3);
    cart_number3 = inum3;
  }
  if (sessionStorage.getItem("venus")) {
    tempnum4 = JSON.parse(sessionStorage.getItem("venus"));
    inum4 = parseInt(tempnum4);
    cart_number4 = inum4;
  }
  if (sessionStorage.getItem("scream")) {
    tempnum5 = JSON.parse(sessionStorage.getItem("scream"));
    inum5 = parseInt(tempnum5);
    cart_number5 = inum5;
  }
  if (sessionStorage.getItem("lily")) {
    tempnum6 = JSON.parse(sessionStorage.getItem("lily"));
    inum6 = parseInt(tempnum6);
    cart_number6 = inum6;
  }
}

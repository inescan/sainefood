
var height = $('.container-model > .main-content').height();
console.log(height);
window.onscroll = function() {

if (scrollY > height-430) {

var element = document.getElementById("myFIXED");
    element.classList.remove("position-fixed");
    
var absolu = document.getElementById("myFIX");
    absolu.classList.add("align-self-end");
    
    var absolu = document.getElementById("vide");
    absolu.classList.add("btn-commender-fixed-down");
    
    var absolu = document.getElementById("paypal-btn");
    absolu.classList.add("paypal-btn-fixed-down");


} else {

var element = document.getElementById("myFIXED");
    element.classList.add("position-fixed");
    
var absolu = document.getElementById("myFIX");
    absolu.classList.remove("align-self-end");

}}

$("#inscription").hide()
$("#connexion-link").hide()
function show() {
    $("#connexion").hide()
    $("#inscription").show()
    $("#connexion-link").show()
    $("#inscription-link").hide()
}

function hide() {
    $("#connexion").show()
    $("#inscription").hide()
    $("#connexion-link").hide()
    $("#inscription-link").show()
}
$('td.delete-block').addClass('hover');
$(function(){
  $('tr.border-panier').hover(function() {
    $('td.delete-block').removeClass('hover');
  }, function() {
    $('td.delete-block').addClass('hover');
  })
})

$('.border-panier .quantite').addClass('hover');

$(function(){
  $('tr.border-panier').hover(function() {
    $('.border-panier .quantite').removeClass('hover');
  }, function() {
    $('.border-panier .quantite').addClass('hover');
  })
})



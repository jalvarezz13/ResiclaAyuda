$(document).ready(function () {
  //Add Inactive Class To All Accordion Headers
  $(".accordion-header").toggleClass("inactive-header");

  //Set The Accordion Content Width
  var contentwidth = $(".accordion-header").width();
  $(".accordion-content").css({ width: contentwidth });

  //Open The First Accordion Section When Page Loads
  $(".accordion-header").first().toggleClass("active-header").toggleClass("inactive-header");
  $(".accordion-content").first().slideDown().toggleClass("open-content");

  // The Accordion Effect
  $(".accordion-header").click(function () {
    if ($(this).is(".inactive-header")) {
      $(".active-header").toggleClass("active-header").toggleClass("inactive-header").next().slideToggle().toggleClass("open-content");
      $(this).toggleClass("active-header").toggleClass("inactive-header");
      $(this).next().slideToggle().toggleClass("open-content");
    } else {
      $(this).toggleClass("active-header").toggleClass("inactive-header");
      $(this).next().slideToggle().toggleClass("open-content");
    }
  });

  return false;
});

var tiempo = 3000; //tiempo en milisegundos
var arrImagenes = [
  "/prestashop/img/cms/webGrupo.jpg",
  "/prestashop/img/cms/web00.jpg",
  "/prestashop/img/cms/web02.jpg",
  "/prestashop/img/cms/web03.jpg",
  "/prestashop/img/cms/web04.jpg",
  "/prestashop/img/cms/web05.jpg",
  "/prestashop/img/cms/web06.jpg",
  "/prestashop/img/cms/web07.jpg",
];
_img = document.getElementById("rotativo");
_img.src = "/prestashop/img/cms/Click.jpg";

_img.addEventListener("click", function () {
  //"load"

  var i = 0;
  setInterval(function () {
    _img.setAttribute("class", "flash");
    _img.src = arrImagenes[i];
    _img.addEventListener("animationend", alAcabarLaAnimacion, false);
    i = i == arrImagenes.length - 1 ? 0 : i + 1;
  }, tiempo);
});

function alAcabarLaAnimacion(e) {
  this.removeAttribute("class");
}

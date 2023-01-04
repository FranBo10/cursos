const iconoMenu = document.querySelector('#icono-menu')
var abrirMenu = true;

iconoMenu.addEventListener('click', (e) => {
    const menu = document.querySelector(".nav")
    if(abrirMenu == true) {
        menu.classList.add("abrirMenu")
        iconoMenu.classList.remove("fa-bars")
        iconoMenu.classList.add("fa-x")
        abrirMenu = false;
    } else {
        menu.classList.remove("abrirMenu")
        iconoMenu.classList.add("fa-bars")
        iconoMenu.classList.remove("fa-x")
        abrirMenu = true;
    }   
});


jQuery(function ($) {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

})
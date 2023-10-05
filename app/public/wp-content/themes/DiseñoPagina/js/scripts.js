// function aldeaWordpress(){
   
//     // MENU HAMBURGUESA
//     const hamburguer = document.querySelector('.hamburguer-menu svg')
//     hamburguer.addEventListener('click', function(){
//         const menuPrincipal = document.querySelector('.contenedor-menu');
//         menuPrincipal.classList.toggle('mostrar')
//     })
// }
// document.addEventListener('DOMContentLoaded', aldeaWordpress);


// BARRA FIJA
window.onscroll = function(){
    const scroll = window.scrollY;
    const barraNav = document.querySelector('.barra-navegacion')

    if(scroll > 200){
        barraNav.classList.add('fixed-top')
    }else{
        barraNav.classList.remove('fixed-top');
    }
}

// Swiper header
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop:true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});


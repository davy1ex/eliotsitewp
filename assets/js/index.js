
    // $(document).ready(function(){
    //   $('.slider').bxSlider();
    // });

var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
})


var mySwiper_video = new Swiper('.swiper-container-video', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    
    // If we need pagination
    pagination: {
        el: '.swiper-video-pagination',
    },
    
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-video-button-next',
        prevEl: '.swiper-video-button-prev',
    },
    
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-video-scrollbar',
    },
})
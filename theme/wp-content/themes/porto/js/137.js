jQuery(document).ready(function() {
    var swiper = new Swiper('.swiper-container-209', {
        speed: 1000,
        loop: true,
        pagination: {
            el: '.swiper-pagination-201',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 1000,
        },
    });
});
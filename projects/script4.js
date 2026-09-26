
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Adjust the number of visible slides
        spaceBetween: 10, // Adjust the space between slides
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

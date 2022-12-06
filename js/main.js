//SLIDER 1

/* $(document).ready(function() {
    $('.slider__list-1').owlCarousel({
        loop:true,
        autoplay: true,
        //margin:10,
        nav:false,
        items: 1,
        mouseDrag: true,
        touchDrag: true,
        rtl: false,
    });
}); */

$(document).ready(function() {
    let slider1 = $('.slider__list-1');
    let slider2 = $('.slider2__list');

    slider1.owlCarousel({
        loop:true,
        autoplay: false,
        nav:false,
        items: 1,
        mouseDrag: true,
        touchDrag: true,
        rtl: true,
        dots: false,
    });

    $('.slider__button--left').click(function() {
        slider1.trigger('next.owl.carousel');
    });

    $('.slider__button--right').click(function() {
        slider1.trigger('prev.owl.carousel', [300]);
    });


    slider2.owlCarousel({
        loop:true,
        autoplay: false,
        nav:false,
        items: 1,
        mouseDrag: true,
        touchDrag: true,
        rtl: true,
        dots: false,
    });

    $('.slider2__button--left').click(function() {
        slider2.trigger('next.owl.carousel');
    });

    $('.slider2__button--right').click(function() {
        slider2.trigger('prev.owl.carousel', [300]);
    });
});


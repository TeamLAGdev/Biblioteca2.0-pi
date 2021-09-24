// código informado na documentação do Owl Carousel 2
$('.owl-carousel').owlCarousel({
    loop: false,
    rewind: false,
    margin: 10,
    nav: false,

    // responsivo
    responsive: {
        0: {
            items: 1
        },
        400: {
            items: 2
        },
        650: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
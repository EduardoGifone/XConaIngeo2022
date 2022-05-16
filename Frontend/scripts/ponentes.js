document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 150,
        dist: -100, /*80*/
        shift: 5, /*5*/
        padding: 5, /*5*/
        numVisible: 10, /*5*/
        indicators: false,
        noWrap: false,
    });
});
// Add your custom JS here.
(()=>{
    const myCarouselElement = document.querySelector('#mainCarousel');

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        wrap: false
    });

})();
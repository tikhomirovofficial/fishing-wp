// const slider =  new Swiper(".gallery__slider", {
//     slideClass: 'gallery__slider-item',
//     slidesPerView: 1,
//     wrapperClass: 'gallery__slider-wrapper',
//     navigation: {
//         nextEl: '.slider-next',
//         prevEl: '.slider-prev'
//     }
// })
const carousel = document.getElementById('gallery-carousel')
const galleryItems = document.querySelectorAll('.gallery-item')
const slider = new Swiper('.swiper', {
    navigation: {
        nextEl: '.slider-next',
        prevEl: '.slider-prev'
    }
})


slider.on('activeIndexChange', (e) => {
    document.getElementById('slide__now').innerText = e.activeIndex + 1
})
galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        carousel.classList.toggle('gallery-opened')
        slider.slideTo(index, 1000);
        document.getElementById('slide__now').innerText = index + 1
    })
})
document.getElementById('gallery-close').addEventListener('click', () => {
    carousel.classList.remove('gallery-opened')
})
document.getElementById('slide__now').innerText = slider.activeIndex + 1
document.getElementById('sliders__length').innerText = slider.slides.length
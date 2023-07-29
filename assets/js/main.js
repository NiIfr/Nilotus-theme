// Sticky Header
$(window).on('scroll', function () {
    let scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $('.top-header').addClass('none');
        $('.bottom-header').addClass('down');

    } else {
        $('.top-header').removeClass('none');
        $('.bottom-header').removeClass('down');
    }
});
// Number Counter
const counters = document.querySelectorAll('.value');
const speed = 200;

counters.forEach(counter => {
    const animate = () => {
        const value = +counter.getAttribute('akhi');
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 1);
        } else {
            counter.innerText = value;
        }
    }
    animate();
});
// Course Swiper
let swiper = new Swiper('.mySwiper', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 40,
    centeredSlides: false,
});
// Customer Swiper
let customerSwiper = new Swiper(".customer-swiper", {
    effect: "cards",
    grabCursor: true,
  });






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



  const togglermenu= document.querySelector(".nav__toggler");
  const humbermenu= document.querySelector(".humber-menu");
  togglermenu.addEventListener("click",(e)=>{
      console.log("clicked");
      humbermenu.classList.toggle("nav__expanded");
  });



  /* slider of course */
  //initialize swiper when document ready
  
    var swipercourse = new Swiper ('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 10,
        breakpoints: {
          480: {
            slidesPerView: 1,
            spaceBetween: 40,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          940: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
          1240: {
            slidesPerView: 4,
            spaceBetween: 50,
          }
        },
        // Optional parameters   
     freeMode: true,
        loop: false,
        
        
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev', },
            autoplay: {
                delay: 1000,
              },
    
      })
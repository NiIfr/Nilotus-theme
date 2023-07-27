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


  $(document).ready(function() {
    $("#toggle").click(function() {
      var elem = $(".toggle-text").text();
      if (elem == "ادامه مطالب") {
        //Stuff to do when btn is in the read more state
        $(".toggle-text").text("بستن");
        $('#toggle').addClass('tg-ic');
        $("#fade").slideDown();
      } else {
        //Stuff to do when btn is in the read less state
        $(".toggle-text").text("ادامه مطالب");
        $('#toggle').removeClass('tg-ic');
        $("#fade").slideUp();
      }
    });
 });




  const button = document.querySelector('.toggle-button');
  const hiddenItems = document.querySelectorAll('.hidden-item');
  let isHidden = true;
  button.addEventListener('click', () => {
    button.textContent = isHidden
    ? 'بستن'
    : 'ادامه سرفصل ها';
    
    isHidden = !isHidden;
    hiddenItems.forEach(item => item.classList.toggle('hidden'));
  });



  var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
      $('.ac-title_sessions').removeClass('ss-active');
    } else {
      panel.style.display = "block";
      $('.ac-title_sessions').addClass('ss-active');
    }
  });
}




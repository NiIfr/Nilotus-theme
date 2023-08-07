
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

/* humberger menu */
const togglermenu= document.querySelector(".nav__toggler");
const closebtn = document.querySelector(".closebtn");
togglermenu.addEventListener("click",(e)=>{
console.log("clicked");
document.getElementById("mySidenav").style.width = "60%";
}
);
closebtn.addEventListener("click",(e)=>{
  console.log("clicked");
  document.getElementById("mySidenav").style.width = "0";
  }
);


/* slider of course */
//initialize swiper when document ready

var swipercourse = new Swiper ('.swiper-container', {
slidesPerView: 2,
spaceBetween: 10,
breakpoints: {
480: {
slidesPerView: 4,
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

pagination: {
el: ".swiper-pagination",
},
autoplay: {
delay: 3000,
},
})



//progress bar
let scrollPercentage = () => {
let scrollProgress = document.getElementById("progress");

let pos = document.documentElement.scrollTop;
let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
let scrollValue = Math.round( pos * 100 / calcHeight);

scrollProgress.style.background = `conic-gradient(#5557dd ${scrollValue}%, #c0c0ff ${scrollValue}%)`; 
}
window.onscroll = scrollPercentage;
window.onload = scrollPercentage;



// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
img.onclick = function(){
  modal.style.display = "block";
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
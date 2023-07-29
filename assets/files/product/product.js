
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


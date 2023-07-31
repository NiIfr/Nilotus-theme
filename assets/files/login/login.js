function changeTab(ref){
    try {
    if(ref.getAttribute("data-tab") == "login"){
      document.getElementById("form-body").classList.remove('active');
      ref.parentNode.classList.remove('signup');
    } else {
      document.getElementById("form-body").classList.add('active');
      ref.parentNode.classList.add('signup');
    }
    } catch(msg){
      console.log(msg);
    }
  }
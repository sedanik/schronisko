window.onscroll = function(){
  var a = document.getElementsByClassName("menu");
          if (document.documentElement.scrollTop > 150) {
        a[0].style.position = "fixed"
        a[0].style.top = "0%";
    } else if (document.documentElement.scrollTop < 150){
        a[0].style.position = "relative"
    }

}

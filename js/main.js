


// header
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar_Header");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}




$(function() {
				$( '#dl-menu' ).dlmenu();
			});


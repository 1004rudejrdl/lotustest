// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  headerFixFunc()
  stickyTopHeaderFunc() //sticky top nav
  stickyTopHeader_2_Func()
  scrollFunction() //goto top button
};

// sticky top nav
var header_top = document.getElementById("header_top");
var navbar = document.getElementById("navbar");
var navbar_bottom = document.getElementById("navbar_bottom");
var sticky = navbar.offsetTop;

function headerFixFunc() {
  var h_sticky = sticky - header_top.offsetHeight*2;
  if (window.pageYOffset ==0) {
    header_top.style.display = "hidden";
  } else if (window.pageYOffset < h_sticky) {
    header_top.classList.add("sticky");
  } else if (window.pageYOffset > h_sticky) {
    header_top.classList.remove("sticky");
  }
}
function stickyTopHeaderFunc() {
  if (window.pageYOffset >= sticky && window.pageYOffset <= sticky+450) {
    navbar.classList.add("sticky");
  } else if(window.pageYOffset < sticky){
    navbar.classList.remove("sticky");
  }
}
function stickyTopHeader_2_Func() {
  if (window.pageYOffset >= sticky && window.pageYOffset <= sticky+450) {
    navbar_bottom.style.display = "block";
  } else if (window.pageYOffset > sticky){
    navbar_bottom.style.display = "none";
  }
}
// sticky top nav end

//goto top button
function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    document.getElementById("gotoTopBtn").style.display = "block";
  } else {
    document.getElementById("gotoTopBtn").style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//goto top button end

// modal signup pop up
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// modal signup pop up end
function closeStickyOpenModal() {
  document.getElementById('header_top').style.display='none';
  document.getElementById('navbar').style.display='none';
  document.getElementById('id01').style.display='block';
}
function openStickyCloseModal() {
  document.getElementById('header_top').style.display='block';
  document.getElementById('navbar').style.display='block';
  document.getElementById('id01').style.display='none';
}
//
//
//
//
// // sticky top nav
// var header_top = document.getElementById("header_top");
// var navbar = document.getElementById("navbar");
// var navbar_bottom = document.getElementById("navbar_bottom");
// var sticky = document.getElementById("header_img").offsetHeight;
//
//
// function headerFixFunc() {
//   var h_sticky = sticky-(header_top.offsetHeight);
//   if (window.pageYOffset < h_sticky) {
//     header_top.classList.add("sticky");
//   } else if (window.pageYOffset > h_sticky) {
//     header_top.classList.remove("sticky");
//   }
// }
// function stickyTopHeaderFunc() {
//   var t_sticky = header_top.offsetHeight+header_img.offsetHeight;
//   if (window.pageYOffset >= sticky && window.pageYOffset <= sticky+1000) {
//     navbar.classList.add("sticky");
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }
// function stickyTopHeader_2_Func() {
//   var t_sticky = header_top.offsetHeight+header_img.offsetHeight;
//   var b_sticky = t_sticky+navbar_bottom.offsetHeight;
//   if (window.pageYOffset <= b_sticky) {
//     navbar_bottom.style.display = "block";
//   } else if (window.pageYOffset > b_sticky) {
//     navbar_bottom.style.display = "none";
//   }
// }

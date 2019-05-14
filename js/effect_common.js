// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction() //goto top button
};
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

// ↓↓↓↓modal창 로직↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
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



//Get the button
let mybutton = document.getElementById("btn-back-to-top");
let myheader = document.getElementById("navbar-header");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
    myheader.classList.add('navbar-main');
  } else {
    mybutton.style.display = "none";
    myheader.classList.remove('navbar-main');
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
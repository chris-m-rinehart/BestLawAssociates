import $ from 'jquery'

function redirectToEOIR() {
    window.location.href = 'https://acis.eoir.justice.gov/en/';
}

const nav = document.querySelector(".nav");
window.addEventListener("scroll", fixNav);

function fixNav() {
  if (window.scrollY > nav.offsetHeight + 150) {
    nav.classList.add("active");
  } else {
    nav.classList.remove("active");
  }
}
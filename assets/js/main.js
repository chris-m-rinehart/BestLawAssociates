import $ from 'jquery'
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if(top >= offset && top < offset + height) {
        navLinks.forEach(links => {
          links.classList.remove('active');
          document.querySelector('header nav a [href*=' + id + ']').classList
          .add('active');
        });
      };
    });
};

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("logo").style.height = "30px";
  } else {
    document.getElementById("logo").style.height = "90px";
  }
}

function redirectToEOIR() {
    window.location.href = 'https://acis.eoir.justice.gov/en/';
}
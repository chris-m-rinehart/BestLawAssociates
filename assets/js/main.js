import $ from 'jquery'
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if(top >= offset && top < offset + height) {
        navLinks.forEach(links => {
          links.classList.remove('current');
          document.querySelector('header nav a [href*=' + id + ']').classList.add('current');
        });
      };
    });
};

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollY > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.flexShrink();
  } else {
    document.getElementById("header").style.fontSize = "90px";
  }
}
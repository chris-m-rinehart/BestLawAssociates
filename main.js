import $ from 'jquery'
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('nav');
alert();

window.onscroll = () => {
    sections.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop - 80;
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

// Create the script tag, set the appropriate attributes
var script = document.createElement('script');
script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBlqLS-OwTXaorGhskuTv10a7vEtcmwHB8&callback=initMap';
script.async = true;

// Attach your callback function to the `window` object
window.initMap = function() {
  // JS API is loaded and available
};

// Append the 'script' element to 'head'
document.head.appendChild(script);

let map;

async function initMap() {
  // The location of Uluru
  const position = { lat: 39.962408, lng: -75.153338 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at Uluru
  map = new Map(document.getElementById("map"), {
    zoom: 4,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at Uluru
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "BestAndAssociates",
  });
}

initMap();

$(document).ready(function(){
  // Smooth scrolling for internal links
  $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
              scrollTop: target.offset().top
          }, 1000);
      }
  });
});

$(document).ready(function(){
  // Dropdown animation
  $('.nav li').hover(function() {
      $(this).children('.sub-menu').stop(true, false, true).slideDown(200);
  }, function() {
      $(this).children('.sub-menu').stop(true, false, true).slideUp(200);
  });
});

$(document).ready(function(){
  // Form validation
  $('#contact-form').submit(function(event) {
      var form = $(this);
      var formData = form.serialize();
      // Perform form validation here
      if (/* Validation passes */) {
          $.ajax({
              type: 'POST',
              url: form.attr('action'),
              data: formData
          })
          .done(function(response) {
              // Handle success
          })
          .fail(function(data) {
              // Handle error
          });
      }
      event.preventDefault();
  });
});
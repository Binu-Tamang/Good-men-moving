// js for the menu navbar
const mobile_nav = document.querySelector(".mobile-nav-btn");
const nav_second_top_header = document.querySelector(".heading-2");

if(nav_second_top_header)
{
  const toggleNavbar = () => {
    nav_second_top_header.classList.toggle("active");
  };
  
  mobile_nav.addEventListener("click", () => toggleNavbar());
}


// scroll up to button js
$(document).ready(function () {
  const $scrollToTopButton = $("#scrollToTopButton");

  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      $scrollToTopButton.fadeIn();
    } else {
      $scrollToTopButton.fadeOut();
    }
  });

  $scrollToTopButton.click(function () {
    $("html, body").animate({ scrollTop: 0 }, 300);
    return false;
  });
});
// ================date picker jquery
$(function () {
  if ($("#date").length) {
    $("#date").datepicker({
      minDate: 0, // Set the minimum date to today
      dateFormat: "yy M d", // Format the date as "2023 May 4"
    });
  }
});
// =====================scroll aos animation
AOS.init({
  duration: 1200,
  once: "true",
});

const options = {
  rootMargin: "500px",
};
if ("IntersectionObserver" in window) {
  // Lazy loading for image
  let lazyImages = document.querySelectorAll("img[data-src]"); // Select images with data-src attribute

  let lazyImageObserver = new IntersectionObserver(function (
    entries,
    observer
  ) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        let lazyImage = entry.target;
        lazyImage.src = lazyImage.dataset.src;
        lazyImageObserver.unobserve(lazyImage);
      }
    });
  },
  options);

  lazyImages.forEach(function (lazyImage) {
    lazyImageObserver.observe(lazyImage);
  });
} else {
  let lazyImages = document.querySelectorAll("img[data-src]"); // Select images with data-src attribute

  lazyImages.forEach(function (lazyImage) {
    lazyImage.src = lazyImage.dataset.src;
  });
}
jQuery(document).ready(function ($) {
  $(document).ready(function () {
    $("#google-reviews").googlePlaces({
      placeId: "ChIJkRRokaoYoFMRxlQn2kPs83o",
      render: ["reviews"],
      min_rating: 4,
      max_rows: 4,
      rotateTime: 16000,
    });
  });
});

// JS for accordion FAQs page
document.addEventListener("DOMContentLoaded", function () {
  const accordionItems = document.querySelectorAll(".accordionTitle ");

  accordionItems.forEach((item) => {
    item.addEventListener("click", function (e) {
      e.preventDefault();
      // Toggle the active class to show/hide content
      if (
        item.parentElement.nextElementSibling &&
        item.parentElement.nextElementSibling.tagName === "DD"
      ) {
        item.classList.toggle("active");
        item.parentElement.nextElementSibling.classList.toggle(
          "accordionItemCollapsed"
        );
      }
    });
  });
});

// for a counter
// const counterUp = window.counterUp.default

// const callback = entries => {
// 	entries.forEach( entry => {
// 		const el = entry.target
// 		if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
// 			counterUp( el, {
// 				duration: 2000,
// 				delay: 16,
// 			} )
// 			el.classList.add( 'is-visible' )
// 		}
// 	} )
// }

// const IO = new IntersectionObserver( callback, { threshold: 1 } )

// const el = document.querySelector( '.counter' )
// IO.observe( el )
// ========js for the counter
const counterUp = window.counterUp.default;

  let counterItems = document.querySelectorAll(".counter");
  let counterItemsObserver = new IntersectionObserver(function (
    entries,
    observer
  ) {
    entries.forEach(function (entry) {
      let counterItem = entry.target;

      if (
        entry.isIntersecting &&
        !counterItem.classList.contains("is-visible")
      ) {
        counterUp(counterItem, {
          duration: 2000,
          delay: 16,
        });
        counterItem.classList.add("is-visible");
        counterItemsObserver.unobserve(counterItem);
      }
    });
  });
  counterItems.forEach(function (counterItem) {
    counterItemsObserver.observe(counterItem);
  });

  // ============owl carousel 
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// ======google review code
jQuery(document).ready(function ($) {
  $(document).ready(function () {
      $("#google-reviews").googlePlaces({
          placeId: 'ChIJkRRokaoYoFMRxlQn2kPs83o'
          , render: ['reviews']
          , min_rating: 4
          , max_rows: 4
          , rotateTime: 16000
      });
  });
});
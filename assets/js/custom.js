// js for the menu navbar
const mobile_nav = document.querySelector(".mobile-nav-btn");
const nav_second_top_header = document.querySelector(".heading-2");

const toggleNavbar = () => {
  nav_second_top_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());

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
  $("#date").datepicker();
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


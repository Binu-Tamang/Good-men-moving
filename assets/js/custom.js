

// js for the menu navbar
const mobile_nav = document.querySelector(".mobile-nav-btn");
const nav_second_top_header = document.querySelector(".heading-2");

const toggleNavbar = () => {
nav_second_top_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar()); 

//  js for review card slider
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  dots: true,
  autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});
// js for contact form

const form = document.getElementById("moveForm");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(form);
  const formDataObject = {};

  formData.forEach((value, key) => {
    formDataObject[key] = value;
  });

  // Perform validation
  const errors = validateForm(formDataObject);

  if (Object.keys(errors).length === 0) {
    // No errors, submit the form or perform further actions
    console.log("Form data is valid:", formDataObject);
    // You can submit the form using fetch, XMLHttpRequest, etc.
  } else {
    // Display error messages
    displayErrors(errors);
  }
});

function validateForm(formData) {
  const errors = {};

  if (!formData.firstName) {
    errors.firstName = "First name is required.";
  }

  if (!formData.lastName) {
    errors.lastName = "Last name is required.";
  }

  if (!formData.email) {
    errors.email = "Email is required.";
  } else if (!isValidEmail(formData.email)) {
    errors.email = "Invalid email format.";
  }

  if (!formData.phoneNumber) {
    errors.phoneNumber = "Phone number is required.";
  } else if (!isValidPhoneNumber(formData.phoneNumber)) {
    errors.phoneNumber = "Invalid phone number format.";
  }

  // Add more validation rules as needed

  return errors;
}

function isValidEmail(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}

function isValidPhoneNumber(phoneNumber) {
  const phonePattern = /^\d{3}-\d{2}-\d{3}$/;
  return phonePattern.test(phoneNumber);
}

function displayErrors(errors) {
  // Clear previous error messages
  const errorContainer = document.getElementById("errorContainer");
  errorContainer.innerHTML = "";

  // Display error messages
  for (const field in errors) {
    const errorElement = document.createElement("p");
    errorElement.className = "error-message";
    errorElement.textContent = errors[field];
    errorContainer.appendChild(errorElement);
  }
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

// js for banner details slider


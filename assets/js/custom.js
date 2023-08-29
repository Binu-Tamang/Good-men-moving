// JavaScript for toggling mobile navigation
const mobile_nav = document.querySelector(".mobile-nav-btn");
const nav_list = document.querySelector(".nav-list");

const toggleNavbar = () => {
  nav_list.classList.toggle("active");
};

mobile_nav.addEventListener("click", toggleNavbar);


// js for text slider up and down
$(document).ready(function () {
  var changebox = $(".changebox");

  var firstclone = changebox.children(":first").clone();
  changebox.append(firstclone);

  var fsstr = changebox.parent().css("font-size");
  fsstr = fsstr.slice(0, fsstr.indexOf("p"));
  var fs = parseInt(fsstr);

  changebox.css("height", changebox.parent().css("font-size"));
  ChangeSize(0);
  setInterval(Next, 2000);

  function Next() {
    if (typeof Next.i == "undefined") {
      Next.i = 0;
    }
    Next.i++;
    if (Next.i == changebox.children("span").length) {
      Next.i = 1;
      changebox.scrollTop(0);
    }
    changebox.animate({ scrollTop: fs * Next.i + Next.i * 5 + 3 }, 500);
    setTimeout(function () {
      ChangeSize(Next.i);
    }, 500);
  }
  function ChangeSize(i) {
    var word = changebox.children("span").eq(i);
    var wordsize = word.css("width");
    changebox.css("width", wordsize);
  }
});
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
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});
// js for form

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


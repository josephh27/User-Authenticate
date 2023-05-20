// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}

//Input boxes effect
const inputBoxes = document.querySelectorAll(".input-1");
inputBoxes.forEach((elem) => {
  elem.addEventListener('focus', () => setFocus(true));
  elem.addEventListener('blur', () => setFocus(false));
})

function setFocus(on) {
  var element = document.activeElement;
  if (on) {
    setTimeout(function () {
      element.parentNode.classList.add("focus");
    });
  } else {
    let box = document.querySelector(".input-box");
    box.classList.remove("focus");
    inputBoxes.forEach(function (elem) {
      var input = elem;
      var parent = input.closest(".input-box");
      if (input.value) parent.addClass("focus");
      else parent.classList.remove("focus");
    });
  }
}
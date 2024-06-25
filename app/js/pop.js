// ---- ---- Const ---- ---- //
const cookiesBox = document.querySelector('.cookies-box');
const buttons = document.querySelectorAll('.cookies__btn');

// Function to show the cookie consent box
const showCookiesBox = () => {
  cookiesBox.classList.add('show');
};

// Function to hide the cookie consent box
const hideCookiesBox = () => {
  cookiesBox.classList.remove('show');
};

// ---- ---- Show ---- ---- //
const executeCodes = () => {
  showCookiesBox(); // Show the cookie consent box initially

  // ---- ---- Button ---- ---- //
  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      hideCookiesBox(); // Hide the cookie consent box
      // Navigate to the page when the button is clicked
      window.location.href = 'https://greencapeengineering.com/sseg-form/';
      // Set a timeout to bring the box back after 10 seconds
      setTimeout(showCookiesBox, 10000); // 10 seconds in milliseconds
    });
  });
};

window.addEventListener('load', executeCodes);

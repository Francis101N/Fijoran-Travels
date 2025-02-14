const mainImg = document.querySelector('.right img');
const images = [
  "IMAGES/389475cfab8acca101f17a2a4dd45410.jpeg",
  "IMAGES/55a46dc66375049240afcef8e5c1dfac.jpeg",
  "IMAGES/19847eafacacaad877eb1c9f071ddfac.jpeg",
  "IMAGES/28817e1b6d52b3c1b51a441423106eaf.jpeg",
  "IMAGES/Group 15.png",

];

let currentIndex = 0;

setInterval(() => {
  mainImg.src = images[currentIndex];
  currentIndex = (currentIndex + 1) % images.length; 
}, 5000);

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom >= 0
    );
}

// Select article three element img
const artThreeImg = document.querySelectorAll('.art-three-right-img');

// Function to add the slide-in class when elements are in viewport
function slideInElements() {
    // Handle h2 elements
    artThreeImg.forEach(function(cont) {
        if (isInViewport(cont)) {
            cont.classList.add('slideInForArtThreeImg');
        }
    });
    
}
// Check for scrolling and initial page load
window.addEventListener('scroll', slideInElements);
window.addEventListener('DOMContentLoaded', slideInElements);

let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("slide");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
window.onload = function() {
  var orderNowText = document.getElementById('orderNow');

  // Function to animate the "Order Now" text
  function animateOrderNow() {
      var opacity = 0;
      var intervalId = setInterval(function() {
          opacity += 0.05; // Increase opacity gradually
          orderNowText.style.opacity = opacity;
          if (opacity >= 1) {
              clearInterval(intervalId); // Stop the animation when opacity reaches 1
              setTimeout(function() {
                  orderNowText.style.opacity = 0; // Reset opacity to 0 after reaching 1
                  animateOrderNow(); // Start the animation again
              }, 1000); // Delay before restarting animation (adjust as needed)
          }
      }, 50); // Adjust speed of animation here
  }

  // Call the animateOrderNow function to start the animation
  animateOrderNow();
};

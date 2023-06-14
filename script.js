let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
function showModal() {
  document.querySelector('.overlay').classList.add('showoverlay');
  document.querySelector('.loginform').classList.add('showloginform');

}
function closeModal() {
  document.querySelector('.overlay').classList.remove('showoverlay');
  document.querySelector('.loginform').classList.remove('showloginform');


}

//logout request
function logout() {
  // Create a new AJAX request object
  var xhr = new XMLHttpRequest();

  // Set the URL of the PHP script that performs the logout action
  var url = "logout.php";

  // Set the HTTP method to POST and the content type to "application/x-www-form-urlencoded"
  xhr.open("POST", url);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Handle the response from the PHP script
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // The AJAX request was successful, do something with the response
      console.log(xhr.responseText);
    }
  };

  // Send the AJAX request
  xhr.send();


}
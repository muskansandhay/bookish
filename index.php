<?php
require_once("template/header.php");
?>
  <div class="category">
      <span><a href="#tb">Trending Books</a></span>
      <span><a href="#popular">Popular Categories</a></span>
      <span><a href="#feed">Feedback</a></span>
      <span><a href="#sub">Subscribe</a></span>
    </div>
    <!--slideshow start-->
    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="img/book1.jpg" style="width:100%">

      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="img/book2.jpg" style="width:100%">

      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="img/book3.jpg" style="width:100%">

      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="img/book4.jpg" style="width:100%">

      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="img/book5.jpg" style="width:100%">

      </div>



      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    </div>


    <!--trending books start here -->
    <div class="trending books" id="tb">
      <h1>TRENDING BOOKS</h1>
      <div class="pagination" id="pagination">
        <a href="#">&laquo;</a>
        <img src="img/1.jpg">
        <img class="active" src="img/2 pic.png">
        <img src="img/3 pic.jpg">
        <img src="img/4.jpg">
        <a href="#">&raquo;</a>
      </div>
    </div>
    <br>
    <div class="categories" id="popular">
      <h1 class="h1">POPULAR CATEGORIES </h1>
      <div class="cat1">
        <a href="kids.php">
          Kids' Easter
        </a>
      </div>
      <div class="cat2">
        <a href="fantasy.php">
          Fantasy
        </a>
      </div>
      <div class="cat3">
        <a href="comic.php">
          Comic
        </a>
      </div>
      <div class="cat4">
        <a href="education.php">
          Educational
        </a>
        <br>
      </div>
      <br>
    </div>
    <div class="freebooks" id="feed">
      <div class="heading">
        <h1>LOVE FREE BOOKS ??</h1>
      </div>
      <div class="para">
        <p>Join our program and earn points for every book you buy. To get all the extra points fill the sign up form
          below. And give feedback by clicking at button below.</p>

        <button class="feedbackbutton"><a href="contactUs.html">GIVE FEEDBACK</button>
        </a>
      </div>


    </div>
    <HR>
  <?php
  require_once("template/footer.php");
  ?>
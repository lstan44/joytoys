<?php
    require_once('head.php');
    require_once('nav.php');
?>
      <div class="jumbotron">
      <div id="myCarousel" class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/display_1.jpg" alt="First slide">
        <div class="carousel-caption">
          <p style="color: #f7f7f7; font-family: bold; font-size: 1.3em">Because it takes a village to raise a child.</p>
          <form action="/receive.php">
            <button type="submit" class="btn btn-primary mb-2">Build Your Community Now</button>
        </form>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/display_2.jpg" alt="Second slide">
        <div class="carousel-caption">
          <p style="color: #f7f7f7; font-family: bold; font-size: 1.3em">Our goal is to bring love and joy to your children.</p>
          <form action="/receive.php">
            <button type="submit" class="btn btn-primary mb-2">Build Your Community Now</button>
        </form>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/display_3.jpg" alt="Third slide">
        <div class="carousel-caption">
          <p style="color: #f7f7f7; font-family: bold; font-size: 1.3em">Alone, we can do so little; Together, we can do so much.</p>
        </div>
    </div>
  </div>
  </a>
</div>
      </div>
      <div style="text-align: center">
        <h2>Our Mission</h2>
        <p> To foster a sense of community within your network and at the same time provide the tools that children need for the sake of their emotional growth, mental development and social well-being.</p>
        <p>We know that toys help develop creativity, improve problem solving skills, and encourage socialization and cooperation.</p>
        <p>By providing these toys, we hope to foster a sense of community within your network and at the same time provide the tools that children need for the sake of their emotional growth, mental development and social well-being.</p>
          
          </div>
<?php
  require_once 'footer.php'
?>
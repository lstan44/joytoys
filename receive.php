<?php
    require_once('head.php');
    require_once('nav.php');
?>
      <div class="jumbotron">
        <p class="lead">Every child deserves a gift regardless of circumstances.</br>
                        Fill out the form below for a chance to receive a gift for the Holidays.
        </p>
      </div>

      <form action="register.php" method="post">
        Tell us your story: </br>
        <textarea name="story" rows="6" cols="70">
        </textarea>
      </br>
      Your full name: </br>
          <input type="text" name="fullname"></br>
      Your email:</br>
          <input type="Email" name="email"></br>
      Your phone number:</br>
          <input type="phone" name="phone"></br>
      Your address: </br>
          <input type="text" name="address"></br>
      Your Amazon Wishlist: </br>
          <input type="text" name="list_id"></br>

          <input type="submit">

      </form>

      <footer class="footer">
        <p>&copy; JoyToys 2019</p>
      </footer>

    </div>
  </body>
</html>

<?php
    require_once('head.php');
    require_once('nav.php');
?>
      <div class="jumbotron">
        <p class="lead">Every child deserves a gift regardless of circumstances.<br />
                        Fill out the form below for a chance to receive a gift for the Holidays.
        </p>
      </div>

      <form action="register.php" method="post">
      Your Full Name: <br />
          <input type="text" class="form-control" name="fullname" placeholder="Johnny Bravo" required><br />
      Your E-mail:<br />
          <input type="Email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="name@example.com" required><br />
      Your Phone Number:<br />
          <input type="phone" class="form-control" name="phone" placeholder="678-999-8212" required><br />
      Your Amazon Wishlist ID: <br />
          <input type="text" class="form-control" name="list_id" placeholder="e.g. 1YV5N1HU2E901" required><br />
          Tell us your story: <br />
        <textarea class="form-control" name="story" rows="5" maxlength="3000" minlength="10" placeholder="Your story will be shared with generous donors!" required></textarea>
        <br />
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
<?php
  require_once 'footer.php'
?>

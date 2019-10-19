
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JoyToys</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/joytoys/css/bootstrap.min.css">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="/joytoys/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/joytoys/our-mission.php">Our Mission</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/joytoys/receive.php">Receive a Gift</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/joytoys/buy.php">Buy a Gift</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/donate.php">Donate</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">JoyToys</h3>
      </div>

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

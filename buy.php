  <?php
  require_once('head.php');
  require_once('nav.php');
  $list_id = $_POST["wishlist_id"];
  function getWishListJson($id){
    $url = "http://www.justinscarpetti.com/projects/amazon-wish-lister/api/?id=".$id;
    $raw = file_get_contents($url);
    $json = json_decode($raw,true);
    return $json;
    // var_dump($json);
  }
      $json_data = getWishListJson($list_id);
      //Traverse array and get the data for amazon gifts in wishlist
      // var_dump($json_data[0]);
      if (is_array($json_data) || is_object($json_data)){ // silences error
        echo '<table>';
        foreach ($json_data as $key => $val) {
          if($val['num']>3) break; // upto 3 items
          $link = $val['link'];
          echo '<tr><td><a href ="'.$link.'"><img src="' . $val['picture']. '"alt="Image"</a></td></tr>';
          echo '<tr><td><a href ="'.$link.'">' . $val['name']. '</a></td></tr>';
          // echo '<tr><td>' . $val['link']. '</td></tr>'; // make it as link
          echo '</a>';
          $price = preg_replace('/<span class=\"a-offscreen\">(.+?)<\/span>/s','',$val['new-price']);
          if($price == ''){ echo '<tr><td>Sorry. Out of stock item.</td></tr>'; }
          else echo '<tr><td>' . $price. '</td></tr>';// old-price if new-price is blank/item is outta stock
          // echo '<img src=">' . $val['picture']. '" alt = "Pic">';
        }
        echo '</table>';
      }

  ?>
  <body>      

    <form method="post">
      <input type="text" value="" name="wishlist_id" placeholder="Enter the wishlist Id here:">
      <input type="submit">
    </form>

    <?php
  require_once 'footer.php'
?>
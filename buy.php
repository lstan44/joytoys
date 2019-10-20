<?php
require_once('head.php');
require_once('nav.php');
function getWishListJson($id){
  $url = "http://localhost/joytoys/wishlist.php?id=".$id;
  $raw = file_get_contents($url);
  $json = json_decode($raw,true);
  return $json;
  // var_dump($json);
}

$wishlist_id = array("1YV5N1HU2E901","F01K7CEUBOE3");
$idx = array_rand($wishlist_id);
$amaz_id = $wishlist_id[$idx];
    $json_data = getWishListJson($amaz_id);
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

    <footer class="footer">
      <p>&copy; JoyToys 2019</p>
    </footer>
